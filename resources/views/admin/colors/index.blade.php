@extends('layouts.admin')
@section('content')
    <h1 class="mb-3">Kleuren</h1>
    <hr>
    <table class="table table-striped mt-2">
        <thead>
        <tr class="bg-white">
            <th></th>
            <th scope="col">Alle kleuren</th>
        </tr>
        </thead>
        <tbody>
        @foreach($colors as $color)
            <tr class="table-row" data-toggle="tooltip" title="Wijzig" data-placement="right"
                data-href="{{route('colors.edit',$color->id)}}">
                <td>{!! Form::open(['method'=>'DELETE', 'action'=>['ColorController@destroy',$color->id]])
                                 !!}
                    {!! Form::button('<i class="fas fa-trash-alt"></i>',['class'=>'btn create text-dark btn-sm',
                    'type'=>'submit']) !!}
                    {!! Form::close() !!}</td>
                <td>{{$color->color}}</td>

            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="row">
        <div class="col-12">
            {{$colors->render()}}
        </div>
    </div>
@endsection
