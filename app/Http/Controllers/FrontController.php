<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Photo;
use App\Product;
use Illuminate\Http\Request;

class FrontController extends Controller
{

    public function index()
    {
        //
        $brands=Brand::all();
        return view('welcome', compact('brands'));
    }

    public function face(){
        /*alle producten die getoond mogen worden on FACE*/
        $products=Product::where('is_active',1)->where('category_id',1)->paginate(9);
        return view('face',compact('products'));
    }

    public function lips(){
        /*alle producten die getoond mogen worden on FACE*/
        $products=Product::where('is_active',1)->where('category_id',2)->paginate(9);
        return view('face',compact('products'));
    }
    public function eyes(){
        /*alle producten die getoond mogen worden on FACE*/
        $products=Product::where('is_active',1)->where('category_id',3)->paginate(9);
        return view('face',compact('products'));
    }

    public function details(){
        return view('details');
    }

    public function login(){
        return view('initialize');
    }
    public function shoppingcart(){
        return view('shoppingcart');
    }
    public function wishlist(){
        return view ('wishlist');
    }



}
