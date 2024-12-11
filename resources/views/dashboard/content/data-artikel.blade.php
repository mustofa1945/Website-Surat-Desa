@extends('layouts.dashboard')

@section('title', 'Home Page')
@section('header', 'Data-artikel')

@section('content')

    <div id='dashboardArtikel' class="container mx-auto px-4 py-6">
        <!-- Header -->
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold text-gray-800">Manajemen Artikel</h1>
            <button class="add-artikel bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded">
                + Tambah Artikel
            </button>
        </div>

        <!-- Tabel Artikel -->
        <div class="overflow-x-auto bg-white shadow-md rounded-lg">
            <table class="min-w-full bg-white">
                <thead>
                    <tr>
                        <th
                            class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-sm font-medium text-gray-600 uppercase">
                            ID</th>
                        <th
                            class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-sm font-medium text-gray-600 uppercase">
                            Judul</th>
                        <th
                            class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-sm font-medium text-gray-600 uppercase">
                            Penulis</th>
                        <th
                            class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-sm font-medium text-gray-600 uppercase">
                            Kategori</th>
                        <th
                            class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-sm font-medium text-gray-600 uppercase">
                            Tanggal</th>
                        <th
                            class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-center text-sm font-medium text-gray-600 uppercase">
                            Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Contoh Data -->
                    <tr>
                        <td class="px-6 py-4 border-b border-gray-200 text-sm text-gray-700">1</td>
                        <td class="px-6 py-4 border-b border-gray-200 text-sm text-gray-700">Judul Artikel 1</td>
                        <td class="px-6 py-4 border-b border-gray-200 text-sm text-gray-700">John Doe</td>
                        <td class="px-6 py-4 border-b border-gray-200 text-sm text-gray-700">Teknologi</td>
                        <td class="px-6 py-4 border-b border-gray-200 text-sm text-gray-700">2024-11-25</td>
                        <td class="px-6 py-4 border-b border-gray-200 text-center">
                            <button
                                class="trigger-edit bg-yellow-500 hover:bg-yellow-600 text-white font-semibold py-1 px-3 rounded">Edit</button>
                            <button
                                class="trigger-delete bg-red-500 hover:bg-red-600 text-white font-semibold py-1 px-3 rounded">Delete</button>
                        </td>
                    </tr>
                    <!-- Tambahkan Baris Dinamis -->
                </tbody>
            </table>
        </div>

        <div class="hidden fixed button-delete top-0 left-0 w-full h-full">
            @include('components.button.popup-button', [
                'id' => 'addData',
                'text' => 'Menghapus',
                'choise' => 'Hapus',
                'color' => 'red',
            ])
        </div>
        <!-- Form Tambah/Edit Artikel -->
        <div
            class="fixed formArtikel inset-0 hidden bg-black bg-opacity-50 flex justify-center items-center justify-center items-center">
            <div class="bg-white p-6 rounded-lg shadow-lg w-1/2">
                <h2 class="formh2 text-xl font-bold mb-4" id="formTitle">Tambah Artikel</h2>
                <form>
                    <div class="mb-4">
                        <label for="judul" class="block text-gray-700 font-medium text-[17px] mb-2">Judul Artikel</label>
                        <input type="text" id="judul"
                            class="pl-2 w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500">
                    </div>
                    <div class="mb-4">
                        <label for="konten" class="block text-gray-700 font-medium mb-2 text-[17px]">Konten</label>
                        <textarea id="konten" rows="5"
                            class="pl-2 w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500"></textarea>
                    </div>
                    <div class="mb-4">
                        <label for="penulis" class="block text-gray-700 font-medium mb-2 text-[17px]">Penulis</label>
                        <input type="text" id="penulis"
                            class=" pl-2 w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500">
                    </div>
                    <div class="mb-4">
                        <label for="kategori" class="block text-gray-700 font-medium mb-2 text-[17px]">Kategori</label>
                        <input type="text" id="kategori"
                            class="pl-2 w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500">
                    </div>
                    <div class="mb-4">
                        <label for="tanggal" class="block text-gray-700 font-medium mb-2 text-[17px]">Tanggal
                            Publikasi</label>
                        <input type="date" id="tanggal"
                            class="pl-2 w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500">
                    </div>
                    <div class="flex justify-end space-x-2">
                        <button type="button"
                            class="close-popup bg-gray-500 hover:bg-gray-600 text-white font-semibold py-2 px-4 rounded">Batal</button>
                        <button type="button"
                            class="close-popup bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
