<?php

namespace App\Http\Controllers\Admin;

use App\Models\Info;
use App\Models\Order;
use App\Models\Product;
use App\Models\Category;
use App\Models\ProductImage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Contact;
use Intervention\Image\Facades\Image;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware(['admin','auth']);
    }
    public function index()
    {
        $info = Info::first();
        return view('admin.dashboard',compact('info'));
    }

    public function categoryView()
    {
        $categories = Category::all();
        return view('admin.category.category',compact('categories'));
    }

    public function categoryCreate()
    {
        $data = request()->validate([
            'name'=>'required|string',
            'description'=>'string'
        ]);
        Category::create($data);
        return redirect()->back()->with('success','Category Created Successfully');
    }

    public function categoryUpdateView($category_id)
    {
        $category = Category::findOrFail($category_id);
        return view('admin.category.update',compact('category'));
    }

    public function updateCategory($category_id)
    {
        $data = request()->validate([
            'name'=>'required|max:150',
            'description'=>'max:250'
        ]);
        Category::find($category_id)->update($data);
        return redirect()->route('category')->with('update','Updated Successfully');
    }

    public function product()
    {
        $products = Product::all();
        $categories = Category::all();
        return view('admin.product.index',compact('products','categories'));
    }

    public function createProduct()
    {
        // dd(request()->all());
        request()->validate([
            'image'=>'required'
        ]);

        $data = request()->validate([
            'name'=>'required|string',
            'price'=>'required|numeric',
            'tax'=>'required|numeric',
            'stock'=>'required|numeric',
            'description'=>'string',
            'limited'=>'',
            'discount'=>'',
            'active_for_sale'=>'',
            'category_id'=>'required'
        ]);
        $product =  Product::create($data);


        if (request('image')) {
            foreach (request()->image as $value) {
                $images = $value->store('proudctImages', 'public');
                // $image = Image::make(public_path("storage/{$images}"))->fit(600,600);
                // $image->save();
                ProductImage::create([
                    'product_id' => $product->id,
                    'image' => $images,
                ]);
            }
        }

        

        return redirect()->back();
    }

    public function order()
    {
        if (request()->key == 1) {
            $orders = Order::all();
        } 
        else{
            $orders = Order::where('status',request()->key)->get();
        };
        return view('admin.order.index',compact('orders'));
    }

    public function orderCancle($id)
    {
        Order::find($id)->update(['status'=>'Canceled']);
        return redirect()->back();
    }
    public function orderShiped($id)
    {
        Order::find($id)->update(['status'=>'Shiped']);
        return redirect()->back();
    }
    public function orderDone($id)
    {
        Order::find($id)->update(['status'=>'Confimed']);
        return redirect()->back();
    }

    public function contactInfo()
    {
        $texts = Contact::all();
        return view('admin.contact',compact('texts'));
    }

    public function orderDetalis($id)
    {
        $order = Order::find($id);
        $carts = Cart::where('order_id',$id)->get();
        return view('admin.order.details',compact('order','carts'));
    }

    public function banner()
    {
        request()->validate(['banner'=>'required']);
        $image = request()->banner->store('bannerImages', 'public');
        Info::first()->update([
            request()->bannar_no => $image
        ]);
        return redirect()->back()->with('banner','Banner Updated!');
    }

    public function number()
    {
        request()->validate(['number'=>'required']);
        Info::first()->update([
            request()->number_no => request()->number
        ]);
        return redirect()->back();
    }

    public function updateProductView($id)
    {
        $product = Product::find($id);
        $categories = Category::all();
        return view('admin.product.update',compact('product','categories'));
    }
    public function updateProduct($id)
    {
        Product::find($id)->update([
            'name'=>request()->name,
            'description'=>request()->description,
            'price'=>request()->price,
            'stock'=>request()->stock,
            'category_id'=>request()->category_id,
        ]);
        return redirect()->back();
    }

    public function deleteProduct($id)
    {
        Product::find($id)->delete();
        return redirect()->back();
    }

    public function productImage($id)
    {
        $images = ProductImage::where('product_id',$id)->get();
        return view('admin.product.images',compact('images','id'));
    }

    public function productImageDelete($id)
    {
        ProductImage::find($id)->delete();
        return redirect()->back();
    }

    public function productImageUpdate($id)
    {
        request()->validate(['image'=>'required']);
        $image = request()->image->store('proudctImages', 'public');
        ProductImage::find($id)->update([
            'image'=>$image
        ]);

        return redirect()->back();
    }

    public function productImageNew($id)
    {
        request()->validate([
            'image'=>'required'
        ]);
        if (request('image')) {
            foreach (request()->image as $value) {
                $images = $value->store('proudctImages', 'public');
                ProductImage::create([
                    'product_id' => $id,
                    'image' => $images,
                ]);
            }
        }
        return redirect()->back();
    }

    public function productDiscountUpdate($id)
    {
        Product::find($id)->update(['discount'=>request()->discount]);
        return redirect()->back();
    }
}
