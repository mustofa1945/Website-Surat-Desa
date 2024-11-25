@extends('layouts.app')

@section('title', ' Siskeudes ')

@section('content')
    <div class="w-full px-2 md:px-[10rem]">

<div class="mt-[100px]">
        @include('components.fitur.imageTextSectionRight', [
            'title' => 'Sistem Keuangan Desa Online',
            'text' =>
                'Siskeudes Online merupakan fitur sistem keuangan desa yang dapat mengoptimalkan pengelolaan keuangan dan pelaporan di tingkat desa.',
            'image' => asset('images/desa5.jpg'),
        ])
</div>

        <div class="grid  w-full  mt-[10rem]">
            <div class="w-full flex flex-col gap-y-[10vh]">
                <h2 class="text-2xl md:text-3xl font-bold place-self-center text-[#FF2E63]">Fitur Siskeudes Online</h2>
                {{-- Kolom Pertama --}}

                @include('components.fitur.imageTextSectionLeft', [
                    'title' => 'Dashboard Penggunaan Dana Desa',
                    'text' => 'Fitur dengan visualisasi data yang dapat memberikan anda informasi mengenai dana desa yang telah digunakan dari tahun ke tahun. Melalui fitur ini pula menjadikan 
                                         informasi dana desa lebih mudah dimengerti baik oleh pemerintah setempat maupun masyarakat sehingga dapat memberikan transparasi pengelolaan dana desa yang dapat membantu dalam pengambilan keputusan hingga pemantauan pembangunan',
                    'image' => asset('images/desa5.jpg'),
                ])


                {{-- Kolom Kedua --}}

                @include('components.fitur.imageTextSectionRight', [
                    'title' => 'Terintegrasi dengan sistem administrasi dan pelayanan desa',
                    'text' =>
                        'Selain visualisasi data, fitur siskeudes juga terintegrasi dengan sistem administrasi dan pelayanan desa. Hal ini akan meningkatkan efisiensi, transparansi, dan aksesibilitas dalam penyelenggaraan pemerintah serta pelayanan kepada masyarakat.',
                    'image' => asset('images/desa5.jpg'),
                ])

                {{-- Kolom Keempat --}}
                @include('components.fitur.imageTextSectionLeft', [
                    'title' => 'Otomasi laporan pada website profil',
                    'text' =>
                        'Melalui Siskeudes laporan dana desa dapat dibuat secara otomatis sehingga dapat meningkatkan efesiensi waktu serta menghindari kesalahan manusia serta memastikan konsistensi penyusunan dan hasil laporan.',
                    'image' => asset('images/desa5.jpg'),
                ])

            </div>
        </div>



    </div>

    <div class="w-full  md:px-0 px-5  md:mx-auto  flex flex-col justify-center items-center py-[15vh]">
        <h1 class="place-self-center md:text-[4rem] text-[#FF2E63] text-[2rem] ">Fitur Lainnya</h1>
        @include('components.slider.slider-fitur')
    </div>
@endsection
