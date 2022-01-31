@extends('template.layaoutindex')
@section('head')
<header class="masthead" style="background-image: url('assets/img/home-bg2.jpg')">
    <div class="container position-relative px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <div class="site-heading">
                    <h1>Bienvenido a la unidad I</h1>
                    <span class="subheading">Parte 2</span>
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
                <a href="{{route('posteo5')}}">
                    <h2 class="post-title">{{$articulo5->titulo}}</h2>
                    <h3 class="post-subtitle">{{$articulo5->subtitulo}}</h3>
                </a>
                <p class="post-meta">
                    Posteado por
                    <a href="{{route('about')}}">{{$articulo5->autor}}</a>
                    en {{$articulo5->fecha}}
                </p>
            </div>
            <!-- Divider-->
            <hr class="my-4" />
            <!-- Post preview-->
            <div class="post-preview">
                <a href="{{route('posteo6')}}">
                    <h2 class="post-title">{{$articulo6->titulo}}</h2>
                    <h3 class="post-subtitle">{{$articulo6->subtitulo}}</h3>
                </a>
                <p class="post-meta">
                    Posteado por
                    <a href="{{route('about')}}">{{$articulo6->autor}}</a>
                    en {{$articulo6->fecha}}
                </p>
            </div>
            <!-- Divider-->
            <hr class="my-4" />
            <!-- Post preview-->
            <div class="post-preview">
                <a href="{{route('posteo7')}}">
                    <h2 class="post-title">{{$articulo7->titulo}}</h2>
                    <h3 class="post-subtitle">{{$articulo7->subtitulo}}</h3>
                </a>
                <p class="post-meta">
                    Posteado por
                    <a href="{{route('about')}}">{{$articulo7->autor}}</a>
                    en {{$articulo7->fecha}}
                </p>
            </div>
            <!-- Divider-->
            <hr class="my-4" />
            <!-- Post preview--><div class="post-preview">
                <a href="{{route('posteo8')}}">
                    <h2 class="post-title">{{$articulo8->titulo}}</h2>
                    <h3 class="post-subtitle">{{$articulo8->subtitulo}}</h3>
                </a>
                <p class="post-meta">
                    Posteado por
                    <a href="{{route('about')}}">{{$articulo8->autor}}</a>
                    en {{$articulo8->fecha}}
                </p>
            </div>
            <!-- Divider-->
            <hr class="my-4" />
            <!-- Pager-->
            <div class="d-flex justify-content-start mb-4"><a class="btn btn-primary text-uppercase" href="{{route('index1')}}">🠔 Regresar</a></div>
        </div>
    </div>
</div>
@endsection