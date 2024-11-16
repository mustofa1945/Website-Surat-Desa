@extends('layouts.app')

@section('title', 'Bantuan')

@section('content')


    @include('components.fitur.imageTextSection', [
        'judul' => 'Bantuan Sosial',
        'paragraf' => "Layanan khusus yang dirancang untuk menyimpan dan mengelola data penerima bantuan sosial
                      dari pemerintah. Layanan ini memberikan kemudahan bagi desa untuk mengetahui siapa saja yang telah menerima
                      bantuan dan jenis bantuan yang telah diterima, baik secara individu maupun keluarga. Selain itu, desa juga dapat 
                      secara cepat & tepat mengetahui warga yang belum tersentuh bantuan.",
        'image' => 'https://via.placeholder.com/400',
        'imageRight' => true,
    ])

    @include('components.fitur.imageTextSection', [
        'fitur' => 'Fitur',
        'judul' => 'Manajemen Bantuan Perkepala Keluarga',
        'paragraf' => "Fitur ini didesain untuk menampilkan daftar penerima bantuan sosial yang diwakili oleh kepala keluarga. Selain jenis
                       bantuan yang diterima, fitur ini juga menyajikan data lengkap kepala keluarga, termasuk nomor identifikasi dari Bantuan seperti ID BDT, ID DTKS dll.",
        'image' => 'https://via.placeholder.com/400',
        'imageLeft' => true,
    ])

    @include('components.fitur.imageTextSection', [
        'judul' => 'Manajemen Bantuan Perindividu',
        'paragraf' => "Fitur ini dirancang untuk menampilkan daftar penerima bantuan secara perseorangan, memudahkan Anda dalam melakukan pendataan mandiri tentang siapa saja yang
                        telah menerima bantuan social secara individu.",
        'image' => 'https://via.placeholder.com/400',
        'imageRight' => true,
    ])

    @include('components.fitur.imageTextSection', [
        'judul' => 'Manajemen Perjenis Bantuan',
        'paragraf' => "Fitur ini memudahkan Anda untuk mengetahui status penerima bantuan tertentu. Anda dapat mengambil langkah tepat untuk memberikan solusi terkait kondisi lapangan 
                       sehingga dapat mempercepat penyaluran bantuan",
        'image' => 'https://via.placeholder.com/400',
        'imageLeft' => true,
    ])



    @include('components.fitur.imageTextSection', [
        'judul' => 'Manajemen Jenis Bantuan',
        'paragraf' => 'Fitur ini memudahkan Anda untuk mengkategorikan berbagai jenis bantuan yang ada dengan menambah atau menghapusnya secara mandiri. Anda hanya perlu mengisi nama bantuan, 
                       tahapan, jenis penerima bantuan hingga waktu berakhirnya penyaluran bantuan.',
        'image' => 'https://via.placeholder.com/400',
        'imageRight' => true,
    ])


    <div class="w-[90%] mx-auto">
        @include('components.slider.slider')
    </div>
@endsection
