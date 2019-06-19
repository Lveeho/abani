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
        </div>
        <div class="col-12">
            <div class="row">
                <div class="col-9">
                    <div class="form-group">
                        {!! Form::label('ingredients','Ingrediënten:') !!}
                        {!! Form::textarea('ingredients',null,['class'=>'form-control']) !!}
                    </div>
                </div>
                <div class="col-3">
                    <div class="row">
                        <div class="form-group col-md-12">
                            {!! Form::label('volume','Inhoud(ml):') !!}
                            {!! Form::text('volume',null,['class'=>'form-control']) !!}
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-12">
                            {!! Form::label('quantity','Aantal:') !!}
                            {!! Form::text('quantity',null,['class'=>'form-control']) !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <div class="form-group">
            {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
        </div>
        {!! Form::close() !!}

@endsection
