
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="card w-75 d-md-inline-block m-2 glass">
                <div class="container m-3">
                    <p class="d-inline-block m-lg-auto">Фильтры</p>
                    <div class="">
                        <ul class="d-inline">
                            <div class="dropdown d-inline-flex">
                                <button class="btn btn-secondary dropdown-toggle d-block m-1" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false" style="background-color:#4b0082; border-color: #4b0082">
                                    По новизне
                                </button>
                                <ul class="dropdown-menu dropdown-menu-dark m-2" aria-labelledby="dropdownMenuButton2">
                                    <li><a class="dropdown-item active" href="#">Сначала старые</a></li>
                                    <li><a class="dropdown-item" href="#">Сначала новые</a></li>
                                </ul>
                            </div>

                            <div class="dropdown d-inline-flex">
                                <button class="btn btn-secondary dropdown-toggle d-block m-1" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false" style="background-color:#4b0082; border-color: #4b0082">
                                    По новизне
                                </button>
                                <ul class="dropdown-menu dropdown-menu-dark m-2" aria-labelledby="dropdownMenuButton2">
                                    <li><a class="dropdown-item active" href="#">Сначала старые</a></li>
                                    <li><a class="dropdown-item" href="#">Сначала новые</a></li>
                                </ul>
                            </div>

                            <div class="dropdown d-inline-flex">
                                <button class="btn btn-secondary dropdown-toggle d-block m-1" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false" style="background-color:#4b0082; border-color: #4b0082">
                                    По новизне
                                </button>
                                <ul class="dropdown-menu dropdown-menu-dark m-2" aria-labelledby="dropdownMenuButton2">
                                    <li><a class="dropdown-item active" href="#">Сначала старые</a></li>
                                    <li><a class="dropdown-item" href="#">Сначала новые</a></li>
                                </ul>
                            </div>

                            <div class="dropdown d-inline-flex">
                                <button class="btn btn-secondary dropdown-toggle d-block m-1" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false" style="background-color:#4b0082; border-color: #4b0082">
                                    По новизне
                                </button>
                                <ul class="dropdown-menu dropdown-menu-dark m-2" aria-labelledby="dropdownMenuButton2">
                                    <li><a class="dropdown-item active" href="#">Сначала старые</a></li>
                                    <li><a class="dropdown-item" href="#">Сначала новые</a></li>
                                </ul>
                            </div>

                            <div class="dropdown d-inline-flex">
                                <button class="btn btn-secondary dropdown-toggle d-block m-1" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false" style="background-color:#4b0082; border-color: #4b0082">
                                    По новизне
                                </button>
                                <ul class="dropdown-menu dropdown-menu-dark m-2" aria-labelledby="dropdownMenuButton2">
                                    <li><a class="dropdown-item active" href="#">Сначала старые</a></li>
                                    <li><a class="dropdown-item" href="#">Сначала новые</a></li>
                                </ul>
                            </div>


                            <div class="dropdown d-inline-flex m-1">
                                <button class="btn btn-secondary dropdown-toggle d-block m-1" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false" style="background-color:#4b0082; border-color: #4b0082">
                                    По наименованию
                                </button>
                                <ul class="dropdown-menu dropdown-menu-dark m-2" aria-labelledby="dropdownMenuButton2">
                                    <li><a class="dropdown-item active" href="#">А-Я</a></li>
                                    <li><a class="dropdown-item" href="#">Я-А</a></li>
                                </ul>
                            </div>

                            <div class="dropdown d-inline-flex m-1">
                                <button class="btn btn-secondary dropdown-toggle d-block m-1" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false" style="background-color:#4b0082; border-color: #4b0082">
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

            <div class="card w-75 d-md-inline-block m-2 glass">
                <div class="container m-3">
                    <p class="d-block m-lg-1">Категории</p>
                    <div>
                        <button class="btn btn-success m-2" id="Digital" style="background-color:dodgerblue; border-color:dodgerblue;">Приставки</button>
                        <button class="btn btn-success m-2" id="Technic" style="background-color:dodgerblue; border-color:dodgerblue;">Игры</button>
                        <button class="btn btn-success m-2" id="Technic" style="background-color:dodgerblue; border-color:dodgerblue;">Аксессуары</button>
                    </div>

                </div>
            </div>



            <div class="container ">
                <div class="card col-sm w-25 glass glasses-borders">
                    <a href="product" style="text-decoration: none;">
                                <img src="https://www.minecraft.net/content/dam/minecraft/home/Games_Subnav_Minecraft-228x350.png" class="card-img-top rounded mx-auto d-block p-3" alt="">
{{--                                    style="max-width:400px;--}}

                    <div class="card-body p-3" style="color:black; background-color: var(--bgc-for-card); border-radius:5px; width:100%; padding:0;">
                        <span class="card-text text-center d-block">
                            Minecraft: Pocket Edition

                            <p class="card-text text-center m-0">Цена: 5000 Р.</p>

                        </span>
                    </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
