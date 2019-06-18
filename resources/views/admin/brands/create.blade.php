@extends('layouts.admin')
@section('content')
    <h1 class="mb-3">Brands</h1>
    <hr>
    {!! Form::open(['method'=>'POST','action'=>'BrandController@store','files'=>true]) !!}
    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                {!! Form::label('brand','Brand:') !!}
                {!! Form::text('brand',null,['class'=>'form-control','required']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('photo','Foto:') !!}
                {!! Form::file('photo',null,['class'=>'form-control'])!!}
            </div>
            <div class="form-group">
                {!! Form::submit('Create Book', ['class' => 'btn btn-primary']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection
