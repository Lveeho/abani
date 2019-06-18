@extends('layouts.admin')
@section('content')
    <h1 class="mb-3">Producten</h1>
    <hr>
    <div class="row">
        <div class="col-lg-12">
            {!! Form::model($product,['method'=>'PATCH','action'=>['ProductController@update',
            $product->id]])
             !!}
           <div class="form-row">
                <div class="form-group col-md-4">
                    {!! Form::label('producttype_id','Type:') !!}
                    {!! Form::select('producttype_id',$producttypes,null,['class'=>'form-control']) !!}
                </div>
                <div class="form-group col-md-4">
                    {!! Form::label('category_id','Categorie:') !!}
                    {!! Form::select('category_id',$categories,null,['class'=>'form-control']) !!}
                </div>
                <div class="form-group col-md-4">
                    {!! Form::label('brand_id','Merk:') !!}
                    {!! Form::select('brand_id',$brands,null,['class'=>'form-control']) !!}
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    {!! Form::label('name','Naam:') !!}
                    {!! Form::text('name',null,['class'=>'form-control']) !!}
                </div>
                <div class="form-group col-md-4">
                    {!! Form::label('price','Prijs:') !!}
                    {!! Form::text('price',null,['class'=>'form-control']) !!}
                </div>
                <div class="form-group col-md-4">
                    {!! Form::label('volume','Inhoud:') !!}
                    {!! Form::text('volume',null,['class'=>'form-control']) !!}
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    {!! Form::label('description','Beschrijving:') !!}
                    {!! Form::textarea('description',null,['class'=>'form-control']) !!}
                </div>

                <div class="form-group col-md-6">
                    {!! Form::label('ingredients','Ingrediënten:') !!}
                    {!! Form::textarea('ingredients',null,['class'=>'form-control']) !!}
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    {!! Form::label('code','Code:') !!}
                    {!! Form::text('code',null,['class'=>'form-control']) !!}
                </div>
                <div class="form-group col-md-6">
                    {!! Form::label('is_active','Tonen in shop') !!}
                    {!! Form::select('is_active',array(1=>'Ja',0=>'Nee'),null,['class'=>'form-control',
                    'required']) !!}
                </div>

            </div>

            <div class="form-group">
                {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
    <div class="row">
        <div class="col-lg-10">
            <p>
                <a class="btn btn-inverse-outline-dark btn-block" data-toggle="collapse"
                   href="#collapse1"
                   role="button" aria-expanded="false" aria-controls="collapse1">
                    Nieuw detail
                </a>
            </p>
            <div class="collapse" id="collapse1">
                <div class="card card-body mb-3">
                    {!! Form::open(['method'=>'POST','action'=>'ProductController@store']) !!}
                    <div class="form-group">
                        {!! Form::label('color_id','Kleur:') !!}
                        {!! Form::select('color_id',$colors,null,['class'=>'form-control','required'])
                         !!}
                    </div>
                    <div class="form-group">
                        {!! Form::hidden('product_id',$product->id,['class'=>'form-control'])!!}
                    </div>
                    <div class="form-group mt-4 ">
                        {!! Form::label('lot_id','Batch:') !!}
                        {!! Form::select('lot_id',$lots,null,['class'=>'form-control','required'])
                         !!}
                    </div>
                    <div class="form-group mt-4 ">
                        {!! Form::label('quantity','Aantal:') !!}
                        {!! Form::text('quantity',null,['class'=>'form-control','required'])
                         !!}
                    </div>

                </div>
            </div>
        </div>
        <div class="col-lg-2">
            <div class="form-group">
                {!! Form::button('<i class="far fa-save"></i>',
                ['class'=>'btn create text-primary btn-sm','type'=>'submit']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>

@endsection
