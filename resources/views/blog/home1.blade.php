@extends('template.layaoutindex')
@section('head')
<header class="masthead" style="background-image: url('assets/img/home-bg.jpg')">
    <div class="container position-relative px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <div class="site-heading">
                    <h1>Bienvenido a la unidad I</h1>
                    <span class="subheading">Parte 1</span>
                </div>
            </div>
        </div>
    </div>
</header>
@endsection
@section('info')
<div class="container px-4 px-lg-5">
    <div class="row gx-4 gx-lg-5 justify-content-center">
        <div class="col-md-10 col-lg-8 col-xl-7">
            <!-- Post preview-->
            <div class="post-preview">
            <img class="img-fluid" src="assets/img/tema1-1.jpg" alt="..." style="width: 100%" />
                <a href="{{route('posteo1')}}">
                    <h2 class="post-title">{{$articulo1->titulo}}</h2>
                    <h3 class="post-subtitle">{{$articulo1->subtitulo}}</h3>
                </a>
                <p class="post-meta">
                    Posteado por
                    <a href="{{route('about')}}">{{$articulo1->autor}}</a>
                    en {{$articulo1->fecha}}
                </p>
            </div>
            <!-- Divider-->
            <hr class="my-4" />
            <!-- Post preview-->
            <div class="post-preview">
            <img class="img-fluid" src="assets/img/tema1-1.jpg" alt="..." style="width: 100%" />            
            <a href="{{route('posteo2')}}">
                    <h2 class="post-title">{{$articulo2->titulo}}</h2>
                    <h3 class="post-subtitle">{{$articulo2->subtitulo}}</h3>
                </a>
                <p class="post-meta">
                    Posteado por
                    <a href="{{route('about')}}">{{$articulo2->autor}}</a>
                    en {{$articulo2->fecha}}
                </p>
            </div>
            <!-- Divider-->
            <hr class="my-4" />
            <!-- Post preview-->
            <div class="post-preview">
            <img class="img-fluid" src="assets/img/tema1-1.jpg" alt="..." style="width: 100%" />
                <a href="{{route('posteo3')}}">
                    <h2 class="post-title">{{$articulo3->titulo}}</h2>
                    <h3 class="post-subtitle">{{$articulo3->subtitulo}}</h3>
                </a>
                <p class="post-meta">
                    Posteado por
                    <a href="{{route('about')}}">{{$articulo3->autor}}</a>
                    en {{$articulo3->fecha}}
                </p>
            </div>
            <!-- Divider-->
            <hr class="my-4" />
            <!-- Post preview--><div class="post-preview">
            <img class="img-fluid" src="assets/img/tema1-1.jpg" alt="..." style="width: 100%" />
                <a href="{{route('posteo4')}}">
                    <h2 class="post-title">{{$articulo4->titulo}}</h2>
                    <h3 class="post-subtitle">{{$articulo4->subtitulo}}</h3>
                </a>
                <p class="post-meta">
                    Posteado por
                    <a href="{{route('about')}}">{{$articulo4->autor}}</a>
                    en {{$articulo4->fecha}}
                </p>
            </div>
            <!-- Divider-->
            <hr class="my-4" />
            <!-- Pager-->
            <div class="d-flex justify-content-end mb-4"><a class="btn btn-primary text-uppercase" href="{{route('index2')}}">Mas investigaciones ➜</a></div>
        </div>
    </div>
</div>
@endsection