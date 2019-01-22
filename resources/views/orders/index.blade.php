@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row" style="padding-left: 5em;">

            @foreach ($products as $product)

            <div class="col-sm-6 col-md-4">
                <div class="thumbnail" style="margin-top: 2em;">
                    <img src="{{$product->image}}" class="img-responsive">
                    <div class="caption">
                            <div class="col-md-12 col-xs-12">
                                <h3>品名：{{$product->name}}</h3>
                            </div>
                            <div class="col-md-12 col-xs-12 price">
                                <h3>
                                    <label>NT$：{{$product->price}}</label></h3>
                                </div>
                                
                                <div class="col-md-12 col-md-offset-3">

                                    <a href="/order/{{$product->id}}/create" class="btn btn-success btn-product"><span class="fa fa-shopping-cart"></span> 購買</a></div>

                            </div>
                        </div>
                    </div>
                    @endforeach

            </div>
        </div>
        @endsection
    