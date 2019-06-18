@extends('layouts.admin')
@section('content')
    <h1 class="mb-3">Nieuw producttype</h1>
    <hr>
    {!! Form::open(['method'=>'POST','action'=>'ProductTypesController@store']) !!}
    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                {!! Form::label('type','Type:') !!}
                {!! Form::text('type',null,['class'=>'form-control','required']) !!}
            </div>
            <div class="form-group">
                {!! Form::submit('Create', ['class' => 'btn btn-primary']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection
