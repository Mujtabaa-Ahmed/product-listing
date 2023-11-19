@extends('layout')
@section('contant')
   


    @foreach ($view as $v)
        <div class="responsive">
            <div class="gallery">
                <a  href="{{route('details',['productid'=>$v])}}">
                    <img src="{{asset('uploads/'.$v->img)}}" alt="Cinque Terre" width="600" height="400">
                </a>
                <div class="desc">{{$v->pname}}</div>
            </div>
        </div>
    @endforeach





    

   
@endsection
