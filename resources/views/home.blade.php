{{-- exend del layout di default --}}
@extends('layouts.default')
{{-- section "ascolta lo yield di layout default e inserisce il contenuto desiderato" --}}
{{-- in questo caso che è una scritta sola la passo direttamente dentro le parentesi tonde --}}
@section('pageTitle','Home')

@section('test')
<h1>Sto facendo un test</h1>
@endsection