@extends('template.layaoutposteo')
@section('head')
{{$articulo1->titulo}}
@endsection
@section('header')
<header class="masthead" style="background-image: url('assets/img/portada1.jpg')">
    <div class="container position-relative px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <div class="post-heading">
                    <h1>{{$articulo1->titulo}}</h1>
                    <h2 class="subheading">{{$articulo1->subtitulo}}</h2>
                    <span class="meta">
                        Posteado por
                        <a href="{{route('about')}}">{{$articulo1->autor}}</a>
                        en {{$articulo1->fecha}}
                    </span>
                </div>
            </div>
        </div>
    </div>
</header>
@endsection
@section('contenido')
<article class="mb-4">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <h2 class="section-heading">{{$contenido1->titulo1}}</h2>
                <p class="text-justify">{{$contenido1->con1}}</p>
                <p class="text-justify">{{$contenido1->con2}}</p>
                <img class="img-fluid" src="assets/img/tema1-1.jpg" alt="..." style="width: 100%" />
                <h2 class="section-heading">{{$contenido1->titulo2}}</h2>
                <p class="text-justify">{{$contenido1->con3}}</p>
                <p class="text-justify">{{$contenido1->con4}}</p>
                <img class="img-fluid" src="assets/img/tema1-2.jpg" alt="..." style="width: 100%"/>
                <h2 class="section-heading">{{$contenido1->titulo3}}</h2>
                <p class="text-justify">{{$contenido1->con5}}</p>
                <p class="text-justify">{{$contenido1->con6}}</p>
                <img class="img-fluid" src="assets/img/tema1-3.jpg" alt="..." style="width: 100%"/>
                <h2 class="section-heading">{{$contenido1->titulo4}}</h2>
                <p class="text-justify">{{$contenido1->con7}}</p>
                <p class="text-justify">{{$contenido1->con8}}</p>
                <p class="text-justify">{{$contenido1->con9}}</p>
                <img class="img-fluid" src="assets/img/tema1-4.png" alt="..." style="width: 100%"/>
                <h2 class="section-heading">{{$contenido1->titulo5}}</h2>
                <p class="text-justify">{{$contenido1->con10}}</p>
                <p class="text-justify">{{$contenido1->con11}}</p>
                <img class="img-fluid" src="assets/img/tema1-5.jpg" alt="..." style="width: 100%"/>
                <h2 class="section-heading">{{$contenido1->titulo6}}</h2>
                <p class="text-justify">{{$contenido1->con12}}</p>
                <p class="text-justify">{{$contenido1->con13}}</p>
                <img class="img-fluid" src="assets/img/tema1-6.png" alt="..." style="width: 100%"/>
                <br>
                <div class="d-flex justify-content-end"><a class="btn btn-primary text-uppercase" href="{{route('posteo2')}}">Siguiente tema →</a></div>
            </div>
        </div>
    </div>
</article>
@endsection