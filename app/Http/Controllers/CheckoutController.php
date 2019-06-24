<?php

namespace App\Http\Controllers;

use App\Order;
use App\Region;
use Carbon\Carbon;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Stripe\Charge;
use Stripe\Customer;
use Stripe\Stripe;

class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function checkout1(){

        if($user=Auth::user()){
            $addresses=$user->addresses;
            $cities=$user->cities;
            $regions=$user->regions;
            $countries=$user->countries;
        };

        return view('checkout1',compact('addresses','cities','regions','countries','user'));
    }

    public function checkout2(){
        return view('checkout2');
    }




    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeStep1(Request $request)
    {
        //
        if(empty($request->optradio)){
            return redirect()->route('checkout.step1')->with('checkout_message','Select address!');
        }
        return view('checkout2');
    }
    public function storeStep2(Request $request)
    {
        //
        if(empty($request->shipping)){
            return redirect()->route('checkout.step2')->with('checkout_message2','Select delivery method!');
        }
        return view('checkout3');
    }
    public function buy(){



        Stripe::setApiKey(config('services.stripe.secret'));

        $customer=Customer::create([
            'email'=>request('stripeEmail'),
            'source'=>request('stripeToken'),
        ]); /*hierdoor online wegschrijven*/

        $charge=Charge::create([
            'customer'=>$customer->id,
            'amount'=>(int)str_replace('.','',Cart::total()), /*totaal*/
            'currency'=>'eur',
        ]);



        if($charge->status==='succeeded'){
            $order=new Order();
            $order->user_id=Auth::user()->id;
            $order->total=Cart::total();
            $order->purchase_date=Carbon::now();
            $order->token=$charge->id;
            $order->save();

        }

        Cart::destroy();
        /*hier nog wegschrijven naar DB*/

        return view('checkout4');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
