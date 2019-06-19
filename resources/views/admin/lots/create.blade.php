@extends('layouts.admin')
@section('content')
    <h1 class="mb-3">Creëer batch</h1>
    <hr>
    {!! Form::open(['method'=>'POST','action'=>['LotController@store']])!!}
    <div class="row">
        <div class="col-12">
            <div class="form-row">
                <div class="form-group col-md-4">
                    {!! Form::label('code','Batchcode:') !!}
                    {!! Form::text('code',null,['class'=>'form-control']) !!}
                </div>
                <div class="form-group col-md-4">
                    {!! Form::label('manufactured','Gemaakt op:') !!}
                    {!! Form::date('manufactured',null,['class'=>'form-control']) !!}
                </div>
                <div class="form-group col-md-4">
                    {!! Form::label('expiry','Vervalt op:') !!}
                    {!! Form::date('expiry',null,['class'=>'form-control']) !!}
                </div>

            </div>
            <div class="form-group col-md-12">
                {!! Form::label('ingredients','Ingrediënten:') !!}
                {!! Form::textarea('ingredients',null,['class'=>'form-control']) !!}
            </div>
        </div>
        <div class="form-group">
            {!!Form::submit('Opslaan',
            ['class'=>'btn btn-primary'])!!}
        </div>
        {!! Form::close() !!}
    @include('includes.form_error')
    </div>
@endsection
