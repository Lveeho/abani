<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{

    public function index()
    {
        //
        return view('welcome');
    }
    public function sales(){
       return view('sale');
    }
    public function face(){
        return view('face');
    }
    public function lips(){
        return view('lips');
    }
    public function eyes(){
        return view('eyes');
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
