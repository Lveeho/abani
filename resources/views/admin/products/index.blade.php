@extends('layouts.admin')
@section('content')
    <h1 class="mb-3">Producten</h1>
    <hr>
    <div class="table-responsive">
    <table class="table table-striped mt-2">
        <thead>
        <tr class="bg-white">
            <th scope="col" style="width:1px"></th>
            <th scope="col" style="width:1px">Categorie</th>
            <th scope="col" style="width:1px">Type</th>
            <th scope="col" style="width:1px">Merk</th>
            <th scope="col" style="width:1px">Productcode</th>
            <th scope="col" style="width:1px">Naam</th>
            <th scope="col" style="width:1px">Beschrijving</th>
            <th scope="col" style="width:1px">Ingrediënten</th>
            <th scope="col" style="width:1px">Prijs</th>
            <th scope="col" style="width:1px">Inhoud</th>
            <th scope="col" style="width:1px">Zichtbaar</th>

        </tr>
        </thead>
        <tbody>
        @foreach($products as $product)
            <tr class="table-row" data-toggle="tooltip" title="Wijzig" data-placement="right"
                data-href="{{route('products.edit',$product->id)}}">
                <td rowspan="1">{!! Form::open(['method'=>'DELETE', 'action'=>['ProductController@destroy',
                $product->id]])
                                 !!}
                    {!! Form::button('<i class="fas fa-trash-alt"></i>',['class'=>'btn create text-dark btn-sm',
                    'type'=>'submit']) !!}
                    {!! Form::close() !!}</td>
                <td rowspan="1">{{$product->category->title}}</td>
                <td rowspan="1">{{$product->producttype->type}}</td>
                <td rowspan="1">{{$product->brand->brand}}</td>
                <td rowspan="1">{{$product->code}}</td>
                <td rowspan="1">{{$product->name}}</td>
                <td rowspan="1">{{Str::limit(($product->description),10)}}</td>
                <td rowspan="1">{{Str::limit(($product->ingredients),10)}}</td>
                <td rowspan="1">{{$product->price}}</td>
                <td rowspan="1">{{$product->volume}}</td>
                <td rowspan="1">{{$product->is_active}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    </div>
    <div class="row">
        <div class="col-12">
            {{$products->render()}}
        </div>
    </div>
@endsection
