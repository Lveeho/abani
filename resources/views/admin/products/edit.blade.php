@extends('layouts.admin')
@section('content')
    <h1 class="mb-3">Producten</h1>
    <hr>

    <div class="row">
        <div class="col-lg-9">
            {!! Form::model($product,['method'=>'PATCH','action'=>['ProductController@update',
          $product->id]])!!}
           <div class="form-row">

                <div class="form-group col-lg-3">
                    {!! Form::label('producttype_id','Type:') !!}
                    {!! Form::select('producttype_id',$producttypes,null,['class'=>'form-control']) !!}
                </div>
                <div class="form-group col-lg-3">
                    {!! Form::label('category_id','Categorie:') !!}
                    {!! Form::select('category_id',$categories,null,['class'=>'form-control']) !!}
                </div>
                <div class="form-group col-lg-3">
                    {!! Form::label('brand_id','Merk:') !!}
                    {!! Form::select('brand_id',$brands,null,['class'=>'form-control']) !!}
                </div>
               <div class="form-group col-lg-3">
                   {!! Form::label('is_active','Tonen in shop') !!}
                   {!! Form::select('is_active',array(1=>'Ja',0=>'Nee'),null,['class'=>'form-control',
                   'required']) !!}
               </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-3">
                    {!! Form::label('name','Naam:') !!}
                    {!! Form::text('name',null,['class'=>'form-control']) !!}
                </div>
                <div class="form-group col-md-3">
                    {!! Form::label('price','Prijs:') !!}
                    {!! Form::text('price',null,['class'=>'form-control']) !!}
                </div>
                <div class="form-group col-md-3">
                    {!! Form::label('volume','Inhoud:') !!}
                    {!! Form::text('volume',null,['class'=>'form-control']) !!}
                </div>
                <div class="form-group col-md-3">
                    {!! Form::label('code','Code:') !!}
                    {!! Form::text('code',null,['class'=>'form-control']) !!}
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-11">
                    {!! Form::label('description','Beschrijving:') !!}
                    {!! Form::textarea('description',null,['class'=>'form-control','rows'=>4]) !!}
                </div>
                <div class="form-group col-md-1 d-flex justify-content-center ">
                    {!! Form::button('<i class="far fa-save"></i>',
                    ['class'=>'btn create text-primary btn-sm ','type'=>'submit']) !!}
                </div>
                {!! Form::close() !!}
            </div>

        </div>
       <div class="col-lg-3 ">
            <div class="row mb-4">
                @php($i=0)
                @foreach($allData as $oneData)
                    @foreach($oneData->colors as $color)
                            @foreach($oneData->lots as $lot)
                                @if($color->getOriginal('pivot_id')===$lot->getOriginal('pivot_id'))
                                    @php($i++)


                                        <div class="col-md-9 mt-4">
                                            {!! Form::model($product,['method'=>'PATCH','action'=>['ProductController@update',
                $product->id]])!!}
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
                                                            {!! Form::hidden('pivot_id',$color->getOriginal('pivot_id'),
                                                            ['class'=>'form-control'])!!}
                                                        </div>
                                                        <div class="form-group col-md-6 ">
                                                            {!! Form::label('lot','Batch:') !!}
                                                            {!! Form::select('lot_id',$lots,$lot->id,['class'=>'form-control'])
                                                             !!}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-1 mt-4">
                                            {!! Form::button('<i class="far fa-save"></i>',
                                            ['class'=>'btn create text-primary btn-sm','type'=>'submit']) !!}
                                            {!! Form::close() !!}
                                        </div>
                                        <div class="col-md-1 mt-4">
                                            {!! Form::open(['method'=>'DELETE', 'action'=>['ProductController@destroy',
                                            $product->getOriginal('pivot_id')]])!!}
                                            {!! Form::button('<i class="fas fa-trash-alt"></i>',['class'=>'btn create text-danger btn-sm',
                                            'type'=>'submit']) !!}
                                            {!! Form::close() !!}
                                        </div>
                                @endif
                            @endforeach
                    @endforeach
                @endforeach
            </div>
       </div>
        <div class="col-lg-12">
            {!! Form::open(['method'=>'POST','action'=>['ProductController@store']])!!}
          <div class="row">
              <div class="col-md-8">
                  <p>
                      <a class="btn btn-inverse-outline-dark btn-block" data-toggle="collapse"
                         href="#collapse{{$i+1}}"
                         role="button" aria-expanded="false" aria-controls="collapse{{$i+1}}">
                          Nieuwe soort
                      </a>
                  </p>
                  <div class="collapse" id="collapse{{$i+1}}">
                      <div class="card card-body mb-3">
                          {!! Form::open(['method'=>'POST','action'=>'ProductController@store']) !!}
                          <div class="form-group">
                              {!! Form::label('color_id','Kleur:') !!}
                              {!! Form::select('color_id',$colorsSelect,null,['class'=>'form-control','required'])
                               !!}
                          </div>
                          <div class="form-group">
                              {!! Form::hidden('product_id',$product->id,['class'=>'form-control'])!!}
                          </div>
                          <div class="form-group mt-4 ">
                              {!! Form::label('lot_id','Batch:') !!}
                              {!! Form::select('lot_id',$lotsSelect,null,['class'=>'form-control','required'])
                               !!}
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-md-1">
                  <div class="form-group">
                      {!! Form::button('<i class="far fa-save"></i>',
                      ['class'=>'btn create text-primary btn-sm','type'=>'submit']) !!}
                  </div>
                  {!! Form::close() !!}
              </div>
          </div>
        </div>






@endsection
