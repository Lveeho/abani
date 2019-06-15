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


                        <td>
                            @foreach($user->countries as $country)
                                @foreach($user->regions as $region)
                                    @foreach($user->cities as $city)
                                        @foreach($user->addresses as $address)
                                            @if($country->getOriginal('pivot_id')===$region->getOriginal('pivot_id')
                                            and $region->getOriginal('pivot_id')===$city->getOriginal('pivot_id')
                                            and $city->getOriginal('pivot_id')===$address->getOriginal('pivot_id'))
                                                {{$country->country}}
                                                {{$region->region}}
                                                {{$region->code}}
                                                {{$city->city}}
                                                {{$city->postalcode}}
                                                {{$address->street}}
                                                {{$address->streetnumber}}
                                                {{$address->boxnumber}}
                                                <br>
                                                @endif
                                            @endforeach
                                        @endforeach
                                    @endforeach
                                @endforeach
                        </td>
                        <td>
                            @foreach($user->roles as $role)
                                {{$role->name}}
                                {{$role->pivot->created_at}}
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
