@extends('layouts.app')

@section('title', 'Siskeudes')

@section('content')


    @include('components.fitur.imageTextSection', [
        'judul' => 'Sistem Keuangan Desa Online',
        'paragraf' => "Siskeudes Online merupakan fitur sistem keuangan desa yang dapat mengoptimalkan pengelolaan
                        keuangan dan pelaporan di tingkat desa",
        'button' => 'Selengkapnya',
        'image' => 'https://via.placeholder.com/400',
        'imageRight' => true,
    ])

    @include('components.fitur.imageTextSection', [
        'fitur' => 'Fitur Siskeudes Online',
        'judul' => 'Dashboard Penggunaan Dana Desa',
        'paragraf' =>
           'Fitur dengan visualisasi data yang dapat memberikan anda informasi mengenai dana desa yang telah digunakan dari tahun ke tahun.
            Melalui fitur ini pula menjadikan informasi dana desa lebih mudah dimengerti baik oleh pemerintah setempat maupun masyarakat sehingga 
            dapat memberikan transparasi pengelolaan dana desa yang dapat membantu dalam pengambilan keputusan hingga pemantauan pembangunan',
        'image' => 'https://via.placeholder.com/400',
        'imageLeft' => true,
    ])

    @include('components.fitur.imageTextSection', [
        'judul' => 'Terintegrasi dengan sistem administrasi dan pelayanan desa',
        'paragraf' =>
            'Selain visualisasi data, fitur siskeudes juga terintegrasi dengan sistem administrasi dan pelayanan desa. Hal ini akan meningkatkan efisiensi, transparansi, dan aksesibilitas dalam penyelenggaraan pemerintah serta pelayanan kepada masyarakat.
            Terintegrasi dengan sistem administrasi dan pelayanan desa',
        'image' => 'https://via.placeholder.com/400',
        'imageRight' => true,
    ])

    @include('components.fitur.imageTextSection', [
        'judul' => 'Otomasi laporan pada website profil',
        'paragraf' =>
            'Melalui Siskeudes laporan dana desa dapat dibuat secara otomatis sehingga dapat meningkatkan efesiensi waktu serta menghindari kesalahan manusia serta memastikan konsistensi penyusunan dan hasil laporan.',
        'image' => 'https://via.placeholder.com/400',
        'imageLeft' => true,
    ])



    <div class="w-[90%] mx-auto">
        @include('components.slider.slider')
    </div>
@endsection
