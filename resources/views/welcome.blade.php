
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="card w-75 d-md-inline-block m-2">
                <div class="container m-3">
                    <p class="d-inline-block m-lg-auto">Фильтры</p>
                    <div class="">
                        <ul class="d-inline">
                            <div class="dropdown d-inline-flex">
                                <button class="btn btn-secondary dropdown-toggle d-block m-1" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                                    По новизне
                                </button>
                                <ul class="dropdown-menu dropdown-menu-dark m-2" aria-labelledby="dropdownMenuButton2">
                                    <li><a class="dropdown-item active" href="#">Сначала старые</a></li>
                                    <li><a class="dropdown-item" href="#">Сначала новые</a></li>
                                </ul>
                            </div>

                            <div class="dropdown d-inline-flex">
                                <button class="btn btn-secondary dropdown-toggle d-block m-1" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                                    По новизне
                                </button>
                                <ul class="dropdown-menu dropdown-menu-dark m-2" aria-labelledby="dropdownMenuButton2">
                                    <li><a class="dropdown-item active" href="#">Сначала старые</a></li>
                                    <li><a class="dropdown-item" href="#">Сначала новые</a></li>
                                </ul>
                            </div>

                            <div class="dropdown d-inline-flex">
                                <button class="btn btn-secondary dropdown-toggle d-block m-1" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                                    По новизне
                                </button>
                                <ul class="dropdown-menu dropdown-menu-dark m-2" aria-labelledby="dropdownMenuButton2">
                                    <li><a class="dropdown-item active" href="#">Сначала старые</a></li>
                                    <li><a class="dropdown-item" href="#">Сначала новые</a></li>
                                </ul>
                            </div>

                            <div class="dropdown d-inline-flex">
                                <button class="btn btn-secondary dropdown-toggle d-block m-1" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                                    По новизне
                                </button>
                                <ul class="dropdown-menu dropdown-menu-dark m-2" aria-labelledby="dropdownMenuButton2">
                                    <li><a class="dropdown-item active" href="#">Сначала старые</a></li>
                                    <li><a class="dropdown-item" href="#">Сначала новые</a></li>
                                </ul>
                            </div>

                            <div class="dropdown d-inline-flex">
                                <button class="btn btn-secondary dropdown-toggle d-block m-1" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                                    По новизне
                                </button>
                                <ul class="dropdown-menu dropdown-menu-dark m-2" aria-labelledby="dropdownMenuButton2">
                                    <li><a class="dropdown-item active" href="#">Сначала старые</a></li>
                                    <li><a class="dropdown-item" href="#">Сначала новые</a></li>
                                </ul>
                            </div>


                            <div class="dropdown d-inline-flex m-1">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                                    По наименованию
                                </button>
                                <ul class="dropdown-menu dropdown-menu-dark m-2" aria-labelledby="dropdownMenuButton2">
                                    <li><a class="dropdown-item active" href="#">А-Я</a></li>
                                    <li><a class="dropdown-item" href="#">Я-А</a></li>
                                </ul>
                            </div>

                            <div class="dropdown d-inline-flex m-1">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                                    По цене
                                </button>
                                <ul class="dropdown-menu dropdown-menu-dark m-2" aria-labelledby="dropdownMenuButton2">
                                    <li><a class="dropdown-item active" href="#">Сначала дорогие</a></li>
                                    <li><a class="dropdown-item" href="#">Сначала дешёвые</a></li>
                                </ul>
                            </div>
                        </ul>
                    </div>
                </div>
            </div>

{{--            <p class="d-inline-block m-lg-auto">Фильтры</p>--}}
{{--            <div class="">--}}
{{--                <ul class="d-inline">--}}

            <div class="card w-75 d-md-inline-block m-2">
                <div class="container m-3">
                    <p class="d-block m-lg-1">Категории</p>
                    <div>
                        <button class="btn btn-success m-2" id="Digital">Приставки</button>
                        <button class="btn btn-success m-2" id="Technic">Игры</button>
                        <button class="btn btn-success m-2" id="Technic">Аксессуары</button>
                    </div>

                </div>
            </div>

            <div class="col-md-6 container-md ">


                    <div class="card d-md-inline-block m-2">
                        <a href="product">
                        <div class="card-body">
                            <div class="card-img d-flex justify-content-center">
                                <img src="https://www.minecraft.net/content/dam/minecraft/home/Games_Subnav_Minecraft-228x350.png" alt="" style="max-width:400px;">
                            </div>
                        </div>
                        <div class="card-header">
                            <p class="card-subtitle justify-content-lg-end float-sm-right text-center">Minecraft Pocket Edition</p>
                            <p class="card-subtitle justify-content-lg-end float-sm-right text-center">Цена: 5000 Р.</p>
                        </div>
                        </a>
                    </div>

                <div class="card d-md-inline-block m-2">
                    <a href="product">
                        <div class="card-body">
                            <div class="card-img d-flex justify-content-center">
                                <img src="https://www.minecraft.net/content/dam/minecraft/home/Games_Subnav_Minecraft-228x350.png" alt="" style="max-width:400px;">
                            </div>
                        </div>
                        <div class="card-header">
                            <p class="card-subtitle justify-content-lg-end float-sm-right text-center">Minecraft Pocket Edition</p>
                            <p class="card-subtitle justify-content-lg-end float-sm-right text-center">Цена: 5000 Р.</p>
                        </div>
                    </a>
                </div>



            </div>
        </div>
    </div>
@endsection
