@extends('layouts.dashboard')

@section('title', 'Home Page')
@section('header', 'Notifications')

@section('content')
<div class="container mx-auto px-4 py-6">
    <!-- Header -->
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold text-gray-800">Notifikasi Permintaan Izin Tempat</h1>
    </div>

    <!-- Tabel Notifikasi -->
    <div class="overflow-x-auto bg-white shadow-md rounded-lg">
        <table class="min-w-full bg-white">
            <!-- Header Tabel -->
            <thead>
                <tr>
                    <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-sm font-medium text-gray-600 uppercase">ID</th>
                    <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-sm font-medium text-gray-600 uppercase">Nama</th>
                    <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-sm font-medium text-gray-600 uppercase">Keperluan</th>
                    <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-sm font-medium text-gray-600 uppercase">Tanggal</th>
                    <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-center text-sm font-medium text-gray-600 uppercase">Aksi</th>
                </tr>
            </thead>
            <!-- Body Tabel -->
            <tbody>
                <!-- Contoh Data -->
                <tr>
                    <td class="px-6 py-4 border-b border-gray-200 text-sm text-gray-700">1</td>
                    <td class="px-6 py-4 border-b border-gray-200 text-sm text-gray-700">John Doe</td>
                    <td class="px-6 py-4 border-b border-gray-200 text-sm text-gray-700">Pesta Pernikahan</td>
                    <td class="px-6 py-4 border-b border-gray-200 text-sm text-gray-700">2024-11-25</td>
                    <td class="px-6 py-4 border-b border-gray-200 text-center space-x-2">
                        <button class="bg-green-500 trigger-accept hover:bg-green-600 text-white font-semibold py-1 px-3 rounded">Terima</button>
                        <button class="bg-red-500 trigger-denied hover:bg-red-600 text-white font-semibold py-1 px-3 rounded">Tolak</button>
                        <button class="bg-blue-500 trigger-see hover:bg-blue-600 text-white font-semibold py-1 px-3 rounded">Lihat</button>
                    </td>
                </tr>
                <!-- Tambahkan Baris Lain -->
            </tbody>
        </table>
    </div>

  
    <div class=" fixed button-denied hidden top-0 left-0 w-full h-full">
        @include('components.button.popup-button', [
            'id' => 'addData',
            'text' => 'Menolak',
            'choise' => 'Tolak',
            'color' => 'red',
        ])
    </div>

    <div class=" fixed button-accept top-0 hidden left-0 w-full h-full">
        @include('components.button.popup-button', [
            'id' => 'addData',
            'text' => 'Menerima',
            'choise' => 'Terima',
            'color' => 'green',
        ])
    </div>

    <!-- Modal Detail -->
    <div  class="fixed flex  formDetail inset-0 bg-black bg-opacity-50 hidden  justify-center items-center">
        <div class="bg-white p-6 rounded-lg shadow-lg w-1/2">
            <h2 class="text-xl font-bold mb-4">Detail Permintaan</h2>
            <div class="space-y-4">
                <div>
                    <span class="font-medium text-gray-700">Nama:</span> <span id="detailNama">John Doe</span>
                </div>
                <div>
                    <span class="font-medium text-gray-700">Keperluan:</span> <span id="detailKeperluan">Pesta Pernikahan</span>
                </div>
                <div>
                    <span class="font-medium text-gray-700">Tanggal:</span> <span id="detailTanggal">2024-11-25</span>
                </div>
            </div>
            <div class="flex justify-end space-x-2 mt-4">
                <button class="bg-gray-500 close-popup hover:bg-gray-600 text-white font-semibold py-2 px-4 rounded">Tutup</button>
            </div>
        </div>
    </div>
</div>

@endsection