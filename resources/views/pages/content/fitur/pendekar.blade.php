@extends('layouts.app')

@section('title', 'Pendekar')

@section('content')
    <div class="w-full px-2 md:px-[10rem]">

<div class="mt-[100px]">
        @include('components.fitur.imageTextSectionRight', [
            'title' => 'Pemantauan Desa dan Kelurahan Terintegrasi (PENDEKAR)',
            'text' =>
                'Pemantauan Desa dan Kelurahan Terintegrasi (Pendekar) merupakan sistem yang dibuat untuk memudahkan pemantauan dalam desa dan kelurahan. Dilengkapi dengan berbagai menu serta tampilan statistik, membuat pemantauan akan lebih optimal',
            'image' => asset('images/desa5.jpg'),
        ])
</div>

        <div class="grid  w-full  mt-[10rem]">
            <div class="w-full flex flex-col md:gap-y-[10vh]">
                <h2 class="text-2xl md:text-3xl font-bold place-self-center text-[#FF2E63]">Fitur PENDEKAR</h2>
                {{-- Kolom Pertama --}}

                @include('components.fitur.imageTextSectionLeft', [
                    'title' => 'Dashboard',
                    'text' =>
                        'Dapatkan fitur Dashboard yang menampilkan Beranda capaian & potensi setiap desa dan kelurahan, peta perkembangan desa berdasarkan data SDGs & IDM desa, Rekomendasi Pembangunan untuk pengembangan desa, data statistik potensi desa atau kelurahan baik dari segi SDM, SDA, dan sebagainya',
                    'image' => asset('images/desa5.jpg'),
                ])


                {{-- Kolom Kedua --}}

                @include('components.fitur.imageTextSectionRight', [
                    'title' => 'Administrasi',
                    'text' =>
                        'Pada menu ini anda dapat melihat data mengenai administrasi umum dan kependudukan, seperti buku peraturan desa, data, dan rekap kependudukan yang disajikan menggunakan tabel dan statistik sehingga akan memudahkan saat pengolahan data',
                    'image' => asset('images/desa5.jpg'),
                ])

                {{-- Kolom Ketiga --}}
                @include('components.fitur.imageTextSectionLeft', [
                    'title' => 'Pembangunan',
                    'text' =>
                        'Dilengkapi dengan tampilan GRAFIK, Nikmati kemudahan pemantauan APBDes dan Rencana Kerja Pembangunan (RKP) melalui Pendekar',
                    'image' => asset('images/desa5.jpg'),
                ])

                {{-- Kolom keempat --}}

                @include('components.fitur.imageTextSectionLeft', [
                    'title' => 'Potensi',
                    'text' =>
                        'Dengan PENDEKAR, dapatkan informasi akurat mengenai potensi desa anda melalui data UMKM, berita, dan Wisata. Bukan hanya dari desa anda melainkan informasi potensi dari wilayah disekitar desa anda.',
                    'image' => asset('images/desa5.jpg'),
                ])


                {{-- Kolom Kelima --}}

                @include('components.fitur.imageTextSectionRight', [
                    'title' => 'Profil Desa',
                    'text' =>
                        'Melalui sistem yang terintegrasi, selain dapat melihat setiap profil dari desa anda, anda juga dapat melihat profil desa lain',
                    'image' => asset('images/desa5.jpg'),
                ])

                {{-- Kolom Keempat --}}
                @include('components.fitur.imageTextSectionLeft', [
                    'title' => 'Bansos',
                    'text' =>
                        'Kini menyalurkan dan melihat semua rekapan bantuan sosial dari seluruh desa di sekitar anda menjadi lebih mudah menggunakan PENDEKAR',
                    'image' => asset('images/desa5.jpg'),
                ])XF
            </div>
        </div>



    </div>

    <div class="w-full  md:px-0 px-5  md:mx-auto  flex flex-col justify-center items-center py-[15vh]">
        <h1 class="place-self-center md:text-[4rem] text-[#FF2E63] text-[2rem] ">Fitur Lainnya</h1>
        @include('components.slider.slider-fitur')
    </div>
@endsection
