<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Support\Facades\Session;
use App\Notifications\SendEmailNotification;
use Notification;
use App\Models\Brand;
use App\Models\User;
use Illuminate\Pagination\Paginator;
use Mail;
use App\Models\Reference;

class FrontController extends Controller
{
    public function index()
    {
        $cartItems = \Cart::getContent();
        return view('welcome', compact('cartItems'));
    }

    public function category()
    {
        $cartItems = \Cart::getContent();
        return view('categories', compact('cartItems'));
    }

    public function products($name)
    {
        if (SubCategory::where('name',$name)->exists()) {
            $category = SubCategory::where('name',$name)->first();
            $name = SubCategory::where('name',$name)->first();
            $id = $category->id;
            $id_cat = $category->categ_id;
            $brand = Brand::all();
            $product = Product::where('cate_id',$id)->paginate(12);
            $getType = SubCategory::where('categ_id',$id_cat)->get();
            $cartItems = \Cart::getContent();
            return view('products',compact('product','name','getType','brand','cartItems'));

        }
    }

    public function products_id($id)
    {
        $type = SubCategory::where('categ_id',$id)->pluck('id');
        $getType = SubCategory::where('categ_id',$id)->get();
        $name = Category::where('id',$id)->first();
        $product = Product::whereIn('cate_id',$type)->paginate(12);
        $cartItems = \Cart::getContent();
        return view('products',compact('product','name','getType','cartItems'));
    }
    public function search(Request $request)
    {
        $name = $request->item;
        $product = Product::where('product_name',$name)->first();
        $products = Product::all();
        $cartItems = \Cart::getContent();
        return view('product', compact('product','name','cartItems','products'));
    }


    public function product($name)
    {
        $count_prd = Product::all()->count();
        if ($count_prd>=4) {
            $other_prd = Product::all()->random(4);
        } else {
            $other_prd = Product::all()->random($count_prd);
        }
        
        $product = Product::where('product_name',$name)->first();
        $cartItems = \Cart::getContent();
        return view('product', compact('product','other_prd','name','cartItems'));
    
    }

    public function contact()
    {
        $cartItems = \Cart::getContent();
        return view('contact', compact('cartItems'));
    }

    public function send(Request $request)
    {
        $name = $request->name;
        $phone = $request->phone;
        $email = $request->email;
        $subject = $request->subject;
        $message1 = $request->message;
        $data = ['name'=> $name, 'phone'=> $phone, 'email'=> $email, 'subject'=> $subject, 'message1'=> $message1];
        Mail::send('message', $data, function ($message) use ($email) {
            $message->to('zakaria.aanni@gmail.com');
            $message->subject('Question?');
        });
        return redirect()->back();
    }

    public function reference()
    {
        $cartItems = \Cart::getContent();
        $references = Reference::all();
        return view('references', compact('references', 'cartItems'));
    }

    public function pdf(Request $request)
    {
        $name = $request->name;
        $email = $request->email;
        $company = $request->company;
        $data = ['name' => $name, 'company' => $company, 'email' => $email];
        Mail::send('catalogue', $data, function ($message) use ($email) {
            $message->to($email);
        });

        Mail::send('admin-cata', $data, function ($message) use ($email) {
            $message->from($email);
            $message->to('zakaria.aanni@gmail.com');
            $message->subject('Téléchargement du catalogue');
        });
        return redirect()->back();
    }
}
