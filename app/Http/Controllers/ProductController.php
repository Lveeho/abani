<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Category;
use App\Color;
use App\Lot;
use App\Photo;
use App\Product;
use App\Producttypes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $products=Product::paginate(15);
        return view('admin.products.index',compact('products'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $colorsSelect=Color::pluck('color','id')->prepend('Kies optie');
        $lotsSelect=Lot::pluck('code','id')->prepend('Kies optie');
        $producttypes=Producttypes::pluck('type','id')->prepend('Kies optie','default');
        $brands=Brand::pluck('brand','id')->prepend('Kies optie','default');
        $categories=Category::pluck('title','id')->prepend('Kies optie','default');
        return view('admin.products.create',compact('producttypes','brands','categories','lotsSelect','colorsSelect'));

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

        if((isset($request->color_id))and empty($request->price)){
            DB::table('color_product')
                ->insert(['color_id'=>$request->color_id,'product_id'=>$request->product_id,
                    'lot_id'=>$request->lot_id]);
            $subProduct=DB::table('color_product')
                ->orderBy('id','DESC')->first();
            $subPicture=$request->file('name');
            if(!empty($subPicture)){
                $extension=$subPicture->getClientOriginalExtension();
                Storage::disk('productcolors')->put($subPicture->getFilename().'.'.$extension,File::get($subPicture));
                $newImage=new Photo();
                $newImage->name=$subPicture->getFilename().'.'.$extension;/*phpF38.tmp.png*/
                $newImage->product_color_id=$subProduct->id;
                $newImage->description=$request->description;
                $newImage->save();
            }

            return redirect()->back();
        }

        $picture=$request->file('mainpicture');
        $extension=$picture->getClientOriginalExtension();
        Storage::disk('products')->put($picture->getFilename().'.'.$extension,File::get($picture));
        $product=new Product();
        $product->producttype_id=$request->producttype_id;
        $product->name=$request->name;
        $product->description=$request->description;
        $product->price=$request->price;
        $product->brand_id=$request->brand_id;
        $product->category_id=$request->category_id;
        $product->code=$request->code;
        $product->mainpicture=$picture->getFilename().'.'.$extension;
        $product->is_active=$request->is_active;
        $product->save();
        $product=Product::paginate(15);
        return redirect()->route('products.index',compact('product'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($request)
    {
        //


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $product=Product::findOrFail($id);
        $producttypes=Producttypes::pluck('type','id');
        $brands=Brand::pluck('brand','id');
        $categories=Category::pluck('title','id');
        $colors=Color::pluck('color','id');
        $lots=Lot::pluck('code','id');
        $colorsSelect=Color::pluck('color','id')->prepend('Kies optie');
        $lotsSelect=Lot::pluck('code','id')->prepend('Kies optie');
        $allData=Product::with('colors')
            ->with('lots')
            ->where('id',$id)
            ->get();


        return view('admin.products.edit',compact('product','producttypes','brands','categories','colors','lots','colorsSelect','lotsSelect','allData'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $product=Product::findOrFail($id);
        $picture=$request->file('mainpicture');
        if(!empty($picture)){
            $extension=$picture->getClientOriginalExtension();
            Storage::disk('products')->put($picture->getFilename().'.'.$extension,File::get($picture));
            $product->producttype_id=$request->producttype_id;
            $product->name=$request->name;
            $product->description=$request->description;
            $product->price=$request->price;
            $product->brand_id=$request->brand_id;
            $product->category_id=$request->category_id;
            $product->code=$request->code;
            $product->mainpicture=$picture->getFilename().'.'.$extension;
            $product->is_active=$request->is_active;
            $product->update();
        }
        if(isset($request->color_id)){
            DB::table('color_product')
                ->where('id',$request->pivot_id)
                ->update(['color_id'=>$request->color_id,'lot_id'=>$request->lot_id]);
            $picture=$request->file('name');
            if(!empty($picture)) {
                $extension = $picture->getClientOriginalExtension();
                Storage::disk('productcolors')->put($picture->getFilename() . '.' . $extension, File::get($picture));
                $newImage = new Photo();
                $newImage->name = $picture->getFilename() . '.' . $extension;/*phpF38.tmp.png*/
                $newImage->product_color_id = $request->pivot_id;
                $newImage->description=$request->description;
                $newImage->save();
            }

        }

        return redirect()->back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
        Product::where('id',$product->id)->delete();
        return back();
    }
}
