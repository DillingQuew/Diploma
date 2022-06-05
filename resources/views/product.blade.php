@extends('layouts.master')

@section('title', 'Товар')

@section('content')
    <div class="glass container p-3 m-1">
         <div class="product-card" >
            <div class="product-img">
               <div class="labels badge_menu">
                  @if($product->isNew())
                        <span class="badge rounded-pill bg-warning text-dark">Новинка</span>
                  @endif

                  @if($product->isRecommend())
                        <span class="badge rounded-pill bg-primary">Рекомендуем</span>
                  @endif

                  @if($product->isHit())
                        <span class="badge rounded-pill bg-success">Хит продаж!</span>
                  @endif
               </div>
               <img class="product-img" src="{{Storage::url($product->image)}}" alt="Тут должна быть картинка" style="width: 100%;">
            </div>
               
            <div class="product-text p-3 overflow-auto"
                  style=" background-color:var(--back-color);
                  height:100%;
                  ">
               <span class="about-product card-text text-center d-block">
                  <h3 class="about-product">{{ $product->name }}</h3>
                  <p class="about-product overflow-auto decsr" style="height:210px;">{{$product->description}}</p>
                  <h2 class=" about-product card-text text-center m-0">{{ $product->price }} руб.</p>
               </span>
                  @guest
                     <p class="text-center ">Войдите, чтобы добавить товар в корзину</p>
                  @endguest
                  <form style="" class="p-2" action="{{ route('basket-add', $product) }}" method="POST">
                     @auth
                     <button type="submit" class="btn btn-success" role="button">В корзину</button>
                     @endauth
            
                     @csrf
                 </form>

                 

            </div>
         </div>
   </div>


@endsection
