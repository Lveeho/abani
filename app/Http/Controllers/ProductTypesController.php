<?php

namespace App\Http\Controllers;

use App\Product;
use App\Producttypes;
use Illuminate\Http\Request;

class ProductTypesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $producttypes=Producttypes::paginate(15);
        return view('admin.producttypes.index',compact('producttypes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.producttypes.create');
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
        $producttype=new Producttypes();
        $producttype->type=$request->type;
        $producttype->save();
        $producttypes=Producttypes::paginate(15);
        return redirect()->route('producttypes.index',compact('producttypes'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Producttypes  $productTypes
     * @return \Illuminate\Http\Response
     */
    public function show(Producttypes $productTypes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Producttypes  $productTypes
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $producttype=Producttypes::findOrFail($id);
        return view('admin.producttypes.edit',compact('producttype'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Producttypes  $productTypes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $producttype=Producttypes::findOrFail($id);
        $producttype->type=$request->type;
        $producttype->update();
        return redirect()->back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Producttypes  $productTypes
     * @return \Illuminate\Http\Response
     */
    public function destroy(Producttypes $productTypes)
    {
        //
        Producttypes::where('id',$productTypes->id)->delete();
        return back();
    }
}
