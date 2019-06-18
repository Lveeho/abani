@extends('layouts.admin')
@section('content')
    <h1 class="mb-3">Nieuw product</h1>
    <hr>
    {!! Form::open(['method'=>'POST','action'=>'ProductController@store']) !!}
    <div class="row">
        <div class="col-lg-12">
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
                {!! Form::submit('Create', ['class' => 'btn btn-primary']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection
