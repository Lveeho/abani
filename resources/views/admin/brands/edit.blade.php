@extends('layouts.admin')
@section('content')
    <h1 class="mb-3">Edit Brand</h1>
    <hr>
    <div class="row">
        <div class="col-6">
            {!! Form::model($brand,['method'=>'PATCH','action'=>['BrandController@update',$brand->id],'files'=>true])
             !!}
            <div class="form-group">
                {!! Form::label('brand','Brand:') !!}
                {!! Form::text('brand',null,['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('photo','Foto:') !!}
                {!! Form::file('photo',null,['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
            </div>
            {!! Form::close() !!}
        </div>
        <div class="col-6">
            <div class="card">
                <img class="card-img-top" src="{{url('uploads/brands/'.$brand->photo)}}" alt="{{$brand->photo}}">
                <div class="card-body">
                    <h4 class="card-title">Brand nr: {{ $brand->id}}</h4>
                    <p class="card-text">
                        <strong>{{ $brand->brand}}</strong>
                    </p>
                </div>
            </div>
        </div>
    </div>

@endsection
