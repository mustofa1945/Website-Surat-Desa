@extends('layouts.app')

@section('title', 'Bantuan Sosial')

@section('content')
    <div class="w-full px-2 md:px-[10rem]">
 
        <div class="mt-[100px]">
        @include('components.fitur.imageTextSectionRight', [
            'title' => 'Bantuan Sosial Desa',
            'text' => "Layanan khusus yang dirancang untuk menyimpan dan mengelola data penerima bantuan sosial dari pemerintah. Layanan ini memberikan kemudahan bagi desa untuk mengetahui siapa saja
                        yang telah menerima bantuan dan jenis bantuan yang telah diterima, baik secara individu maupun keluarga. Selain itu, desa juga dapat secara cepat & tepat mengetahui warga yang 
                        belum tersentuh bantuan.",
            'image' => asset('images/desa5.jpg'),
        ])
        </div>


        <div class="grid  w-full  mt-[10rem]">
            <div class="w-full flex flex-col gap-y-[10vh]">
                <h2 class="text-2xl md:text-3xl font-bold place-self-center">Fitur</h2>
                {{-- Kolom Kedua --}}

                @include('components.fitur.imageTextSectionLeft', [
                    'title' => 'Manajemen Bantuan Perkepala Keluarga',
                    'text' =>
                        'Fitur ini didesain untuk menampilkan daftar penerima bantuan sosial yang diwakili oleh kepala keluarga. Selain jenis bantuan yang diterima, fitur ini juga menyajikan data lengkap kepala keluarga,
                         termasuk nomor identifikasi dari Bantuan seperti ID BDT, ID DTKS dll.',
                    'image' => asset('images/desa5.jpg'),
                ])


                {{-- Kolom 3 --}}

                @include('components.fitur.imageTextSectionRight', [
                    'title' => 'Manajemen Bantuan Perindividu',
                    'text' => "Fitur ini dirancang untuk menampilkan daftar penerima bantuan secara perseorangan, memudahkan Anda dalam melakukan pendataan mandiri tentang siapa saja yang telah menerima bantuan social secara individu.",
                    'image' => asset('images/desa5.jpg'),
                ])

                {{-- Kolom 4 --}}
                @include('components.fitur.imageTextSectionLeft', [
                    'title' => 'Manajemen Perjenis Bantuan',
                    'text' =>
                        'Fitur ini memudahkan Anda untuk mengetahui status penerima bantuan tertentu. Anda dapat mengambil langkah tepat untuk memberikan solusi terkait kondisi lapangan sehingga dapat mempercepat penyaluran bantuan',
                    'image' => asset('images/desa5.jpg'),
                ])


                {{-- Kolom 5 --}}
                @include('components.fitur.imageTextSectionRight', [
                    'title' => 'Manajemen Jenis Bantuan',
                    'text' =>
                        'Fitur ini memudahkan Anda untuk mengkategorikan berbagai jenis bantuan yang ada dengan menambah atau menghapusnya secara mandiri. Anda hanya perlu mengisi nama bantuan, tahapan, jenis penerima bantuan hingga waktu berakhirnya penyaluran bantuan.',
                    'image' => asset('images/desa5.jpg'),
                ])
            </div>
        </div>



    </div>
@endsection
