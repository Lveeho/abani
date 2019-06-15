@extends('layouts.admin')
@section('content')
    <h1 class="mb-3">Edit User</h1>
    <hr>
    {!! Form::model($user,['method'=>'PATCH','action'=>['UserController@update',$user->id]])
     !!}
    <div class="row mt-2">
        <div class="col-lg-6 pr-lg-5">
            <div class="form-row">
                <div class="form-group col-md-6">
                    {!! Form::label('firstname','Voornaam:') !!}
                    {!! Form::text('firstname',null,['class'=>'form-control']) !!}
                </div>
                <div class="form-group col-md-6">
                    {!! Form::label('lastname','Achternaam:') !!}
                    {!! Form::text('lastname',null,['class'=>'form-control']) !!}
                </div>
            </div>

            <div class="form-group">
                {!! Form::label('email','E-mail:') !!}
                {!! Form::text('email',null,['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('password','Password:') !!}
                {!! Form::password('password',['class'=>'form-control']) !!}
            </div>
            <hr>
            <div class="form-row">
                <div class="form-group col-md-6">
                    {!! Form::label('role_id','Extra rol:') !!}
                    {!! Form::select('role_id',[''=>'Choose options'] + $roles,null,['class'=>'form-control']) !!}
                </div>
                <table class="table table-light w-25 my-4 bg-inverse-dark col-md-6">
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



        </div>
        <div class="col-lg-6 my-4">
            @php($i=0)
               {{-- @foreach($addresses as $address)
                    @php($i++)
                    <p>
                        <a class="btn btn-inverse-outline-dark btn-block" data-toggle="collapse"
                           href="#collapse{{$address->id}}"
                           role="button" aria-expanded="false" aria-controls="collapse{{$address->id}}">
                            Adres {{$i}}
                        </a>
                    </p>
                    <div class="collapse" id="collapse{{$address->id}}">
                        <div class="card card-body mb-3">
                            <div class="form-row">
                                <div class="form-group">
                                    {!! Form::hidden('country_ids[]',$address->city->region->country->id,
                                    ['class'=>'form-control'])
                                     !!}
                                </div>
                                <div class="form-group col-md-4">
                                    {!! Form::label('country','Land:') !!}
                                    {!! Form::text('country[]',$address->city->region->country->country,['class'=>'form-control'])
                                     !!}
                                </div>
                                <div class="form-group">
                                    {!! Form::hidden('region_ids[]',$address->city->region->id,['class'=>'form-control'])
                                     !!}
                                </div>
                                <div class="form-group col-md-5">
                                    {!! Form::label('region','Regio:') !!}
                                    {!! Form::text('region[]',$address->city->region->region,['class'=>'form-control'])
                                     !!}
                                </div>
                                <div class="form-group col-md-3">
                                    {!! Form::label('code','Regiocode:') !!}
                                    {!! Form::text('code[]',$address->city->region->code,['class'=>'form-control'])
                                     !!}
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group">
                                    {!! Form::hidden('city_ids[]',$address->city->id,['class'=>'form-control'])
                                     !!}
                                </div>
                                <div class="form-group col-md-6">
                                    {!! Form::label('city','Stad/gemeente:') !!}
                                    {!! Form::text('city[]',$address->city->city,['class'=>'form-control'])
                                     !!}
                                </div>
                                <div class="form-group col-md-6">
                                    {!! Form::label('postalcode','Postcode:') !!}
                                    {!! Form::text('postalcode[]',$address->city->postalcode,['class'=>'form-control'])
                                     !!}
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group">
                                    {!! Form::hidden('address_ids[]',$address->id,['class'=>'form-control'])!!}
                                </div>
                                <div class="form-group col-md-8">
                                    {!! Form::label('street','Straat:') !!}
                                    {!! Form::text('street[]',$address->street,['class'=>'form-control'])
                                     !!}
                                </div>
                                <div class="form-group col-md-2">
                                    {!! Form::label('streetnumber','Nr:') !!}
                                    {!! Form::text('streetnumber[]',$address->streetnumber,['class'=>'form-control'])
                                     !!}
                                </div>
                                <div class="form-group col-md-2">
                                    {!! Form::label('boxnumber','Busnr:') !!}
                                    {!! Form::text('boxnumber[]',$address->boxnumber,['class'=>'form-control']) !!}
                                </div>
                            </div>
                         </div>
                    </div>
                @endforeach--}}
        </div>
    </div>
    <div class="row">
        <hr>
        <div class="col-lg-6">
            <div class="form-group mt-4 d-flex justify-content-center pt-1">
                {!!Form::submit('Alle wijzigingen opslaan',
                ['class'=>'btn btn-primary btn-block'])!!}
            </div>
            {!! Form::close() !!}
        </div>
        <div class="col-lg-6">
            {!! Form::open(['method'=>'DELETE', 'action'=>['UserController@destroy',$user->id]])
                     !!}
            <div class="form-row">
                <div class="form-group col-md-6">
                    {!! Form::label('role_ids','Verwijder rol:') !!}
                    {!! Form::select('role_id',[''=>'Choose options'] + $roles,null,['class'=>'form-control']) !!}
                </div>
                <div class="form-group col-md-6 mt-4">
                    {!! Form::submit('Verwijder rol',['class'=>'btn btn-danger']) !!}
                </div>
                {!! Form::close() !!}
            </div>

        </div>


    </div>

    @include('includes.form_error')
@stop

