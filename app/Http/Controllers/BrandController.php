<?php

namespace App\Http\Controllers;

use App\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $brands=Brand::paginate(15);
        return view('admin.brands.index',compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.brands.create');

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
        $brand=new Brand();

        $picture=$request->file('photo');
        if(!empty($picture)){
            $extension=$picture->getClientOriginalExtension();
            Storage::disk('brands')->put($picture->getFilename().'.'.$extension,File::get($picture));
            $brand->photo=$picture->getFilename().'.'.$extension;/*phpF38.tmp.png*/
        }
        $brand->brand=$request->brand;
        $brand->save();
        return redirect()->route('brands.index');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function show(Brand $brand)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $brand=Brand::findOrFail($id);
        return view('admin.brands.edit',compact('brand'));


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $brand=Brand::findOrFail($id);
        $picture=$request->file('photo');
        if(!empty($picture)){
            $extension=$picture->getClientOriginalExtension();
            Storage::disk('brands')->put($picture->getFilename().'.'.$extension,File::get($picture));
            $brand->photo=$picture->getFilename().'.'.$extension;/*phpF38.tmp.png*/
        }
        $brand->brand=$request->brand;
        $brand->update();

        /*oude foto's blijven zo wel bestaan*/

        return redirect()->back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function destroy(Brand $brand)
    {
        //
        Brand::where('id',$brand->id)->delete();
        return back();
    }
}
