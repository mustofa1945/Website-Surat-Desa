@extends('layouts.app')

@section('title', 'Digedes Mobile App')

@section('content')

@include('components.fitur.imageTextSection' , [
    "judul" => "Digides Mobile App",
    "paragraf" => "Aplikasi Warga Desa Seluruh Indonesia",
    "image" => "https://via.placeholder.com/400",
    "imageRight" => true
])

@include("components.fitur.featureTiers" , [
    "tiers" => "Fitur Umum"
])

@include("components.fitur.featureTiers" , [
    "tiers" => "Fitur Premium"
])

<div class="w-[90%] mx-auto">
    @include('components.slider.slider')
</div>

@endsection