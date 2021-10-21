<?php

use App\Http\Controllers\ProductController;
$total = 0;

?>
<header>
    <!-- header inner -->
    <div class="header">

        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                    <div class="full">
                        <div class="center-desk">
                            <div class="logo">
                                <a href="/"><img src="https://laptopokolcson.hu/laptopokolcson-logo.png" alt="#"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                    <div class="menu-area">
                        <div class="limit-box">
                            <nav class="main-menu">
                                <ul>
                                <li class="menu-area-main">
                                    <li class="active"> <a href="/">Főoldal</a> </li>
                                    <li><a href="/products">Termékek</a></li>
                                        @if (Session::has('user'))
                                        <li class="dropdown">
                                            <button class="btn btn-dark dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                {{Session::get('user')['first_name']}} {{Session::get('user')['last_name']}}
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item" style="color: black" href="/logout">Kijelentkezés</a>
                                            </div>
                                        </li>
                                        @else
                                        <li class="dropdown">
                                            <button class="btn btn-dark dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Fiókom
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item" style="color: black" href="/login">Bejelentkezés</a>
                                                <a class="dropdown-item" style="color: black" href="/register">Regisztráció</a>
                                            </div>
                                        </li>
                                        @endif
                                    <li class="last">
                                        <a href="#"><img src="{{asset('assets/images/search_icon.png')}}" alt="icon" /></a>
                                    </li>
                                    <li>
                                        <input type="text" style="width: auto">
                                    </li>
                                    <li><a href="/cart">Kosár(0)</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end header inner -->
</header>
<!-- end header -->
