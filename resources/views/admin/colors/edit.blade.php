@extends('layouts.admin')
@section('content')
    <h1 class="mb-3">Edit Kleur</h1>
    <hr>
    <div class="row">
        <div class="col-6">
            {!! Form::model($color,['method'=>'PATCH','action'=>['ColorController@update',$color->id]])!!}
            <div class="form-group">
                {!! Form::label('color','Kleur:') !!}
                {!! Form::text('color',null,['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection
