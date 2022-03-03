{{-- exend del layout di default --}}
@extends('layouts.default')
{{-- section "ascolta lo yield di layout default e inserisce il contenuto desiderato" --}}
{{-- in questo caso che è una scritta sola la passo direttamente dentro le parentesi tonde --}}
@section('pageTitle','Home')

{{-- sezione principale --}}
@section('content')
<main>
    <div class="card-container container position-relative d-flex flex-wrap p-5">
        {{-- faccio un foreach di elementi presenti nel $data che viene passato nel route --}}
        @foreach ($data as $comic)
        <div class="card mt-5">
            <img src="{{$comic["thumb"]}}" alt="{{$comic["title"]}}">
            <div class="text-box mt-2">{{$comic["series"]}}</div>
        </div>
        @endforeach
        <div class="button-container d-flex justify-content-center mt-4 p-3">
            {{-- creo un bottone custom --}}
            <button>LOAD MORE</button>
        </div>
        {{-- banner c'è solo nell homepage --}}
        <div class="banner position-absolute">CURRENT SERIES</div>
    </div>
</main>
@endsection
@section('secondary')
<div class="container-blue">
    <ul class="d-flex justify-content-around align-items-center">
        <li class="d-flex align-items-center">
            <img src="{{ url('img/buy-comics-digital-comics.png') }}" alt="buy">
            <span>DIGITAL COMICS</span>
        </li>
        <li class="d-flex align-items-center">
            <img src="{{ url('img/buy-comics-merchandise.png') }}" alt="merchandise">
            <span>MERCHANDISE</span>
        </li>
        <li class="d-flex align-items-center">
            <img src="{{ url('img/buy-comics-subscriptions.png') }}" alt="subscriptions">
            <span>SUBSCRIPTIONS</span>
        </li>
        <li class="d-flex align-items-center">
            <img src="{{ url('img/buy-comics-shop-locator.png') }}" alt="shoplocator">
            <span>SHOP LOCATOR</span>
        </li>
        <li class="d-flex align-items-center">
            <img src="{{ url('img/buy-dc-power-visa.svg') }}" alt="visa">
            <span>DC POWER VISA</span>
        </li>
    </ul>
</div>
@endsection