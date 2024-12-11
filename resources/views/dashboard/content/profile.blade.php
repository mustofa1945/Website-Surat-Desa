@extends('layouts.dashboard')

@section('title', 'Home Page')
@section('header', 'profile')

@section('content')

<div class="container mx-auto px-4 py-6">
    <!-- Header -->
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold text-gray-800">Profil Pengguna</h1>
        <button class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded" onclick="toggleEditProfile()">
            Edit Profil
        </button>
    </div>

    <!-- Tampilan Profil -->
    <div class="bg-white shadow-md rounded-lg p-6">
        <!-- Informasi Profil -->
        <div class="mb-4">
            <h2 class="text-xl font-semibold text-gray-700">Informasi Pribadi</h2>
            <div class="mt-2">
                <p><strong>Nama:</strong> <span id="profileNama">John Doe</span></p>
                <p><strong>Email:</strong> <span id="profileEmail">john.doe@example.com</span></p>
                <p><strong>Nomor Telepon:</strong> <span id="profileTelepon">08123456789</span></p>
                <p><strong>Alamat:</strong> <span id="profileAlamat">Jl. Merdeka No. 123</span></p>
            </div>
        </div>
    </div>

    <!-- Form Edit Profil -->
    <div id="editProfileForm" class="bg-white shadow-md rounded-lg p-6 ">
        <h2 class="text-xl font-semibold text-gray-700 mb-4">Edit Profil</h2>
        <form>
            <div class="mb-4">
                <label for="editNama" class="block text-gray-700 font-medium mb-2">Nama</label>
                <input type="text" id="editNama" class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500" value="John Doe">
            </div>
            <div class="mb-4">
                <label for="editEmail" class="block text-gray-700 font-medium mb-2">Email</label>
                <input type="email" id="editEmail" class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500" value="john.doe@example.com">
            </div>
            <div class="mb-4">
                <label for="editTelepon" class="block text-gray-700 font-medium mb-2">Nomor Telepon</label>
                <input type="text" id="editTelepon" class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500" value="08123456789">
            </div>
            <div class="mb-4">
                <label for="editAlamat" class="block text-gray-700 font-medium mb-2">Alamat</label>
                <textarea id="editAlamat" class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500">Jl. Merdeka No. 123</textarea>
            </div>
            <div class="flex justify-end space-x-2">
                <button type="button" class="bg-gray-500 hover:bg-gray-600 text-white font-semibold py-2 px-4 rounded" onclick="toggleEditProfile()">Batal</button>
                <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded">Simpan</button>
            </div>
        </form>
    </div>
</div>

@endsection