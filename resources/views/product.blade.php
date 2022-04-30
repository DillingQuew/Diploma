@extends('layouts.app')

@section('content')
    <div class="card w-50 d-md-inline-block m-2">
        <div class="card-body">
            <div class="card-img d-flex justify-content-center">
                <img src="https://www.minecraft.net/content/dam/minecraft/home/Games_Subnav_Minecraft-228x350.png" alt="" style="max-width: 400px;">
            </div>

        </div>
        <div class="card-header ">
            <p class="d-inline-block">Название товара</p>

            <button type="submit" class="btn btn-outline-success float-end">
                В корзину
            </button>
            <p class="card-subtitle justify-content-lg-end float-sm-right">Цена: 5000 Р.</p>
        </div>
    </div>
@endsection
