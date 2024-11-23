@extends('layouts.app')

@section('title', 'Andi-smart')

@section('content')

<div class="mt-[100px]">

@include('components.fitur.imageTextSectionRight', [
    'title' => 'Mengurus Surat Sangat Mudah dengan Andi Smart',
    'text' => "Anjungan Digital Mandiri (Andi Smart) sebuah inovasi dari DIGIDES membantu warga untuk mengurus persuratan dan administrasi secara mandiri (self service). Dilengkapi dengan tampilan friendly dan menarik. 
               Terintegrasi langsung dengan DIGIDES Mobile App. Beberapa fitur andi smart yang dapat dimanfaatkan oleh warga dan staff desa diantaranya:",
    'image' => asset('images/desa5.jpg'),
])
</div>


        {{-- fitur Umum --}}
        <div class="relative  w-full md:w-[70%] mx-auto  flex flex-col md:gap-y-[10vh] gap-y-[7vh] mt-[10rem] border-4 border-black py-[5rem]">
            <h1 class="absolute left-[2vh] top-[-4vh] text-[40px] flex px-[1vh] bg-white h-[50px]">
                Fitur Utama
            </h1>

            {{-- Kolom Pertame --}}
            @include('components.fitur.imageTextSectionLeft', [
                'title' => 'Buat Surat Mandiri',
                'text' => 'Fitur ini berguna bagi warga yang datang ke kantor desa untuk membuat surat, warga dapat mengisi form yang disediakan oleh ANDI SMART dan 
                                       dapat langsung mencetak surat yang diinginkan.',
                'image' => asset('images/desa4.jpg'),
            ])
            {{-- Kolom Kedua --}}
            @include('components.fitur.imageTextSectionRight', [
                'title' => 'Cetak dari Mobile App',
                'text' => 'Fitur ini sangat praktis bagi warga yang ingin meminta surat jarak jauh, cukup dengan menggunakan aplikasi DIGIDES, lakukan request,
                                       mengisi form dan dapatkan kode surat yang nantinya akan dimasukkan ke Andi Smart untuk langsung mencetak surat yang telah di request..',
                'image' => asset('images/desa4.jpg'),
            ])
        </div>

        {{-- fitur Untuk Warga --}}
        <div class="relative  md:w-[70%] mx-auto   w-full flex flex-col md:gap-y-[10vh] gap-y-[7vh] mt-[10rem] border-4 border-black px-2 py-[5rem]">
            <h1
                class="absolute left-[2vh] top-[-4vh] md:text-[40px] text-[25px] flex-row-reverse flex px-[1vh] bg-white h-[50px]">
                Fitur untuk Pengguna / Warga
                <img src="{{ asset('images/icons/medal.png') }}" alt="" class="md:h-full bg-cover">
            </h1>

            {{-- Kolom Pertame --}}
            @include('components.fitur.ImageTextSectionRight', [
                'title' => 'Fitur Standby',
                'text' => 'Warga dapat melakukan permintaan surat-surat dan administrasi dalam genggaman, 
                                      menghadirkan pelayanan desa langsung ke rumah-rumah warga desa, dilengkapi juga pemantauan surat secara real time.',
                'image' => asset('images/desa4.jpg'),
            ])
            {{-- Kolom Kedua --}}
            @include('components.fitur.imageTextSectionLeft', [
                'title' => 'Fitur Pengenalan User',
                'text' => 'Tidak akan ada lagi keterlambatan dalam mendapatkan informasi tentang kegiatan desa karena sahabat desa akan menerima notifikasi 
                                        setiap kali ada berita baru yang dirilis oleh kantor desa.',
                'image' => asset('images/desa4.jpg'),
            ])

            {{-- Kolom Kedua --}}
            @include('components.fitur.ImageTextSectionRight', [
                'title' => 'Akses tidak Terbatas',
                'text' =>
                    'Sahabat Desa akan merasakan pengalaman yang unik dengan akses ke fitur-fitur yang hanya tersedia bagi warga desa terdaftar, seperti:',
                'image' => asset('images/desa4.jpg'),
            ])

            @include('components.fitur.imageTextSectionLeft', [
                'title' => 'Kritik dan Saranr',
                'text' =>
                    'Warga dapat dengan mudah menyalurkan umpan balik langsung kepada pemerintah desa melalui Andi Smart.',
                'image' => asset('images/desa4.jpg'),
            ])
        </div>
         {{-- Fitur Admin --}}
        <div class="relative  md:w-[70%] mx-auto  w-full flex flex-col md:gap-y-[10vh] gap-y-[7vh] mt-[10rem] border-4 border-black px-2 py-[5rem]">
            <h1
                class="absolute left-[2vh] top-[-4vh] md:text-[40px] text-[25px] flex-row-reverse flex px-[1vh] bg-white h-[50px]">
                Fitur untuk Pengguna / Warga
                <img src="{{ asset('images/icons/medal.png') }}" alt="" class="md:h-full bg-cover">
            </h1>

            {{-- Kolom Kedua --}}
            @include('components.fitur.imageTextSectionLeft', [
                'title' => 'Dashboard',
                'text' => 'Dashboard memberikan pandangan cepat dan terperinci tentang aktivitas pengguna Andi Smart.',
                'image' => asset('images/desa4.jpg'),
            ])

            {{-- Kolom Kedua --}}
            @include('components.fitur.ImageTextSectionRight', [
                'title' => 'Pengaturan Tampilan',
                'text' =>
                    'Sahabat Desa akan merasakan pengalaman yang unik dengan akses ke fitur-fitur yang hanya tersedia bagi warga desa terdaftar, seperti:',
                'image' => asset('images/desa4.jpg'),
            ])

            @include('components.fitur.imageTextSectionLeft', [
                'title' => 'Manajemen Fitur Tambahan',
                'text' =>
                    'Warga dapat dengan mudah menyalurkan umpan balik langsung kepada pemerintah desa melalui Andi Smart.',
                'image' => asset('images/desa4.jpg'),
            ])
        </div>
@endsection
