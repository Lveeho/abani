@extends('layouts.admin')
@section('content')
    <h1 class="mb-3">Brands</h1>
    <hr>
    <table class="table table-striped mt-2">
        <thead>
        <tr class="bg-white">
            <th></th>
            <th scope="col">Brand</th>
            <th scope="col">Foto</th>
        </tr>
        </thead>
        <tbody>
            @foreach($brands as $brand)
            <tr class="table-row" data-toggle="tooltip" title="Wijzig" data-placement="right"
                data-href="{{route('brands.edit',$brand->id)}}">
                <td>{!! Form::open(['method'=>'DELETE', 'action'=>['BrandController@destroy',$brand->id]])
                                 !!}
                    {!! Form::button('<i class="fas fa-trash-alt"></i>',['class'=>'btn create text-dark btn-sm',
                    'type'=>'submit']) !!}
                    {!! Form::close() !!}</td>
                <td>{{$brand->brand}}</td>
                <td>{{$brand->photo}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="row">
        <div class="col-12">
            {{$brands->render()}}
        </div>
    </div>
@endsection
