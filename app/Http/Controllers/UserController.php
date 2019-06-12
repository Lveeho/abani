<?php

namespace App\Http\Controllers;

use App\Address;
use App\City;
use App\Country;
use App\Region;
use App\Role;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //
    public function index()
    {
        //
        $users=User::paginate(10);
        return view('admin.users.index',compact('users'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $roles=Role::pluck('name','id')->all();
        return view('admin.users.create',compact('roles'));

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
        //dd($request->input('country'));

        $input=$request->all();
        $input['password']=Hash::make($request['password']);
        User::create($input);
        $country=new Country();
        $country->country=$request->input('country');
        $region=new Region();
        $region->country_id=$country->id;
        $region->region=$request->input('region');

        Region::create($request->input('region'));
        City::create($request->input('city'));
        //Address::create($input);

        /*if(isset($role_id) ){
            $user->roles()->syncWithoutDetaching([$role_id]);
        }*/

        return redirect()->route('users.index');
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
        $addresses=User::find($id)->addresses()->wherePivot('user_id',$id)->get();
        $roles=Role::pluck('name','id')->all();
        return view('admin.users.edit',compact('user','roles','addresses'));
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
        dd($request->all());


        if(trim($request->password)==''){ /*objectmanier*/
            $input = $request->except('password'); /*je laat veldje staan en voert uit, uitgezonderd passw*/
        }else{
            $input=$request->all();
            $input['password']=Hash::make($request['password']); /*dit komt uit formulier, veldmanier*/
        }
        $user=User::findOrFail($id);
        $role_id=$request->role_id;
        if(isset($role_id) ){
            $user->roles()->syncWithoutDetaching([$role_id]);
        }
        $user->update($input);


        if(!empty($request->address_ids)){
            $i=-1;
            foreach($request->address_ids as $address_id){
                $i++;
                $address=Address::findOrFail($address_id);
                $address->street=$request->street[$i];
                $address->streetnumber=$request->streetnumber[$i];
                $address->boxnumber=$request->boxnumber[$i];
                $address->update();
                $city=City::findOrFail($address->city_id);


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
    public function destroy(Request $request, $id)
    {
        //
        $user=User::findOrFail($id);
        $user->roles()->detach($request['role_id']);

//
        return redirect()->route('users.edit',['id'=>$id]);
    }
}
