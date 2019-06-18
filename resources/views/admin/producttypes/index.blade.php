@extends('layouts.admin')
@section('content')
    <h1 class="mb-3">Producttypes</h1>
    <hr>
    <table class="table table-striped mt-2">
        <thead>
        <tr class="bg-white">
            <th></th>
            <th scope="col">type</th>
        </tr>
        </thead>
        <tbody>
        @foreach($producttypes as $producttype)
            <tr class="table-row" data-toggle="tooltip" title="Wijzig" data-placement="right"
                data-href="{{route('producttypes.edit',$producttype->id)}}">
                <td>{!! Form::open(['method'=>'DELETE', 'action'=>['ProductTypesController@destroy',$producttype->id]])
                                 !!}
                    {!! Form::button('<i class="fas fa-trash-alt"></i>',['class'=>'btn create text-dark btn-sm',
                    'type'=>'submit']) !!}
                    {!! Form::close() !!}</td>
                <td>{{$producttype->type}}</td>

            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="row">
        <div class="col-12">
            {{$producttypes->render()}}
        </div>
    </div>
@endsection
