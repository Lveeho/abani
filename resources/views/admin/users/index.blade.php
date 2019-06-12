@extends('layouts.admin')
@section('content')
    <h1 class="mb-3">Users</h1>
    <hr>
    <table class="table table-striped mt-2">
        <thead>
        <tr class="bg-white">
            <th scope="col">Voornaam</th>
            <th scope="col">Achternaam</th>
            <th scope="col">Email</th>
            <th scope="col">Adres</th>
            <th scope="col">Rol</th>
        </tr>
        </thead>
        <tbody>
        @if($users)
            @foreach($users as $user)
                    <tr class="table-row" data-toggle="tooltip" title="Wijzig" data-placement="right"
                        data-href="{{route('users.edit',$user->id)}}" >
                        <td>{{$user->firstname}}</td>
                        <td>{{$user->lastname}}</td>
                        <td>{{$user->email}}</td>

                        {{--$user->addresses->count()--}}
                        <td>@foreach($user->addresses as $address)
                            {{$address->city->region->country->country}}
                            {{$address->city->region->region}}
                            @if(!empty($address->city->region->code))
                                {{$address->city->region->code}}
                            @endif
                            {{$address->city->city}}
                            {{$address->city->postalcode}}
                            {{$address->street}}
                            {{$address->streetnumber}}
                                @if(!empty($address->boxnumber))
                                    {{$address->boxnumber}}
                                @endif
                                <br>
                            @endforeach
                        </td>
                        <td>
                            @foreach($user->roles as $role)
                                {{$role->name}}
                            @endforeach
                        </td>
                    </tr>

            @endforeach
        @endif
        </tbody>

    </table>
    <div class="row">
        <div class="col-12">
            {{$users->render()}}
        </div>
    </div>
@endsection
