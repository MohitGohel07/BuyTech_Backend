<?php

namespace App\Http\Controllers;

use App\Mail\ResetPassword;
use App\Mail\WelcomeMail;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{
    public function index()
    {
        $data = DB::table('products')->latest()->take(4)->get();
        $carousels = DB::table('products')->inRandomOrder()->take(10)->get();
        $male = DB::table('products')->where('gender_id', '2')->inRandomOrder()->take(1)->first();
        $female = DB::table('products')->where('gender_id', '3')->inRandomOrder()->take(1)->first();
        $analog = DB::table('products')->where('type_id', '1')->inRandomOrder()->take(1)->first();
        $digital = DB::table('products')->where('type_id', '2')->inRandomOrder()->take(1)->first();

        return view('index', compact('data', 'carousels', 'male', 'female', 'digital', 'analog'));
    }
    public function shopping()
    {
        $datas = DB::table('products')->get();     
        $genders = DB::table('genders')->get();     
        $types = DB::table('types')->get();     
        $title = [];
        foreach($datas as $data){
            $title[] = $data->title; 
        }

        return view('shopping', compact('datas','title','genders','types'));
    }
    public function product_info($id)
    {
        $data = DB::table('products')->where('id', $id)->first();
        $datas = DB::table('products')->inRandomOrder()->take(10)->get();

        return view('ProductInfo', compact('data', 'datas'));
    }

    public function AddCart($id = null)
    {
        if (Auth::check()) {
            $prices = DB::table('products')->where('id', $id)->first();
            $price = $prices->price;
            $uid = Auth::user()->id;
            $array = array('product_id' => $id, 'user_id' => $uid, 'total' => $price);
            $userData = DB::table('carts')->where('user_id', $uid)->Where('product_id', $id)->first();

            if (!empty($userData)) {
                return redirect()->back()->with('cart', 'already added');
            }
            DB::table('carts')->insert($array);
            return redirect()->back()->with('cart', 'success add to cart');
        }
        return redirect('login');
    }

    public function cart()
    {
        $id = Auth::user()->id;
        $rawdata = DB::table('carts')->where('user_id', $id)
            ->select('products.*', 'carts.*')
            ->join('products', 'products.id', '=', 'carts.product_id');

        $data = $rawdata->get();
        $sum = $rawdata->sum('carts.total');

        return view('cart', compact('data', 'sum'));
    }

    public function login()
    {
        return view('login');
    }

    public function register()
    {
        return view('register');
    }

    public function register_add(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => "required",
        ]);

        $email = $request->email;
        $data = array(
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        );
        DB::table('users')->insert($data);
        Mail::to($email)->send(new WelcomeMail($data));
        return redirect('/');
    }
    public function loginUser(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => "required",
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            if (Auth::user()->role == 2) {
                return redirect()->intended('/');
            } else {
                return redirect()->back()->with(['email' => 'Invalid Username / Password']);
            }
        }
        $email = $request->input('email');
        $password = $request->input('password');

        $user = User::where('email', '=', $email)->first();
        if (!$user) {
            return  redirect()->back()->with(['success' => false, 'email' => 'Invalid Username / Password']);
        }
        if (!Hash::check($password, $user->password)) {
            return redirect()->back()->with('password', 'Login Fail, please check password');
        }
    }

    public function logout()
    {
        Auth::logout(); // logging out user
        return redirect('/login');
    }

    public function product_type($id)
    {
        $datas = DB::table('products')->where('type_id', $id)->get();
        return view('ProductType', compact('datas'));
    }
    public function product_gender($id)
    {
        $datas = DB::table('products')->where('gender_id', $id)->get();
        return view('ProductType', compact('datas'));
    }


    //update qty
    public function update_qty(Request $request)
    {
        $id = $request->id;
        $qty = $request->qty;
        $price = $request->price;
        $total = $price * $qty;
        $totalqty = ['qty' => $qty, 'total' => $total];
        $data =  DB::table('carts')->where('id', $id)->update($totalqty);

        return response()->json($total);
    }
    public function order()
    {
        $id = Auth::user()->id;
        $rawdata = DB::table('orders')->where('user_id', $id)->whereNot('order_status','0')
        ->select('products.*', 'orders.*')
        ->join('products', 'products.id', '=', 'orders.product_id');
        $complated = DB::table('orders')->where('user_id', $id)->where('order_status','0')
        ->select('products.*', 'orders.*')
        ->join('products', 'products.id', '=', 'orders.product_id')->get();

    $data = $rawdata->get();
    $sum = $rawdata->sum('orders.total');
        return view('order.order',compact('data','sum','complated'));
    }
    public function orderplace()
    {
        $id = Auth::user()->id;
        $qty = DB::table('carts')->where('user_id', $id)->sum('carts.qty');
        $total = DB::table('carts')->where('user_id', $id)->sum('carts.total');

        return view('order.orderplace', compact('qty', 'total'));
    }
    public function order_add(Request $request)
    {
        $request->validate([
            'address' => 'required',
        ]);

        $id = Auth::user()->id;
        $data = DB::table('carts')->where('user_id', $id)->get();
        $lastId  = DB::table('orders')->orderBy('id', 'desc')->first();
        
        if(!empty($lastId)){
            $order_id = $lastId->order_id;
            $order_id++;
        }else{
            $order_id = '1';
        }
        
        foreach ($data as $item) {
            $insert = [
                'product_id' => $item->product_id,
                'user_id' => $item->user_id,
                'order_id' => $order_id,
                'qty' => $item->qty,
                'total' => $item->total,
                'address' => $request->address,
                'payment' => $request->payment,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                
            ];
            DB::table('orders')->insert($insert);
        }
        DB::table('carts')->where('user_id', $id)->delete();

        $data = DB::table('orders')->where('order_id', $order_id)->whereNot('order_status','0')
        ->select('products.*', 'orders.*')
        ->join('products', 'products.id', '=', 'orders.product_id')->get();
        return view('invoice',compact('data','order_id'));
    }

    public function product_search(Request $request)
    {
        $gender_id = $request->gender;
        $type_id = $request->type;
       
        $datas = DB::table('products');
        if(!empty($gender_id)){
            $datas = $datas->where('gender_id',$gender_id);
        }
        if(!empty($type_id)){
            $datas = $datas->where('type_id',$type_id);
        }
        if (!empty($request->data)) {
            $datas = $datas->where('title', 'like', '%' . $request->data . '%');
        }
        $datas = $datas->get();

        return view('product_search', compact('datas'));
    }

    //=======forgot password====
    public function Reset()
    {
        return view('forgotpassword');
    }
    public function ResetPassword(Request $request)
    {
        $email = $request->email;
        $Uemail = DB::table('users')->where('email', $email)->first();
        // dd($Uemail);
        if (!empty($Uemail)) {
            if ($email == $Uemail->email) {
                $mailData = [
                    'title' => 'Mail from tcsgrading.com',
                    'body' => 'This is for testing email using smtp.',
                    'email' => $email,
                    'id' => $Uemail->id,
                    'name' => $Uemail->name,
                ];

                Mail::to($email)->send(new ResetPassword($mailData));

                return redirect()->back()->with('SentMail', 'We have emailed your password reset link');
            }
        } else {
            return redirect()->back()->with('email', 'Please enter a valid email address.');
        }
    }

    public function newpassword($id = null)
    {
        $id = DB::table('users')->where('id', $id)->first();
        return view('newpassword', compact('id'));
    }
    public function updatePassword(Request $request)
    {
        $id = $request->id;
        $request->validate([
            'password' => 'required',
            're-password' => 'required| same:password',
        ]);
        $array = array(
            'password' => Hash::make($request->password),
        );
        DB::table('users')->where('id', $id)->update($array);
        return redirect('login');
    }
}
