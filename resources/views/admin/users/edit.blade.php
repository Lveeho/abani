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
            <div class="row">
            @php($i=0)
               @foreach($allData as $oneData)
                @foreach($oneData->addresses as $address)
                            <div class="col-lg-10">
                    @foreach($oneData->cities as $city)
                        @foreach($oneData->regions as $region)
                            @foreach($oneData->countries as $country)
                                @if($country->getOriginal('pivot_id')===$region->getOriginal('pivot_id')
                               and $region->getOriginal('pivot_id')===$city->getOriginal('pivot_id')
                               and $city->getOriginal('pivot_id')===$address->getOriginal('pivot_id'))
                                    @php($i++)
                                    <p>
                                        <a class="btn btn-inverse-outline-dark btn-block" data-toggle="collapse"
                                           href="#collapse{{$i}}"
                                           role="button" aria-expanded="false" aria-controls="collapse{{$i}}">
                                            Adres {{$i}}
                                        </a>
                                    </p>
                                    <div class="collapse" id="collapse{{$i}}">
                                        <div class="card card-body mb-3">
                                            <div class="form-row">
                                               <div class="form-group">
                                                   {!! Form::hidden('country_ids[]',$country->id,
                                                   ['class'=>'form-control'])
                                                    !!}
                                               </div>
                                               <div class="form-group col-md-4">
                                                   {!! Form::label('country','Land:') !!}
                                                   {!! Form::text('country[]',$country->country,['class'=>'form-control'])
                                                    !!}
                                               </div>
                                               <div class="form-group">
                                                   {!! Form::hidden('region_ids[]',$region->id,['class'=>'form-control'])
                                                    !!}
                                               </div>
                                               <div class="form-group col-md-5">
                                                   {!! Form::label('region','Regio:') !!}
                                                   {!! Form::text('region[]',$region->region,['class'=>'form-control'])
                                                    !!}
                                               </div>
                                               <div class="form-group col-md-3">
                                                   {!! Form::label('code','Regiocode:') !!}
                                                   {!! Form::text('code[]',$region->code,['class'=>'form-control'])
                                                    !!}
                                               </div>
                                           </div>
                                           <div class="form-row">
                                               <div class="form-group">
                                                   {!! Form::hidden('city_ids[]',$city->id,['class'=>'form-control'])
                                                    !!}
                                               </div>
                                               <div class="form-group col-md-6">
                                                   {!! Form::label('city','Stad/gemeente:') !!}
                                                   {!! Form::text('city[]',$city->city,['class'=>'form-control'])
                                                    !!}
                                               </div>
                                               <div class="form-group col-md-6">
                                                   {!! Form::label('postalcode','Postcode:') !!}
                                                   {!! Form::text('postalcode[]',$city->postalcode,
                                                   ['class'=>'form-control'])
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
                                                   {!! Form::text('streetnumber[]',$address->streetnumber,
                                                   ['class'=>'form-control'])
                                                    !!}
                                               </div>
                                               <div class="form-group col-md-2">
                                                   {!! Form::label('boxnumber','Busnr:') !!}
                                                   {!! Form::text('boxnumber[]',$address->boxnumber,
                                                   ['class'=>'form-control']) !!}
                                               </div>
                                           </div>
                                         </div>
                                    </div>
                                @endif
                            @endforeach
                        @endforeach

                    @endforeach
                            </div>
                        <div class="col-lg-2">
                            {!! Form::open(['method'=>'DELETE', 'action'=>['AddressController@destroy',
                            $address->getOriginal('pivot_id')]])!!}
                            {!! Form::button('<i class="fas fa-trash-alt"></i>',['class'=>'btn create text-danger btn-sm',
                            'type'=>'submit']) !!}
                            {!! Form::close() !!}
                        </div>
                @endforeach
                @endforeach
            </div>
            <div class="row">
                <div class="col-lg-10">
                    <p>
                        <a class="btn btn-inverse-outline-dark btn-block" data-toggle="collapse"
                           href="#collapse{{$i+1}}"
                           role="button" aria-expanded="false" aria-controls="collapse{{$i+1}}">
                            Nieuw adres
                        </a>
                    </p>
                    <div class="collapse" id="collapse{{$i+1}}">
                        <div class="card card-body mb-3">
                            {!! Form::open(['method'=>'POST','action'=>'AddressController@store']) !!}
                            <div class="form-group">
                                {!! Form::hidden('user',$user->id,['class'=>'form-control'])!!}
                            </div>
                            <div class="form-group mt-4 ">
                                {!! Form::label('country','Land:') !!}
                                {!! Form::text('country',null,['class'=>'form-control','required'])
                                 !!}
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
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="form-group">
                        {!! Form::button('<i class="fas fa-plus-circle"></i>',
                        ['class'=>'btn create text-primary btn-sm','type'=>'submit']) !!}
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
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

