@extends('layouts.admin')
@section('content')
    <h1 class="mb-3">Edit Category</h1>
    <hr>
    <div class="row">
        <div class="col-6">
            {!! Form::model($category,['method'=>'PATCH','action'=>['CategoryController@update',$category->id]])!!}
            <div class="form-group">
                {!! Form::label('title','Category:') !!}
                {!! Form::text('title',null,['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>

@endsection
