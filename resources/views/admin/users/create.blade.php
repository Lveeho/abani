@extends('layouts.admin')
@section('content')
    <h1 class="mb-3">Creëer User</h1>
    <hr>
    {!! Form::open(['method'=>'POST','action'=>['UserController@store']])!!}

    <div class="row mt-2">
        <div class="col-lg-6 pr-lg-5">
            <div class="form-group">
                {!! Form::label('firstname','Voornaam:') !!}
                {!! Form::text('firstname',null,['class'=>'form-control','required']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('lastname','Achternaam:') !!}
                {!! Form::text('lastname',null,['class'=>'form-control','required']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('email','E-mail:') !!}
                {!! Form::text('email',null,['class'=>'form-control','required']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('password','Password:') !!}
                {!! Form::password('password',['class'=>'form-control','required']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('role_id','Rol toewijzen:') !!}
                {!! Form::select('role_id',[''=>'Choose options'] + $roles,null,['class'=>'form-control','required']) !!}
            </div>
        </div>
        <div class="col-lg-6">
            <div class="form-group mt-4 ">
                {!! Form::label('country','Land:') !!}
                {!! Form::text('country',null,['class'=>'form-control','required']) !!}
            </div>
            <div class="form-group mt-4 ">
                {!! Form::label('region','Regio:') !!}
                {!! Form::text('region',null,['class'=>'form-control','required'])
                 !!}
            </div>
            <div class="form-group mt-4 ">
                {!! Form::label('code','Regiocode:') !!}
                {!! Form::text('code',null,['class'=>'form-control'])
                 !!}
            </div>
            <div class="form-group mt-4 ">
                {!! Form::label('city','Stad/gemeente:') !!}
                {!! Form::text('city',null,['class'=>'form-control','required'])
                 !!}
            </div>
            <div class="form-group mt-4 ">
                {!! Form::label('postalcode','Postcode:') !!}
                {!! Form::text('postalcode',null,['class'=>'form-control','required'])
                 !!}
            </div>
            <div class="form-group mt-4 ">
                {!! Form::label('street','Straat:') !!}
                {!! Form::text('street',null,['class'=>'form-control','required'])
                 !!}
            </div>
            <div class="form-group">
                {!! Form::label('streetnumber','Nr:') !!}
                {!! Form::text('streetnumber',null,['class'=>'form-control','required'])
                 !!}

            </div>
            <div class="form-group">
                {!! Form::label('boxnumber','Busnr:') !!}
                {!! Form::text('boxnumber',null,['class'=>'form-control']) !!}
            </div>
        </div>
        <div class="form-group">
            {!!Form::submit('Opslaan',
            ['class'=>'btn btn-primary'])!!}
        </div>
        {!! Form::close() !!}

    </div>
    @include('includes.form_error')
@endsection

