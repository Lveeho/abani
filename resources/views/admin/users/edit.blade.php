@extends('layouts.admin')
@section('content')
    <h1 class="mb-3">Edit User</h1>
    <hr>
    {!! Form::model($user,['method'=>'PATCH','action'=>['UserController@update',$user->id]]) !!}
    <div class="row mt-2">
        <div class="col-lg-6 pr-lg-5">
            <div class="form-group">
                {!! Form::label('firstname','Voornaam:') !!}
                {!! Form::text('firstname',null,['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('lastname','Achternaam:') !!}
                {!! Form::text('lastname',null,['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('email','E-mail:') !!}
                {!! Form::text('email',null,['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('password','Password:') !!}
                {!! Form::password('password',['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('role_id','Nieuwe rol toewijzen:') !!}
                {!! Form::select('role_id',[''=>'Choose options'] + $roles,null,['class'=>'form-control']) !!}
            </div>
        </div>
        <div class="col-lg-6">
            <table class="table table-light w-25 mt-4 bg-inverse-dark ">
                <thead>
                <tr><th>Huidige rol(len):</th></tr>
                </thead>
                <tbody>
                @foreach($user->roles as $role)
                    <tr><td>{{$role->name}}</td></tr>
                @endforeach
                </tbody>
            </table>
            {!! Form::model($address,['method'=>'PATCH','action'=>['UserController@update',$user->id]])
             !!}
            @foreach($address as $test)
            <div class="form-group mt-4 ">
                {!! Form::label('street','Straat:') !!}
                {!! Form::text('street',null,['class'=>'form-control'])
                 !!}
            </div>
            <div class="form-group">
                {!! Form::label('streetnumber','Nr:') !!}
                {!! Form::text('streetnumber',null,['class'=>'form-control'])
                 !!}
            </div>
            <div class="form-group">
                {!! Form::label('boxnumber','Busnr:') !!}
                {!! Form::text('boxnumber',null,['class'=>'form-control']) !!}
            </div>
            @endforeach
            <div class="form-group">
                {!!Form::submit('Wijzigen',
                ['class'=>'btn btn-primary'])!!}
            </div>
            {!! Form::close() !!}
        </div>

    </div>
    <div class="row">
        {!! Form::open(['method'=>'DELETE', 'action'=>['UserController@destroy',$user->id]])
                     !!}
        <div class="form-group">
            {!! Form::label('role_ids','Bestaande rol verwijderen:') !!}
            {!! Form::select('role_id',[''=>'Choose options'] + $roles,null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Delete Role',['class'=>'btn btn-danger']) !!}
        </div>
        {!! Form::close() !!}
    </div>
    @include('includes.form_error')
@stop

