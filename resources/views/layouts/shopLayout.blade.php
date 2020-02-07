@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="d-none d-md-block col-12 m-4 text-center">
            <img src="{{asset('img/logo_shop.png')}}" class="" alt="">
        </div>
    </div>
    <div class="row my-5 pb-5">
        @include('layouts.partials.shopBar')
        
        @yield('contentShop')
    </div>   
@endsection