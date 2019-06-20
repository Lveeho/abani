@extends('layouts.admin')
@section('content')
    <h1 class="mb-3">Producten</h1>
    <hr>

    <div class="row">
        <div class="col-lg-6">
            {!! Form::model($product,['method'=>'PATCH','action'=>['ProductController@update',
          $product->id],'files'=>true])!!}
            <div class="form-row">
                <div class="form-group col-md-4">
                    {!! Form::label('producttype_id','Type:') !!}
                    {!! Form::select('producttype_id',$producttypes,null,['class'=>'form-control']) !!}
                </div>
                <div class="form-group col-md-4">
                    {!! Form::label('category_id','Categorie:') !!}
                    {!! Form::select('category_id',$categories,null,['class'=>'form-control']) !!}
                </div>
                <div class="form-group col-md-4">
                    {!! Form::label('brand_id','Merk:') !!}
                    {!! Form::select('brand_id',$brands,null,['class'=>'form-control']) !!}
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    {!! Form::label('name','Naam:') !!}
                    {!! Form::text('name',null,['class'=>'form-control']) !!}
                </div>
                <div class="form-group col-md-4">
                    {!! Form::label('price','Prijs:') !!}
                    {!! Form::text('price',null,['class'=>'form-control']) !!}
                </div>
                <div class="form-group col-md-4">
                    {!! Form::label('code','Code:') !!}
                    {!! Form::text('code',null,['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('mainpicture','Foto:') !!}
                    {!! Form::file('mainpicture',null,['class'=>'form-control']) !!}
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-12">
                    {!! Form::label('description','Beschrijving:') !!}
                    {!! Form::textarea('description',null,['class'=>'form-control','rows'=>8]) !!}
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-8">
                    {!! Form::label('is_active','Tonen in shop') !!}
                    {!! Form::select('is_active',array(1=>'Ja',0=>'Nee'),null,['class'=>'form-control',
                    'required']) !!}
                </div>
                <div class="form-group col-md-4 d-flex justify-content-center ">
                    {!! Form::button('<i class="far fa-save"></i>',
                    ['class'=>'btn create text-primary btn-sm ','type'=>'submit']) !!}
                </div>
                {!! Form::close() !!}
            </div>
        </div>
       <div class="col-lg-6">
            <div class="row mb-4">
                <div class="col-12">
                    <div class="row">
                        <div class="col-4">
                            <div class="card">
                                @if(empty($product->mainpicture))
                                    <img class="card-img-top"
                                         src='http://place-hold.it/400x400'
                                         alt="Generated image">
                                @else
                                    <img class="card-img-top" src="{{url('uploads/products/'.$product->mainpicture)}}"
                                         alt="{{$product->mainpicture}}">
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                @php($i=0)
                @foreach($allData as $oneData)
                    @foreach($oneData->colors as $color)
                            @foreach($oneData->lots as $lot)
                                @if($color->pivot->id===$lot->pivot->id)
                                    @php($i++)
                                    <div class="col-md-12 mt-4">
                                        {!! Form::model($product,['method'=>'PATCH','action'=>['ProductController@update',
            $product->id],'files'=>true])!!}
                                        <a class="btn btn-inverse-outline-dark btn-block"
                                           data-toggle="collapse"  href="#collapse{{$i}}"
                                           role="button" aria-expanded="false" aria-controls="collapse{{$i}}">
                                            Soort {{$i}}
                                        </a>
                                        <div class="collapse" id="collapse{{$i}}">
                                            <div class="card card-body mb-3">
                                                <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                        {!! Form::label('color','Kleur:') !!}
                                                        {!! Form::select('color_id',$colors,$color->id,
                                                        ['class'=>'form-control' ])!!}
                                                    </div>
                                                    <div class="form-group">
                                                        {!! Form::hidden('pivot_id',$color->pivot->id,['class'=>'form-control'])!!}
                                                    </div>
                                                    <div class="form-group col-md-6 ">
                                                        {!! Form::label('lot','Batch:') !!}
                                                        {!! Form::select('lot_id',$lots,$lot->id,['class'=>'form-control'])
                                                         !!}
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group">
                                                        {!! Form::label('name','Foto:') !!}
                                                        {!! Form::file('name',null,['class'=>'form-control']) !!}
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="col-md-12 d-flex justify-content-center">
                                                        {!! Form::button('<i class="far fa-save"></i>',
                                                        ['class'=>'btn create text-primary btn-sm','type'=>'submit']) !!}
                                                        {!! Form::close() !!}
                                                        {!! Form::open(['method'=>'DELETE',
                                                        'action'=>['CountryController@destroy',
                                                        $color->pivot->id]])!!}
                                                        {!! Form::button('<i class="fas fa-trash-alt"></i>',['class'=>'btn create text-danger btn-sm',
                                                        'type'=>'submit']) !!}
                                                        {!! Form::close() !!}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="row">
                                                    @php($photos=\App\Photo::where('product_color_id',$color->pivot->id)->get())
                                                    @foreach($photos as $photo)
                                                    <div class="col-4">
                                                        <div class="card card-body my-2">

                                                            <div class="card">
                                                                <img class="card-img-top img-responsive"
                                                                     src="{{url('uploads/productcolors/'.$photo->name)}}"
                                                                     alt="{{$photo->name}}">
                                                                @if(empty($photo->name))
                                                                    <div class="card-body">
                                                                        <p class="card-text">
                                                                            <strong>Leeg</strong>
                                                                        </p>
                                                                    </div>
                                                                    @else
                                                                    <div class="card-body">
                                                                        <p class="card-text">
                                                                            <strong>{{ $photo->description}}</strong>
                                                                        </p>
                                                                    </div>
                                                                @endif

                                                                {!! Form::open(['method'=>'DELETE',
                                                        'action'=>['PhotoController@destroy',
                                                        $photo->id]])!!}
                                                                {!! Form::button('<i class="fas fa-trash-alt"></i>',['class'=>'btn create text-danger btn-sm',
                                                                'type'=>'submit']) !!}
                                                                {!! Form::close() !!}

                                                            </div>
                                                        </div>
                                                    </div>
                                                    @endforeach
                                                </div>

                                            </div>

                                        </div>
                                    </div>

                                @endif
                            @endforeach
                    @endforeach
                @endforeach
            </div>
       </div>
        <div class="col-lg-6">
          <p>
              <a class="btn btn-inverse-outline-dark btn-block" data-toggle="collapse"
                 href="#collapse{{$i+1}}"
                 role="button" aria-expanded="false" aria-controls="collapse{{$i+1}}">
                  Nieuwe soort
              </a>
          </p>
          <div class="collapse" id="collapse{{$i+1}}">
              <div class="card card-body mb-3">
                  {!! Form::open(['method'=>'POST','action'=>'ProductController@store','files'=>true]) !!}
                  <div class="form-row">
                      <div class="form-group col-md-6">
                          {!! Form::label('color_id','Kleur:') !!}
                          {!! Form::select('color_id',$colorsSelect,null,['class'=>'form-control','required'])
                           !!}
                      </div>
                      <div class="form-group">
                          {!! Form::hidden('product_id',$product->id,['class'=>'form-control'])!!}
                      </div>
                      <div class="form-group col-md-6">
                          {!! Form::label('lot_id','Batch:') !!}
                          {!! Form::select('lot_id',$lotsSelect,null,['class'=>'form-control','required'])
                           !!}
                      </div>
                  </div>
                  <div class="form-row">
                      <div class="form-group col-md-12">
                          {!! Form::label('description','Beschrijving foto:') !!}
                          {!! Form::text('description',null,['class'=>'form-control']) !!}
                      </div>
                  </div>
                  <div class="form-row">
                      <div class="form-group col-md-11">
                          {!! Form::label('name','Foto:') !!}
                          {!! Form::file('name',null,['class'=>'form-control']) !!}
                      </div>
                      <div class="form-group col-md-1 d-flex justify-content-center">
                          {!! Form::button('<i class="far fa-save"></i>',
                          ['class'=>'btn create text-primary btn-sm','type'=>'submit']) !!}
                      </div>
                      {!! Form::close() !!}
                  </div>
              </div>
          </div>

        </div>
    </div>
@endsection
