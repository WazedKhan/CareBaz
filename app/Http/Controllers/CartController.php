<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function orderNow()
    {
        $condition = Cart::where('product_id',request()->product_id)
                            ->where('ip_address',request()->ip())
                            ->where('order_id',null) 
                            ->exists();
        if ($condition) {
            $data = Cart::where('product_id',request()->product_id)
                            ->where('ip_address',request()->ip()) 
                            ->where('order_id',null)
                            ->first();
            $data->update([
                'quantity'=>request()->product_buy_item+$data->quantity
            ]);
        } 
        else {
            Cart::create([
                'quantity'=>request()->product_buy_item,
                'user_id'=>1,
                'product_id'=>request()->product_id,
                'ip_address'=>request()->ip(),
            ]);
        }

        return redirect()->route('cart');
    }

    public function addToCart_()
    {
        $condition = Cart::where('product_id',request()->product_id)
                            ->where('ip_address',request()->ip())
                            ->where('order_id',null) 
                            ->exists();
        if ($condition) {
            $data = Cart::where('product_id',request()->product_id)
                            ->where('ip_address',request()->ip()) 
                            ->where('order_id',null)
                            ->first();
            $data->update([
                'quantity'=>request()->product_buy_item+$data->quantity
            ]);
        } 
        else {
            Cart::create([
                'quantity'=>request()->product_buy_item,
                'user_id'=>1,
                'product_id'=>request()->product_id,
                'ip_address'=>request()->ip(),
            ]);
        }
        return redirect()->back();
    }

    public function cart()
    {


        $data = Cart::where('ip_address',request()->ip())
                ->where('order_id',null)
                ->latest()->get();

        $total = 0;
        $discount = 0;
        $tax = 0;
        foreach($data as $item){
            $tax += $item->product->tax;

        }
        $final_price = $total-$discount+$tax;
        return view('website.cartList',compact('data','tax'));
    }

    public function remove($cart_id)
    {
        Cart::findOrFail($cart_id)->delete();
        return redirect()->back();
    }

    public function increase($cart_id)
    {
        $product = Cart::findOrFail($cart_id);
        $product->update([
            'quantity'=>$product->quantity + 1
        ]);
        return redirect()->back();
    }

    public function decrease($cart_id)
    {
        $product = Cart::findOrFail($cart_id);
        $product->update([
            'quantity'=>$product->quantity - 1
        ]);
        return redirect()->back();
    }

    public function makeOrder()
    {
        // dd(request()->all());
        request()->validate([
            'customer_name'=>'required',
            'customer_mobile'=>'required',
            'customer_email'=>'required',
            'customer_address'=>'required'
        ]);
        $user_id = null;
        if(Auth::check()){
            $user_id = Auth::user()->id;
        }

        $total = request()->sub_total + request()->travel_cost;

        $order = Order::create([
            'total' => $total,
            'user_id'=>$user_id,
            'name'=>request()->customer_name,
            'phone'=>request()->customer_mobile,
            'area'=>request()->customer_area,
            'address'=>request()->customer_address,
        ]);

        Cart::where('ip_address', request()->ip())->where('order_id',null)->update(
            [
                'order_id'=>$order->id,
                'user_id'=>$user_id
            ]);

        return redirect()->route('confirmation',$order->id);    
    }

    public function confirmation($id)
    {
        $cart = Cart::where('order_id',$id)->get();
        $order = Order::find($id);
        return view('website.done',compact('cart','order')); 
    }

    public function track()
    {
        // dd(request()->all());
        $key = null;
        if (request()->key) {
            $key = request()->key;
        }
        $order = Order::where('id',$key)->get();
        return view('website.track',compact('order'));
    }
}
