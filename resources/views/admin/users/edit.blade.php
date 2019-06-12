@extends('layouts.admin')
@section('content')
    <h1 class="mb-3">Edit User</h1>
    <hr>
    {!! Form::model($user,['method'=>'PATCH','action'=>['UserController@update',$user->id]])
     !!}
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

        </div>
        <div class="col-lg-6">
           @foreach($addresses as $address)
                @php($cities=\App\City::findOrFail($address->city_id)->get())
                @php($region=\App\Region::findOrFail($city->region_id)->first())
                @php($country=\App\Country::findOrFail($region->country_id)->first())

            <div class="form-group mt-4 ">
                {!! Form::label('country','Land:') !!}
                {!! Form::text('land',$country->country,['class'=>'form-control'])
                 !!}
            </div>
            <div class="form-group mt-4 ">
                {!! Form::label('region','Regio:') !!}
                {!! Form::text('region',$region->region,['class'=>'form-control'])
                 !!}
            </div>
            <div class="form-group mt-4 ">
                {!! Form::label('code','Regiocode:') !!}
                {!! Form::text('code',$region->code,['class'=>'form-control'])
                 !!}
            </div>
            @foreach($cities as $city)
            <div class="form-group mt-4 ">
                {!! Form::hidden('city_id',$city->id,['class'=>'form-control'])
                 !!}
            </div>
            <div class="form-group mt-4 ">
                {!! Form::label('city','Stad/gemeente:') !!}
                {!! Form::text('city',$city->city,['class'=>'form-control'])
                 !!}
            </div>
            <div class="form-group mt-4 ">
                {!! Form::label('postalcode','Postcode:') !!}
                {!! Form::text('postalcode',$city->postalcode,['class'=>'form-control'])
                 !!}
            </div>
            @endforeach
            <div class="form-group">
                {!! Form::hidden('address_ids[]',$address->id,['class'=>'form-control'])!!}
            </div>
            <div class="form-group mt-4 ">
                {!! Form::label('street','Straat:') !!}
                {!! Form::text('street[]',$address->street,['class'=>'form-control'])
                 !!}
            </div>
            <div class="form-group">
                {!! Form::label('streetnumber','Nr:') !!}
                {!! Form::text('streetnumber[]',$address->streetnumber,['class'=>'form-control'])
                 !!}

            </div>
            <div class="form-group mb-3">
                {!! Form::label('boxnumber','Busnr:') !!}
                {!! Form::text('boxnumber[]',$address->boxnumber,['class'=>'form-control']) !!}
            </div>
                <hr>
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

