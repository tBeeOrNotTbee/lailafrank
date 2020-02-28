@extends('layouts.app')
@section('title', 'Catalogo')
@section('content')


<div class="row catalog-row">
    <div class="col-12 col-md-6">
        <div class="container-fluid d-flex justify-content-center">
            <div class="col-12 col-md-8">
                <img class="img-fluid pl-4 pr-4" src="{{asset('/img/say_hello.png')}}" alt="Say hello to your new favourites">
                <div id="product2L1" class="card border-0 rounded-0 thumbnail-big">
                    <?php $previewLarge = $shoes[0]->previewLarge(); ?>
                    {{-- <div class="img-catalog mt-4 mb-3 bk-cover" style="background: url(/storage/{{$previewLarge->img_path}})"></div> --}}
                    <a class="img-catalog mt-4 mb-3 bk-cover" href="/catalog/shoe/{{$shoes[0]->id}} style="background: url(/public/{{$previewLarge->img_path}})"></a>
                    <div class="row d-flex justify-content-end" style="padding: 0 1.9rem;">
                        <i class="far fa-heart" style="margin-right: 0!important"></i>
                    </div>
                    <div class="card-body text-center">
                        <a class="card-title roboto-light black thumbnail-title" href="/catalog/shoe/{{$shoes[0]->id}}">{{$shoes[0]->name}}</a>
                        <p class="card-text roboto black thumbnail-price">${{$shoes[0]->price}}</p>
                        <div class="row d-flex justify-content-center">
                            @forelse ($shoes[0]->color as $color)
                            <div class="show-color ml-3">
                                <div class="w100" style="background:{{$color->color}}"></div>
                            </div>
                            @empty  
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>






    <div class="col-12 col-md-6 h100x">
        <div class="container-fluid h100x">
            <div class="row h100x d-flex align-content-between flex-wrap">

                @for ($i = 1; $i <= 4; $i++)
                <div id="product1" class="col-6 card border-0 rounded-0">
                    <div class="p-3">
                        <!-- THUMBNAIL CAROUSEL -->
                        <a class="shoe-img-preview" href="/catalog/shoe/{{$shoes[$i]->id}}">
                            <?php $previews=$shoes[$i]->previewSmall();?>
                            {{-- <img src="/storage/{{$previews[0]->img_path}}" class="img-fluid" alt=""> --}}
                            <img src="/public/{{$previews[0]->img_path}}" class="img-fluid" alt="">
                            {{-- <img src="/storage/{{$previews[1]->img_path}}" class="img-top img-fluid" alt=""> --}}
                            <img src="/public/{{$previews[1]->img_path}}" class="img-top img-fluid" alt="">
                        </a>
                    </div>
                    <div class="row d-flex justify-content-end" style="padding: 0 1.9rem;">
                        {{-- Favorito --}}
                        <?php $fav = $shoes[$i]->isFavorite();?>

                        @if ($fav == true)
                            <a href="#" id="heartShoeTrue{{$shoes[$i]->id}}" onclick="favoriteAction({{$shoes[$i]->id}})" class="d-block" style="margin-right: 0!important"><i id="indicatorFav{{$shoes[$i]->id}}" class="fas fa-heart rosa"></i></a>
                            <a href="#" id="heartShoeFalse{{$shoes[$i]->id}}" onclick="favoriteAction({{$shoes[$i]->id}})" class="d-none" style="margin-right: 0!important"><i id="indicatorFav{{$shoes[$i]->id}}" class="far fa-heart"></i></a>
                        @else
                            <a href="#" id="heartShoeFalse{{$shoes[$i]->id}}" onclick="favoriteAction({{$shoes[$i]->id}})" class="d-block" style="margin-right: 0!important"><i id="indicatorFav{{$shoes[$i]->id}}" class="far fa-heart"></i></a>
                            <a href="#" id="heartShoeTrue{{$shoes[$i]->id}}" onclick="favoriteAction({{$shoes[$i]->id}})" class="d-none" style="margin-right: 0!important"><i id="indicatorFav{{$shoes[$i]->id}}" class="fas fa-heart rosa"></i></a>
                        @endif
                    </div>
                    <div class="card-body text-center">
                        <a class="card-title roboto-light black thumbnail-title" href="/catalog/shoe/{{$shoes[$i]->id}}">{{$shoes[$i]->name}}</a>
                        <p class="card-text roboto black thumbnail-price">${{$shoes[$i]->price}}</p>
                        <div class="row d-flex justify-content-center">
                            @forelse ($shoes[$i]->color as $color)
                            <div class="show-color ml-3">
                                <div class="w100" style="background:{{$color->color}}"></div>
                            </div>
                            @empty  
                            @endforelse
                        </div>
                    </div>
                </div>
                @endfor
                
            </div>
        </div>
    </div>
</div>



<!-- SEGUNDA FILA DE CATALOGO -->


<div class="row catalog-row">
    <div class="col-12 col-md-6 h100x order-3 order-md-1">
        <div class="container-fluid h100x">
            <div class="row h100x d-flex align-content-between flex-wrap">

                
                @for ($i = 5; $i <= 8; $i++)
                <div id="product1" class="col-6 card border-0 rounded-0">
                    <a class="p-3">
                        <!-- THUMBNAIL CAROUSEL -->
                        <a class="shoe-img-preview" href="/catalog/shoe/{{$shoes[$i]->id}}">
                            <?php $previews=$shoes[$i]->previewSmall();?>
                            {{-- <img src="/storage/{{$previews[0]->img_path}}" class="img-fluid" alt=""> --}}
                            <img src="/public/{{$previews[0]->img_path}}" class="img-fluid" alt="">
                            {{-- <img src="/storage/{{$previews[1]->img_path}}" class="img-top img-fluid" alt=""> --}}
                            <img src="/public/{{$previews[1]->img_path}}" class="img-top img-fluid" alt="">
                        </a>
                    </div>
                    <div class="row d-flex justify-content-end" style="padding: 0 1.9rem;">
                        {{-- Favorito --}}
                        <?php $fav = $shoes[$i]->isFavorite();?>

                        @if ($fav == true)
                            <a href="#" id="heartShoeTrue{{$shoes[$i]->id}}" onclick="favoriteAction({{$shoes[$i]->id}})" class="d-block" style="margin-right: 0!important"><i id="indicatorFav{{$shoes[$i]->id}}" class="fas fa-heart rosa"></i></a>
                            <a href="#" id="heartShoeFalse{{$shoes[$i]->id}}" onclick="favoriteAction({{$shoes[$i]->id}})" class="d-none" style="margin-right: 0!important"><i id="indicatorFav{{$shoes[$i]->id}}" class="far fa-heart"></i></a>
                        @else
                            <a href="#" id="heartShoeFalse{{$shoes[$i]->id}}" onclick="favoriteAction({{$shoes[$i]->id}})" class="d-block" style="margin-right: 0!important"><i id="indicatorFav{{$shoes[$i]->id}}" class="far fa-heart"></i></a>
                            <a href="#" id="heartShoeTrue{{$shoes[$i]->id}}" onclick="favoriteAction({{$shoes[$i]->id}})" class="d-none" style="margin-right: 0!important"><i id="indicatorFav{{$shoes[$i]->id}}" class="fas fa-heart rosa"></i></a>
                        @endif
                    </div>
                    <div class="card-body text-center">
                        <a class="card-title roboto-light black thumbnail-title" href="/catalog/shoe/{{$shoes[$i]->id}}">{{$shoes[$i]->name}}</a>
                        <p class="card-text roboto black thumbnail-price">${{$shoes[$i]->price}}</p>
                        <div class="row d-flex justify-content-center">
                            @forelse ($shoes[$i]->color as $color)
                            <div class="show-color ml-3">
                                <div class="w100" style="background:{{$color->color}}"></div>
                            </div>
                            @empty  
                            @endforelse
                        </div>
                    </div>
                </div>
                @endfor


            </div>
        </div>
    </div>

    <div class="col-12 col-md-6 order-1 order-md-3">
        <div class="container-fluid d-flex justify-content-center">
            <div class="col-12 col-md-8">
                <img class="img-fluid pl-4 pr-4" src="{{asset('/img/must_have.png')}}" alt="Must have">
                <div id="product2L1" class="card border-0 rounded-0 thumbnail-big">
                    <?php $previewLarge2 = $shoes[9]->previewLarge(); ?>
                    {{-- <a href="/catalog/shoe/{{$shoes[9]->id}}" class="img-catalog mt-4 mb-3 bk-cover" style="background: url(/storage/{{$previewLarge2->img_path}})"></a> --}}
                    <a href="/catalog/shoe/{{$shoes[9]->id}}" class="img-catalog mt-4 mb-3 bk-cover" style="background: url(/public/{{$previewLarge2->img_path}})"></a>
                    <div class="row d-flex justify-content-end" style="padding: 0 1.9rem;">
                        <i class="far fa-heart" style="margin-right: 0!important"></i>
                    </div>
                    <div class="card-body text-center">
                        <a class="card-title roboto-light black thumbnail-title" href="/catalog/shoe/{{$shoes[9]->id}}">{{$shoes[9]->name}}</a>
                        <p class="card-text roboto black thumbnail-price">${{$shoes[9]->price}}</p>
                        <div class="row d-flex justify-content-center">
                            @forelse ($shoes[9]->color as $color)
                            <div class="show-color ml-3">
                                <div class="w100" style="background:{{$color->color}}"></div>
                            </div>
                            @empty  
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- 

<div class="row d-flex justify-content-center see-more">
    <a href="#" class="button-story">ver + productos</a>
</div> --}}
@endsection