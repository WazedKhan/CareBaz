<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\User;
use Dflydev\DotAccessData\Data;
use Illuminate\Auth\Events\Attempting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

class UserController extends Controller
{
    public function register()
    {
        return view('website.register');
    }

    public function doRegister()
    {
        $data = request()->validate([
            'customer_name'=>'required',
            'phone'=>'required|min:11|unique:users',
            'email'=>'required|email|unique:users',
            'customer_area'=>'required',
            'customer_password'=>'required',
            'customer_address'=>'required',
        ]);

        User::create([
            'name'=>request()->customer_name,
            'phone'=>request()->phone,
            'email'=>request()->email,
            'area'=>request()->customer_area,
            'password'=>bcrypt(request()->customer_password),
            'address'=>request()->customer_address,
        ]);

        return redirect()->back()->with('success',"Acount Created Successfully ");

    }

    public function login()
    {
        return view('website.login');
    }

    public function doLogin(Request $request)
    {
        
        if(Auth::attempt(['email' => $request['email'], 'password' => $request['customer_password']]))
        {
            return redirect()->intended();
        }
        else
        {
            return redirect()->back()->with('Login_failed', "Phone or Password did't matched.");
        }
    }

    public function profile()
    {
        return view('website.profile.d');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('home');
    }

    public function order()
    {
        $user = Auth::user();
        $orders = Order::where('user_id',$user->id)->latest()->get();
        return view('website.profile.orderList',compact('orders'));
    }

    public function edit()
    {
        $user = Auth::user();
        return view('website.profile.edit',compact('user'));
    }

    public function profileUpdate()
    {
        request()->validate([
            'name'=>'required',
            'phone'=>'required',
            'email'=>'required',
            'password'=>'required',
        ]);

        $user = User::where('id',Auth::user()->id)->first();
        $user->update([
            'name'=>request()->name,
            'phone'=>request()->phone,
            'email'=>request()->email,
            'password'=>bcrypt(request()->password),
        ]);

        return redirect()->back();
    }
}
