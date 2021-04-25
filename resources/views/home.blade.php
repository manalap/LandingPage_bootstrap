@extends('layout')
@section('content')

<section class="header section-padding">
    <div class="background">&nbsp;</div>
        <div class="container">
            <div class="header-text">
                <h1>My webpage: Learning laravel</h1>
                <p>Fastest way to make web applicaation</p>
            </div>
        </div>

</section>

<div class="container">
    <section class="section-padding">

        <div class="jumbotron text-center">
            <h1><span class="grey">WELCOME TO</span> OUR HOME!</h1>
            <p>Wanna learn Laravel? You find the better way.</p>
        </div>
    </section>

</div>

<div class="container">
<section>
<div class="jumbotron text-center">
    <div class="row">
        <div class="showcase-box col-md-4">
            <div class="showcase-item">
            <img src="{{asset("img/icon1.png")}}">
            <p>The most comprehensive book.</p>
            </div>
        </div>
        <div class="showcase-box col-md-4">
            <div class="showcase-item">
            <img src="{{asset("img/icon2.png")}}">
            <p>Building many web application.</p>
            </div>
        </div>
        <div class="showcase-box col-md-4">
            <div class="showcase-item">
            <img src="{{asset("img/icon3.png")}}">
            <p>It is a great community.</p>
            </div>
        </div>
    </div>

</div>
</section>
</div>

@endsection
