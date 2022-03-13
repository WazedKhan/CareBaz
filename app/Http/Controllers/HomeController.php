<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Contact;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function home()
    {
        $products = Product::paginate(56)->sortBy('created_at');
        $categories = Category::all();
        return view('website.home',compact('products','categories'));
    }
    public function products()
    {
        $products = Product::all();
        return view('website.products',compact('products'));
    }
    public function productsDetail($product_id)
    {
        $product = Product::findOrFail($product_id);
        $needs = Product::all()->random(4);
        $products = Product::where('category_id',$product->category_id)->get();
        return view('website.productView',compact('product','products','needs'));
    }

    public function productList($category_id)
    {
        $products = Product::where('category_id',$category_id)->get();
        $category = Category::find($category_id);
        return view('website.productList',compact('products','category'));
    }

    public function hotProducts()
    {
        
        $products = Product::where('discount','!=',0)
            ->orderBy('updated_at', 'desc')
            ->get();
        return view('website.hotProducts', compact('products'));
    }

    public function search()
    {
        $key = 12;
        if(request()->search) {
            $key = request()->search;
        }
        $products = Product::where('name', 'LIKE', '%'.$key.'%')
            ->orderBy('updated_at', 'desc')
            ->get();
        return view('website.search', compact('products'));
    }

    public function about()
    {
        return view('website.about');
    }
    public function delivery_info()
    {
        return view('website.delivery_info');
    }
    public function replace_refund()
    {
        return view('website.refund');
    }
    public function contact()
    {
        return view('website.contact');
    }
    public function contactSub()
    {
        request()->validate(['message'=>'required']);
        Contact::create([
            'text'=>request()->message,
            'user_id'=>Auth::user()->id
        ]);
        return redirect()->back()->with('subSuc',"আপনার মতামত জমা দেওয়া হয়েছে |");
    }
}
