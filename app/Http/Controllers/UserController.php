<?php

namespace App\Http\Controllers;

use App\Address;
use App\Role;
use App\User;
use Illuminate\Http\Request;
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
        return view('admin.users.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UsersRequest $request)
    {
        //
        $input=$request->all();
        $input['password']=Hash::make($request['password']);
        Address::create($input);
        $address_id=Address::get('id')->last();
        $test=(array_merge($input,['address_id'=>$address_id->id]));
        User::create($test);
        //User::create($request->except('address_id'));

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
        $roles=Role::pluck('name','id')->all();
        foreach($user->addresses as $address){
            $address=Address::where('id',$address->id)->first();
        };


        return view('admin.users.edit',compact('user','roles','address'));

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
        $user=User::findOrFail($id);
        foreach($user->addresses as $address){
            $address=Address::where('id',$address->id)->first();

        };
        $role_id=$request->role_id;
        if(trim($request->password)==''){ /*objectmanier*/
            $input = $request->except('password'); /*je laat veldje staan en voert uit, uitgezonderd passw*/
        }else{
            $input=$request->all();
            $input['password']=Hash::make($request['password']); /*dit komt uit formulier, veldmanier*/
        }

        if(isset($role_id) ){
            $user->roles()->syncWithoutDetaching([$role_id]);
        }

        $user->update($input);
        $address->update($input);
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
