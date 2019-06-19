@extends('layouts.admin')
@section('content')
    <h1 class="mb-3">Batch</h1>
    <hr>
    <div class="table-responsive">
    <table class="table table-striped mt-2">
        <thead>
        <tr class="bg-white">
            <th></th>
            <th scope="col">Batchcode</th>
            <th scope="col">Gemaakt op</th>
            <th scope="col">Vervalt op</th>
            <th scope="col">Inhoud (ml)</th>
            <th scope="col">Ingrediënten</th>
        </tr>
        </thead>
        <tbody>
        @foreach($lots as $lot)
            <tr class="table-row" data-toggle="tooltip" title="Wijzig" data-placement="right"
                data-href="{{route('lots.edit',$lot->id)}}">
                <td>{!! Form::open(['method'=>'DELETE', 'action'=>['LotController@destroy',$lot->id]])
                                 !!}
                    {!! Form::button('<i class="fas fa-trash-alt"></i>',['class'=>'btn create text-dark btn-sm',
                    'type'=>'submit']) !!}
                    {!! Form::close() !!}</td>
                <td rowspan="1">{{$lot->code}}</td>
                <td rowspan="1">{{$lot->manufactured}}</td>
                <td rowspan="1">{{$lot->expiry}}</td>
                <td rowspan="1">{{$lot->volume}}</td>
                <td rowspan="1">{{$lot->ingredients}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    </div>
    <div class="row">
        <div class="col-12">
            {{$lots->render()}}
        </div>
    </div>
@endsection
