<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Photo;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrontController extends Controller
{

    public function index()
    {
        //
        $brands=Brand::all();
        return view('welcome', compact('brands'));
    }

    public function face(){
        $products=Product::where('is_active',1)->where('category_id',1)->has('colors')->paginate(9);
        return view('face',compact('products'));
    }

    public function lips(){
        $products=Product::where('is_active',1)->where('category_id',2)->has('colors')->paginate(9);
        return view('face',compact('products'));
    }
    public function eyes(){
        $products=Product::where('is_active',1)->where('category_id',3)->has('colors')->paginate(9);
        return view('face',compact('products'));
    }

    public function details($id){
        $product=Product::findorFail($id);
        $photoIds=DB::table('color_product')
            ->where('product_id',$id)
            ->select('id')
            ->get();



        return view('details',compact('product','photoIds'));
    }

    public function login(){
        return view('initialize');
    }

    public function checkout(){
        return view('checkout1');
    }





}
