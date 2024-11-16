@extends('layouts.app')
@section('title', 'Andi Smart')

@section('content')

    @include('components.fitur.imageTextSection', [
        'judul' => 'Mengurus Surat Sangat Mudah dengan Andi Smart',
        'paragraf' => "Anjungan Digital Mandiri (Andi Smart) sebuah inovasi dari DIGIDES membantu warga untuk mengurus persuratan dan administrasi secara mandiri (self service). Dilengkapi dengan tampilan friendly dan menarik. Terintegrasi langsung dengan DIGIDES Mobile App.
                       Beberapa fitur andi smart yang dapat dimanfaatkan oleh warga dan staff desa diantaranya:",
        'image' => 'https://via.placeholder.com/400',
        'imageRight' => true,
    ])

    @include('components.fitur.featureTiers', [
        'tiers' => 'Fitur Utama',
    ])

    @include('components.fitur.featureTiers', [
        'tiers' => 'Fitur Pengguna / Warga',
    ])

@include('components.fitur.featureTiers', [
    'tiers' => 'Fitur untuk Admin',
])

    <div class="w-[90%] mx-auto">
        @include('components.slider.slider')
    </div>

@endsection
