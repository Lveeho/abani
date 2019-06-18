@extends('layouts.admin')
@section('content')
    <h1 class="mb-3">Edit Producttype</h1>
    <hr>
    <div class="row">
        <div class="col-6">
            {!! Form::model($producttype,['method'=>'PATCH','action'=>['ProductTypesController@update',
            $producttype->id]])
             !!}
            <div class="form-group">
                {!! Form::label('type','Type:') !!}
                {!! Form::text('type',null,['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>

@endsection

