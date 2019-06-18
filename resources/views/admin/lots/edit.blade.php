@extends('layouts.admin')
@section('content')
    <h1 class="mb-3">Edit Batch</h1>
    <hr>
    <div class="row">
        <div class="col-12">
            {!! Form::model($lot,['method'=>'PATCH','action'=>['LotController@update',$lot->id]])!!}
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

            <div class="form-group">
                {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection
