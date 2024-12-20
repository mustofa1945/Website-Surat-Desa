@extends('layouts.app')

@section('title', 'Mitra')

@section('content')

    <div class="flex flex-col mx-auto w-[80%] space-y-6 mt-[100px] bg-white p-4 rounded-lg shadow-lg">
        <!-- Judul Utama -->
        <h1 class="place-self-center text-3xl font-bold  text-[#FF2E63]">MITRA DIGIDES</h1>
        <div class="flex w-full flex-wrap gap-3">

            <!-- Kontainer Kartu -->
            <div class="md:w-1/5 w-full flex flex-col space-y-4">
                <!-- Gambar Utama -->
                <div class="w-full flex justify-center">
                    <img src="{{ asset('images/desa7.jpg') }}" alt="Gambar Utama" class="w-full rounded-lg shadow-md">
                </div>

                <!-- Informasi Yayasan -->
                <div class="flex flex-col space-y-2 text-gray-700">
                    <h1 class="text-xl font-semibold">Yayasan Meira Visi Persada</h1>
                    <p class="text-sm text-gray-600">Alamat: Jalan Mawar No. 12, Jakarta</p>

                    <!-- Lokasi -->
                    <div class="flex items-center space-x-2 mt-2">
                        <img src="https://via.placeholder.com/50" alt="Peta" class="w-10 h-10 rounded-full shadow-sm">
                        <p class="text-sm font-medium">Jawa Tengah</p>
                    </div>
                </div>

            </div>

           <div class="md:w-1/5 w-full flex flex-col space-y-4">
                <!-- Gambar Utama -->
                <div class="w-full flex justify-center">
                    <img src="{{ asset('images/desa7.jpg') }}" alt="Gambar Utama" class="w-full rounded-lg shadow-md">
                </div>

                <!-- Informasi Yayasan -->
                <div class="flex flex-col space-y-2 text-gray-700">
                    <h1 class="text-xl font-semibold">Yayasan Meira Visi Persijaa</h1>
                    <p class="text-sm text-gray-600">Alamat: Jalan Mawar No. 12, Jakarta</p>

                    <!-- Lokasi -->
                    <div class="flex items-center space-x-2 mt-2">
                        <img src="https://via.placeholder.com/50" alt="Peta" class="w-10 h-10 rounded-full shadow-sm">
                        <p class="text-sm font-medium">Jawa Tengah</p>
                    </div>
                </div>

            </div>
        </div>
    </div>


@endsection
