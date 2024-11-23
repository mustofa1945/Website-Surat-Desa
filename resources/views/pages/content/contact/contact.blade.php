@extends('layouts.app')

@section('title', 'contact')

@section('content')

    <div class="flex flex-col w-[80%] mt-[150px] mx-auto p-2 bg-gray-100 rounded-lg shadow-lg space-y-6">
        <!-- Bagian Kontak Utama -->
        <div class="flex w-full flex-col items-center space-y-3">
            <!-- Gambar Profil Kontak -->
            <div class="flex items-center  h-[3.2rem] space-x-4 rounded-[10px] p-3 box-border  ">
                <img src="https://via.placeholder.com/100" alt="Profile Picture"
                    class="w-[35px] h-[35px] rounded-full shadow-md">
                <p class="text-lg font-semibold text-gray-800">Hubungi Kami</p>
            </div>

            <!-- Deskripsi atau Info Tambahan -->
            <p class="text-sm text-gray-600 text-center">Informasi singkat atau deskripsi tentang kontak ini. Anda bisa
                menambahkan posisi, jabatan, atau lainnya.</p>
        </div>

        <!-- Detail Kontak Lainnya -->
        <div class="flex w-full flex-wrap gap-4 border-2 border-black h-full md:justify-center md:items-center">
            <!-- Info Kontak, seperti Nomor Telepon atau Email -->
            <div class="flex flex-col space-y-3 md:w-1/4 w-full md:h-[20vh] md:justify-center items-center ">
                <div class="flex md: md:h-1/2 space-x-2 md:w-full md:self-start self-center  md:justify-center md:items-end">
                    <img src="https://via.placeholder.com/30" alt="Icon" class="w-6 h-6">
                    <h1 class="text-gray-700 md:text-[20px] text-[17px]">Office</h1>
                </div>
                <p class="md:text-[15px]  md:h-1/2 text-[14px]">
                    Ruko I Walk J/10 Ciputra Citraland,
                    Jl. Tun Abdul Razak Sulawesi Selatan,
                    Kode Pos 92114</p>
            </div>

            <!-- Alamat Kontak -->
            <div class="flex flex-col space-y-3 md:w-1/4 w-full  md:h-[20vh]">
                <div class="flex md:h-1/2 space-x-2 md:w-full md:self-start self-center md:justify-center md:items-end">
                    <img src="https://via.placeholder.com/30" alt="Icon" class="w-6 h-6">
                    <h1 class="text-gray-700 md:text-[20px] text-[17px]">Office</h1>

                </div>
                <p class="md:text-[15px]  md:h-1/2 text-[14px]">
                    Gedung Menara 165,
                    Jl. TB. SIMATUPANG kav.1
                    Cilandak Timur, Jakarta Selatan</p>
            </div>

            <div class="flex flex-col space-y-3 md:w-1/4 w-full h-full  md:h-[20vh]">
                <div class="md:h-full md: md:h-1/2 md:w-full md:pb-6  flex space-x-2 md:self-start self-center  md:justify-center md:items-end">
                    <img src="https://via.placeholder.com/30" alt="Icon" class="w-6 h-6">
                    <h1 class="text-gray-700 md:text-[20px] text-[17px]">Contact</h1>

                </div>
                <p class="md:text-[15px]  md:h-1/2 text-[14px]">
                    +62 811 444 8585
                    official@digitaldesa.id</p>
            </div>
        </div>
    </div>

@endsection
