@extends('layouts.app')

@section('content')
<div class="main_contents">
    <div class="main_banner"></div>
    <div class="container">
        <div class="label">
            <h2>current series</h2>
        </div>
        <div class="comics">
            <div class="row row-cols-6 g-4">
                @foreach($comics as $comic)
                <div class="col">
                    <img src="{{$comic['thumb']}}" alt="">
                    <p>{{$comic['series']}}</p>
                </div>
                @endforeach
            </div>
            <div class="load_btn">
                <a href="#" class="btn py-2 px-5">load more</a>
            </div>
        </div>
    </div>
    <div class="menu_panel">
        <div class="container d-flex justify-content-evenly align-items-center">
            <div class="mp digital_comics">
                <img src="{{Vite::asset('resources/images/buy-comics-digital-comics.png')}}" alt="">
                <a href="#">digital comics</a>
            </div>
            <div class="mp merchandise">
                <img src="{{Vite::asset('resources/images/buy-comics-merchandise.png')}}" alt="">
                <a href="#">dc merchandise</a>
            </div>
            <div class="mp subscription">
                <img src="{{Vite::asset('resources/images/buy-comics-subscriptions.png')}}" alt="">
                <a href="#">subscription</a>
            </div>
            <div class="mp shop_locator">
                <img src="{{Vite::asset('resources/images/buy-comics-shop-locator.png')}}" alt="">
                <a href="#">comic shop locator</a>
            </div>
            <div class="mp power_visa">
                <img src="{{Vite::asset('resources/images/buy-dc-power-visa.svg')}}" alt="">
                <a href="#">dc power visa</a>
            </div>
        </div>
    </div>
</div>

@endsection