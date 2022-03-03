{{-- exend del layout di default --}}
@extends('layouts.default')
{{-- section "ascolta lo yield di layout default e inserisce il contenuto desiderato" --}}
{{-- in questo caso che è una scritta sola la passo direttamente dentro le parentesi tonde --}}
@section('pageTitle','Home')

@section('content')
<main>
    <div class="card-container container position-relative d-flex flex-wrap p-5">
        @foreach ($data as $comic)
        <div class="card mt-5">
            <img src="{{$comic["thumb"]}}" alt="{{$comic["title"]}}">
            <div class="text-box mt-2">{{$comic["series"]}}</div>
        </div>
            
        @endforeach
    </div>
</main>
@endsection