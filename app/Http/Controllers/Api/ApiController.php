<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Laptops;
use Illuminate\Http\Request;
use DB;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Validator;

class ApiController extends Controller
{
    public function all_product(){
        $products = DB::table('products')->get();
        echo $products;
    }

    public function Products($category_id){
        $products = DB::table('products')->where('category_id',$category_id)
        ->select('products.*','categories.brand')
        ->join('categories', 'categories.id', '=', 'products.category_id')
        ->get();
        echo $products;
    }

    public function detailget($id){
        $products = DB::table('products')->where('products.id',$id)
        ->select('products.*','categories.brand' )
        ->join('categories', 'categories.id', '=', 'products.category_id')
        ->get();
        echo $products;
    }


    public function count($category_id){
        $total = DB::table('products')->where('category_id',$category_id)->sum('products.count');
        $success = true;
       $message = 'Show Data retrieved successfully.';
       if (is_null($total)) {
           return $this->sendError('Product not found.');
       }
       return response()->json(['success'=>$success, 'data'=>$total, 'message'=>$message]);
    }

    public function cart_count($user_id){
        $total = DB::table('cart')->where('user_id', $user_id)->sum('cart.count');
        $success = true;
       $message = 'Show Data retrieved successfully.';
       if (is_null($total)) {
           return $this->sendError('Product not found.');
       }
       return response()->json(['success'=>$success, 'data'=>$total, 'message'=>$message]);
    }
    public function wishlist_count($user_id){
        $total = DB::table('wishlist')->where('user_id', $user_id)->sum('wishlist.count');
        $success = true;
       $message = 'Show Data retrieved successfully.';
       if (is_null($total)) {
           return $this->sendError('Product not found.');
       }
       return response()->json(['success'=>$success, 'data'=>$total, 'message'=>$message]);
    }

    public function detailspage($id){
        $products = DB::table('products')->where('id',$id)->get();
        echo $products;
    }

    public function show_cart($user_id){
        $products = DB::table('cart')->where('user_id',$user_id)->get();
        echo $products;
    }
    public function show_wishlist($user_id){
        $products = DB::table('wishlist')->where('user_id',$user_id)->get();
        echo $products;
    }


    public function insert_cart(Request $request){
     $id =$request->id;
     $data = DB::table('cart')->where('product_id',$request->product_id)->where('user_id',$request->user_id)->first();
     if($data){
        // dd('testingg');
        $quantity = $data->quantity;
        $qplus =$quantity+1;
        $price = $data->price;
        $product_id = $data->product_id;
        $totalprice = (int)( $price ) * (int)( $qplus );
      $array = array(
        'quantity' => $qplus,
        'totalprice' => $totalprice,
        'product_id' => $product_id,
        );
        $success = true;
        $message = 'User Contact successfully.';
        DB::table('cart')->where('id',$data->id)->update($array);
    }else{
        $array = array([
            'image' =>$request->image,
            'model_name' =>$request->model_name,
            'price' =>$request->price,
            'totalprice' =>$request->price,
            'user_id' =>$request->user_id,
            'product_id' =>$request->product_id,
        ]);

        $success = true;
        $message = 'User Contact successfully.';
        DB::table('cart')->insert($array);
    }
        return response()->json(['success'=>$success, 'data'=>$array, 'message'=>$message]);
     }

    public function insert_order_address(Request $request){
        $array = array([
        'user_id' => $request->user_id,
        'fullname' => $request->fullname,
        'phone' => $request->phone,
        'location' => $request->location,
        'city' => $request->city,
        'pincode' => $request->pincode,
        ]);
        $success = true;
        $message = 'addresses added successfully';
        DB::table('addrres_details')->insert($array);
        return response()->json(['success'=>$success, 'data'=>$array, 'message'=>$message]);
    }

    public function insert_order(Request $request){
        $array = array([
        'user_id' => $request->user_id,
        'model_name' => $request->model_name,
        'price' => $request->price,
        'quantity' => $request->quantity,
        'image' => $request->image,
        // 'order_status' => $request->order_status,
        'payment_methods' => $request->payment_methods,
        ]);
        $success = true;
        $message = 'Insert Order added successfully';
        DB::table('order')->insert($array);
        return response()->json(['success'=>$success, 'data'=>$array, 'message'=>$message]);
    }

    public function show_order($user_id){
        $order = DB::table('order')->where('user_id',$user_id)->get();
        echo $order;
    }

    public function insert_wishlist(Request $request){

      $array = array([
            'product_id' =>$request->product_id,
            'image' =>$request->image,
            'model_name' =>$request->model_name,
            'price' =>$request->price,
            'user_id' =>$request->user_id,
        ]);
        $success = true;
        $message = 'User insert wishlist successfully.';
        DB::table('wishlist')->insert($array);
        return response()->json(['success'=>$success, 'data'=>$array, 'message'=>$message]);
     }

     public function pluscart($id)
     {
         $data =DB::table('cart')->where('id',$id)->first();
         $quantity = $data->quantity;
         $qplus =$quantity+1;
         $id = $data->id;
         $price = $data->price;
         $totalprice = (int)( $price ) * (int)( $qplus );
         $array = array(
             'quantity' => $qplus,
             'totalprice' => $totalprice,
         );
         $plus = DB::table('cart')->where('id', $id)->update($array);
        echo $plus;
     }
     public function minuscart($id)
     {
         $data =DB::table('cart')->where('id',$id)->first();
         $quantity = $data->quantity;
         $qplus =$quantity-1;
         $id = $data->id;
         $price = $data->price;
         $totalprice = (int)( $price ) * (int)( $qplus );
         if ($qplus >= 1) {
             $array = array(
                 'quantity' => $qplus,
                 'totalprice' => $totalprice,
             );
         } else{
             $array = 'Not available bcoz only 1';
         }
         $minus = DB::table('cart')->where('id', $id)->update($array);
         echo $minus;
     }

     public function delete($id)
     {
         $array =DB::table('cart')->where('id',$id)->delete();
        echo $array;
     }
     public function deletewishlist($id)
     {
         $array = DB::table('wishlist')->where('id',$id)->delete();
        echo $array;
     }

     public function totalprice($user_id){
         $total = DB::table('cart')->where('user_id' ,$user_id)->sum('cart.totalprice');
         $success = true;
       $message = 'Show Data retrieved successfully.';
       if (is_null($total)) {
           return $this->sendError('Product not found.');
       }
       return response()->json(['success'=>$success, 'data'=>$total, 'message'=>$message]);
     }

     public function total_price($user_id){
         $total = DB::table('wishlist')->where('user_id', $user_id)->sum('wishlist.price');
         $success = true;
       $message = 'Show Data retrieved successfully.';
       if (is_null($total)) {
           return $this->sendError('Product not found.');
       }
       return response()->json(['success'=>$success, 'data'=>$total, 'message'=>$message]);
     }

     public function total_quantity($user_id){
         $total = DB::table('cart')->where('user_id', $user_id)->sum('cart.quantity');
         $success = true;
       $message = 'Show Data retrieved successfully.';
       if (is_null($total)) {
           return $this->sendError('Product not found.');
       }
       return response()->json(['success'=>$success, 'data'=>$total, 'message'=>$message]);
     }


     public function register(Request $request){

        $array = [
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'password'=>Hash::make($request->password),
        ];
        $success = true;
        $message = 'users successfully.';
        DB::table('users')->insert($array);
        return response()->json(['success'=>$success, 'data'=>$array, 'message'=>$message]);
    }


    public function signOut() {
      $logout= Auth::logout();
       echo $logout;
      }

//       public function login(Request $request)
//   {
//     if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
//         //   $user = Auth::user();
//         $success = true;
//         $message = 'users successfully.';
//               return response()->json($success, 'User login successfully.');
//           }
//       else{
//           return response()->json('Unauthorised.', ['error'=>'Unauthorised']);
//       }
//     }

    //
    // public function login (Request $request) {

    //     $user = User::where('email', $request->email)->first();
    //     if ($user) {
    //         if (Hash::check($request->password, $user->password)) {
    //             $token = $user->createToken('Laravel Password Grant Client')->accessToken;
    //             $response = ['token' => $token];
    //             return response($response, 200);
    //         } else {
    //             $response = ["message" => "Password mismatch"];
    //             return response($response, 422);
    //         }
    //     } else {
    //         $response = ["message" =>'User does not exist'];
    //         return response($response, 422);
    //     }
    // }


    // public function login(Request $request)
    // {
    //     $validator = Validator::make($request->all(), [
    //                 // 'name' => 'required',
    //                 'email' => 'required|email',
    //                 'password' => 'required',
    //             ]);
    //         if($validator->fails()){
    //             return 'User login error in email password';
    //         }
    //     if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
    //         $user = Auth::user();
    //         $success['token'] =  $user->createToken('MyApp')-> accessToken;
    //         $success['name'] =  $user->name;
    //         $message = 'User login successfully.';
    //         // return $this->sendResponse($success, 'User login successfully.');
    //         return response()->json(['success'=>$success, 'data'=>$user, 'message'=>$message]);
    //     }
    //     else{
    //         return 'User login failed';
    //         // return $this->sendError('Unauthorised.', ['error'=>'Unauthorised']);
    //     }

    //     $email = $request->email;
    //     $password = $request->password;
    //     $user = DB::table('users')->where('email', '=', $email)->first();
    //     if (!$user) {
    //     //    return redirect()->back()->with('alert-success', 'invalid username');
    //        return response()->json('alert-success', 'invalid email');
    //     }
    //      if (!Hash::check($password, $user->password))
    //       {
    //         // return redirect()->back()->with('password', 'invalid password');
    //         return response()->json('password', 'invalid password');
    //     }
    //    }

       public function login(Request $request)
    {
        // dd($request->all());
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            $user = Auth::user();

                $success['id'] =  $user->id;
                $success['name'] =  $user->name;
                $success['email'] =  $user->email;
                $success['token'] =  $user->createToken('MyApp')->accessToken->token;
                $token = Str::random(64);
                // dd($success);
                return $this->sendResponse($success, 'User login successfully.');

        }
        else{
            return $this->sendError('Unauthorised.', ['error'=>'Unauthorised']);
        }
    }
    }

