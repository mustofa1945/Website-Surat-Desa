@extends('layouts.app')

@section('title', 'Perpajakan')

@section('content')

  
  @include('components.fitur.imageTextSection' ,[
    "judul" => "perpajakan",
    "paragraf" => "Fitur Perpajakan adalah layanan khusus untuk memudahkan dalam 
                  pencatatan pajak, pelaporan pembayaran pajak PBB-P2, dan penelusuran 
                  peta wajib pajak, disertai sistem cerdas menghitung denda wajib pajak.",
    "image" => "https://via.placeholder.com/400",
    "imageRight" => true
    ])     
  
  @include('components.fitur.imageTextSection' ,[
    "fitur" => "Fitur",
    "judul" => "Beranda",
    "paragraf" => "Peta Visualisasi Pajak akan memudahkan perangkat desa mendeteksi
                   wilayah wajib pajak dan dapat meminimalisir potensi sengketa tanah.",
    "image" => "https://via.placeholder.com/400",
    "imageLeft" => true
    ])     

@include('components.fitur.imageTextSection' ,[
    "judul" => "DHKP",
    "paragraf" => "Fitur DHKP (Daftar Himpunan Ketetapan Pajak & Pembayaran) memungkinkan Anda 
                   untuk melihat letak objek pajak, nama wajib pajak, dan jumlah pembayaran pajak
                    yang terutang di desa Anda. Dengan fitur ini, Anda dapat dengan mudah memantau
                     status pembayaran pajak dan mengelola data pajak secara efisien.",
    "image" => "https://via.placeholder.com/400",
    "imageRight" => true
    ])  

@include('components.fitur.imageTextSection' ,[
    "judul" => "Penerimaan PBB-P2",
    "paragraf" => "Pada menu ini disajikan jumlah pembayaran PBB dan denda yang mesti dibayar oleh 
                   wajib pajak dan dapat rekap kemudian dicetak.",
    "image" => "https://via.placeholder.com/400",
    "imageLeft" => true
    ])     

  

@include('components.fitur.imageTextSection' ,[
    "judul" => "Laporan Mingguan PBB-P2",
    "paragraf" => "Membantu para kolektor pajak untuk laporan tahunan atau laporan penerimaan PBB-P2 desa.",
    "image" => "https://via.placeholder.com/400",
    "imageRight" => true
    ])  
     
      
    <div class="w-[90%] mx-auto">
        @include('components.slider.slider')
    </div>
@endsection