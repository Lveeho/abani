<?php

namespace App\Http\Controllers;

use App\Address;
use App\City;
use App\Country;
use App\Region;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $user=Auth::user();

        return view('clients.client.index',compact('user'));
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

        /*adressen*/
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
            ->insert(['user_id'=>$request->user,'country_id'=>$randomArray[0],'region_id'=>$randomArray[1],
                'city_id'=>$randomArray[2],'address_id'=>$randomArray[3]]);
        /* Nadeel:op deze manier blijven waarden die niet gebruikt worden bestaan*/


        return redirect()->back();
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
        $user=User::findOrFail($id);
        $allData=User::find(1)
            ->where('id',$id)
            ->with('addresses')
            ->with('cities')
            ->with('regions')
            ->with('countries')
            ->get();
        return view('clients.client.edit',compact('user','allData'));
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
        if(trim($request->password)==''){ /*objectmanier*/
            $input = $request->except('password'); /*je laat veldje staan en voert uit, uitgezonderd passw*/
        }else{
            $input=$request->all();
            $input['password']=Hash::make($request['password']); /*dit komt uit formulier, veldmanier*/
        }

        Auth::user()->update($input);

        if(!empty($request->city_ids)){
            /*adressen wijzigen*/
            $p=-1;
            foreach ($request->city_ids as $city_id) {
                $p++;
                /*bestaat country al?*/
                $randomArray=array();
                $countryExists=Country::where('country',$request->country[$p])->first();
                /*ja->geef id*/
                if(!empty($countryExists)){
                    array_push($randomArray,$countryExists->id);
                }else{
                    /*nee -> maak nieuwe en geef id*/
                    $newCountry=new Country();
                    $newCountry->country=$request->country[$p];
                    $newCountry->save();
                    array_push($randomArray,$newCountry->id);
                }
                /*bestaal region al?*/
                $regionExists=Region::where('region',$request->region[$p])
                    ->where('code',$request->code[$p])
                    ->first();
                /*ja->geef id*/
                if(!empty($regionExists)){
                    array_push($randomArray,$regionExists->id);
                }else{
                    /*nee -> maak nieuwe en geef id*/
                    $newRegion=new Region();
                    $newRegion->region=$request->region[$p];
                    $newRegion->code=$request->code[$p];
                    $newRegion->save();
                    array_push($randomArray,$newRegion->id);
                }
                /*bestaal city al?*/
                $cityExists=City::where('city',$request->city[$p])
                    ->where('postalcode',$request->postalcode[$p])
                    ->first();
                /*ja->geef id*/
                if(!empty($cityExists)){
                    array_push($randomArray,$cityExists->id);
                }else{
                    /*nee -> maak nieuwe en geef id*/
                    $newCity=new City();
                    $newCity->city=$request->city[$p];
                    $newCity->postalcode=$request->postalcode[$p];
                    $newCity->save();
                    array_push($randomArray,$newCity->id);
                }
                /*bestaal address al?*/
                $addressExists=Address::where('street',$request->street[$p])
                    ->where('streetnumber',$request->streetnumber[$p])
                    ->where('boxnumber',$request->boxnumber[$p])
                    ->first();
                /*ja->geef id*/
                if(!empty($addressExists)){
                    array_push($randomArray,$addressExists->id);
                }else{
                    /*nee -> maak nieuwe en geef id*/
                    $newAddress=new Address();
                    $newAddress->street=$request->street[$p];
                    $newAddress->streetnumber=$request->streetnumber[$p];
                    $newAddress->boxnumber=$request->boxnumber[$p];
                    $newAddress->save();
                    array_push($randomArray,$newAddress->id);
                }
                /*verander huidige row in tussentabel naar deze uit array*/
                $pivotTable=DB::table('address_city_region_country_user')
                    ->where('user_id',$id)
                    ->where('address_id',$request->address_ids[$p])
                    ->where('city_id',$request->city_ids[$p])
                    ->where('region_id',$request->region_ids[$p])
                    ->where('country_id',$request->country_ids[$p])
                    ->value('id');

                DB::table('address_city_region_country_user')
                    ->where('id',$pivotTable)
                    ->update(['user_id'=>$id,'country_id'=>$randomArray[0],'region_id'=>$randomArray[1],
                        'city_id'=>$randomArray[2],'address_id'=>$randomArray[3]]);
                /* Nadeel:op deze manier blijven waarden die niet gebruikt worden bestaan*/

            }


        }

        return redirect()->back();
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
        DB::table('address_city_region_country_user')
            ->where('id',$id)
            ->delete();
        return back();
    }
}
