<?php

namespace App\Http\Controllers;

use App\Address;
use App\City;
use App\Country;
use App\Region;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AddressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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
    public function store(Request $request)
    {
        //
        $user=$request->user;
        /*bestaat country al?*/
        $randomArray=array();
        $countryExists=Country::where('country',$request->country)->first();
        /*ja->geef id*/
        if(!empty($countryExists)){
            array_push($randomArray,$countryExists->id);
        }else{
            /*nee -> maak nieuwe en geef id*/
            $newCountry=new Country();
            $newCountry->country=$request->country;
            $newCountry->save();
            array_push($randomArray,$newCountry->id);
        }
        /*bestaal region al?*/
        $regionExists=Region::where('region',$request->region)
            ->where('code',$request->code)
            ->first();
        /*ja->geef id*/
        if(!empty($regionExists)){
            array_push($randomArray,$regionExists->id);
        }else{
            /*nee -> maak nieuwe en geef id*/
            $newRegion=new Region();
            $newRegion->region=$request->region;
            $newRegion->code=$request->code;
            $newRegion->save();
            array_push($randomArray,$newRegion->id);
        }
        /*bestaal city al?*/
        $cityExists=City::where('city',$request->city)
            ->where('postalcode',$request->postalcode)
            ->first();
        /*ja->geef id*/
        if(!empty($cityExists)){
            array_push($randomArray,$cityExists->id);
        }else{
            /*nee -> maak nieuwe en geef id*/
            $newCity=new City();
            $newCity->city=$request->city;
            $newCity->postalcode=$request->postalcode;
            $newCity->save();
            array_push($randomArray,$newCity->id);
        }
        /*bestaal address al?*/
        $addressExists=Address::where('street',$request->street)
            ->where('streetnumber',$request->streetnumber)
            ->where('boxnumber',$request->boxnumber)
            ->first();
        /*ja->geef id*/
        if(!empty($addressExists)){
            array_push($randomArray,$addressExists->id);
        }else{
            /*nee -> maak nieuwe en geef id*/
            $newAddress=new Address();
            $newAddress->street=$request->street;
            $newAddress->streetnumber=$request->streetnumber;
            $newAddress->boxnumber=$request->boxnumber;
            $newAddress->save();
            array_push($randomArray,$newAddress->id);
        }
        /*nieuwe rij in tussentabel*/
        DB::table('address_city_region_country_user')
            ->insert(['user_id'=>$user,'country_id'=>$randomArray[0],'region_id'=>$randomArray[1],
                'city_id'=>$randomArray[2],'address_id'=>$randomArray[3]]);
        /* Nadeel:op deze manier blijven waarden die niet gebruikt worden bestaan*/
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Address  $address
     * @return \Illuminate\Http\Response
     */
    public function show(Address $address)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Address  $address
     * @return \Illuminate\Http\Response
     */
    public function edit(Address $address)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Address  $address
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Address $address)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Address  $address
     * @return \Illuminate\Http\Response
     */
    public function destroy($address)
    {
        //
        DB::table('address_city_region_country_user')
            ->where('id',$address)
            ->delete();
        return back();
        /*Nadeel: geen softdeletes bij pivottable*/
    }
}
