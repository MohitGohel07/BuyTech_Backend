<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class StoreController extends Controller
{
    public function dashboard()
    {
        if (Auth::check()) {
            return view('admin.dashboard');
    }
       return redirect('store/login');
    }

    public function storelogin()
    {
        return view('store.login');
    }
    public function users()
    {
        $users = DB::table('users')->where('storestatus','0')->get();
        return view('store.users',compact('users'));
    }
    public function accept($id)
    {

         User::where('id',$id)->update(['storestatus'=>3]);

        return redirect()->back()->with('success','Store Successfully Accepted');
    }

    public function create()
    {
        return view('store.create');
    }

    public function create_store(Request $request){
        // dd($request->all());
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'email' => 'required|email',
            'password' => "required",
        ]);

        $array =array([
            'name' =>$request->name,
            'email' =>$request->email,
            'phone' =>$request->phone,
            'address' =>$request->address,
            'password' =>Hash::make($request->password),
            'role' =>3,
            'storestatus' =>0,
        ]);
        // dd($array);
        User::insert($array);
         return redirect('store/login')->with('success','Store Created Successfully!');
    }

    public function logout()
    {
        Auth::logout();
        return view('store.login');
    }


    public function store_login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => "required",
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
             if(Auth::user()->storestatus == 3){
                return redirect()->intended('/store');
             }else{
                return redirect()->back()->with([ 'emailnotfound' => 'Login Fail, Please Wait Admin Accept Request...']);
             }
        }
        $email = $request->input('email');
        $password = $request->input('password');

        $user = User::where('email', '=', $email)->first();
        if (!$user) {
           return  redirect()->back()->with(['success'=>false, 'email' => 'Login Fail, please check email id']);
        }
        if (!Hash::check($password, $user->password)) {
           return redirect()->back()->with('password', 'Login Fail, pls check password');
        }
    }
}
