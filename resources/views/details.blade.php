
@extends('layout')
@section('contant')
    
<img src="" alt="">
<div class="container mt-5">
    <div class="col-lg-8 border p-3 main-section bg-white">
        <div class="row hedding m-0 pl-3 pt-0 pb-3">
            Product Details
        </div>
        <div class="row m-0">
            <div class="col-lg-4 left-side-product-box pb-3">
                <img src="{{asset('uploads/'.$data->img)}}" class="border p-3">
                <span class="sub-img">
                    <img src="{{asset('uploads/'.$data->img)}}" class="border p-2">
                    <img src="{{asset('uploads/'.$data->img)}}" class="border p-2">
                    <img src="{{asset('uploads/'.$data->img)}}" class="border p-2">
                </span>
            </div>
            <div class="col-lg-8">
                <div class="right-side-pro-detail border p-3 m-0">
                    <div class="row">
                        <div class="col-lg-12">
                            <span>{{$data->pname}}</span>
                            <p class="m-0 p-0">{{$data->bname}}</p>
                        </div>
                        <div class="col-lg-12">
                            <p class="m-0 p-0 price-pro">${{$data->pprice}}</p>
                            <hr class="p-0 m-0">
                        </div>
                        <div class="col-lg-12 pt-2">
                            <h5>Detail</h5>
                            <span>{{$data->pdess}}</span>
                            <hr class="m-0 pt-2 mt-2">
                        </div>    
                    </div>
                </div>
            </div>
        </div>
     
    </div>
</div>

@endsection
