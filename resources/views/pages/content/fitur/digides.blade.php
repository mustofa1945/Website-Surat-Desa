@extends('layouts.app')

@section('title', 'Digedes-Mobile-App')

@section('content')

<div class="mt-[100px]">
    @include('components.fitur.imageTextSectionRight', [
        'title' => 'Digides Mobile App',
        'text' => 'Aplikasi Warga Desa Seluruh Indonesia',
        'image' => asset('images/desa5.jpg'),
    ])
</div>
   
        {{-- fitur Umum --}}
        <div class="relative  w-full md:w-[70%]  flex flex-col  mt-[10rem] border-4 border-black px-2 md:mx-auto ">
            <h1 class="absolute left-[2vh] top-[-4vh] text-[40px] flex px-[1vh] bg-white h-[50px]">
                Fitur Umum
            </h1>

            {{-- Kolom Pertame --}}
            @include('components.fitur.featureTiersImageRight', [
                'title' => 'Kabar Desa',
                'text' => 'Dapatkan informasi terbaru dari seluruh penjuru dunia yang bermanfaat bagi warga desa di seluruh Indonesia. Temukan berbagai informasi acara, 
                                                           artikel, kesempatan seperti beasiswa dan lowongan pekerjaan, serta materi edukasi dari berbagai bidang.',
                'image' => asset('images/desa4.jpg'),
            ])
            {{-- Kolom Kedua --}}
            @include('components.fitur.featureTiersImageLeft', [
                'title' => 'E-Pasar',
                'text' => 'Melalui fitur E-Pasar, warga dapat memasarkan produk-produk dari desa mereka ke seluruh penjuru Indonesia. 
                                                   Fitur ini terintegrasi dengan WhatsApp, sehingga memudahkan komunikasi dengan calon pelanggan.',
                'image' => asset('images/desa4.jpg'),
            ])

            {{-- Kolom Kedua --}}
            @include('components.fitur.featureTiersImageRight', [
                'title' => 'Layanan Publik',
                'text' => 'Akses berbagai informasi layanan yang telah berkolaborasi dengan DIGIDES, termasuk pencarian informasi bantuan sosial (bansos), lokasi vaksinasi, dan pengecekan Daftar Pemilih Tetap (DPT). 
                                       Dengan Digides Mobile App, keterhubungan dan akses informasi bagi warga desa semakin mudah & praktis.',
                'image' => asset('images/desa4.jpg'),
            ])
        </div>

        {{-- fitur Premiun --}}
        <div class="relative  w-full md:w-[70%] flex flex-col  mt-[10rem] border-4 border-black px-2 md:mx-auto">
            <h1
                class="absolute left-[2vh] top-[-4vh] md:text-[40px] text-[25px] flex-row-reverse flex px-[1vh] bg-white h-[50px]">
                Fitur Premium
                <img src="{{ asset('images/icons/medal.png') }}" alt="" class="md:h-full bg-cover">
            </h1>

            {{-- Kolom Pertame --}}
            @include('components.fitur.featureTiersImageRight', [
                'title' => 'Layanan Jarak Jauh',
                'text' => 'Warga dapat melakukan permintaan surat-surat dan administrasi dalam genggaman, 
                                      menghadirkan pelayanan desa langsung ke rumah-rumah warga desa, dilengkapi juga pemantauan surat secara real time.',
                'image' => asset('images/desa4.jpg'),
                'icon' => asset('images/icons/star.png'),
            ])
            {{-- Kolom Kedua --}}
            @include('components.fitur.featureTiersImageLeft', [
                'title' => ' Notifikasi Pengumuman Desa',
                'text' => 'Tidak akan ada lagi keterlambatan dalam mendapatkan informasi tentang kegiatan desa karena sahabat desa akan menerima notifikasi 
                                        setiap kali ada berita baru yang dirilis oleh kantor desa.',
                'image' => asset('images/desa4.jpg'),
            ])

            {{-- Kolom Kedua --}}
            @include('components.fitur.featureTiersImageRight', [
                'title' => 'Personalisasi Tampilan',
                'text' =>
                    'Sahabat Desa akan merasakan pengalaman yang unik dengan akses ke fitur-fitur yang hanya tersedia bagi warga desa terdaftar, seperti:',
                'image' => asset('images/desa4.jpg'),
            ])
        </div>
    
@endsection
