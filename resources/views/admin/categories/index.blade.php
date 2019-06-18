@extends('layouts.admin')
@section('content')
    <h1 class="mb-3">Categorieën</h1>
    <hr>
    <table class="table table-striped mt-2">
        <thead>
        <tr class="bg-white">
            <th></th>
            <th scope="col">Alle categorieën</th>
        </tr>
        </thead>
        <tbody>
        @foreach($categories as $category)
            <tr class="table-row" data-toggle="tooltip" title="Wijzig" data-placement="right"
                data-href="{{route('categories.edit',$category->id)}}">
                <td>{!! Form::open(['method'=>'DELETE', 'action'=>['CategoryController@destroy',$category->id]])
                                 !!}
                    {!! Form::button('<i class="fas fa-trash-alt"></i>',['class'=>'btn create text-dark btn-sm',
                    'type'=>'submit']) !!}
                    {!! Form::close() !!}</td>
                <td>{{$category->title}}</td>

            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="row">
        <div class="col-12">
            {{$categories->render()}}
        </div>
    </div>
@endsection

