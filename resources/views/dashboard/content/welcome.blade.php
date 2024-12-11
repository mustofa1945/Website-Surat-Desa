@extends('layouts.dashboard')

@section('title', 'Home Page')
@section('header', 'Data-user')

{{-- @dd($user) --}}
@section('content')
    <nav class="space-y-2" id='dashboardData'>
        <div class="relative container mx-auto px-4 py-6">
            @if (session('success'))
                <p class="text-[17px] mb-[5px] text-green-600">{{ session('success') }}</p>
            @endif
            <div class="overflow-x-auto bg-white shadow-md rounded-lg">
                <table class="min-w-full bg-white">
                    <!-- Header -->
                    <thead>
                        <tr>
                            <th
                                class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-sm font-medium text-gray-600 uppercase">
                                ID</th>
                            <th
                                class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-sm font-medium text-gray-600 uppercase">
                                Nama</th>
                            <th
                                class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-sm font-medium text-gray-600 uppercase">
                                No Telepon</th>
                            <th
                                class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-sm font-medium text-gray-600 uppercase">
                                Email</th>
                            <th
                                class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-sm font-medium text-gray-600 uppercase">
                                Role</th>
                            <th
                                class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-center text-sm font-medium text-gray-600 uppercase">
                                Delete</th>
                            <th
                                class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-center text-sm font-medium text-gray-600 uppercase">
                                Edit</th>
                        </tr>
                    </thead>
                    <!-- Body -->
                    <tbody>
                        <!-- Contoh Data -->
                        @foreach ($user as $users)
                            <tr>
                                <td class="px-6 py-4 border-b border-gray-200 text-sm text-gray-700">{{ $users->id }}
                                </td>
                                <td class="px-6 py-4 border-b border-gray-200 text-sm text-gray-700">{{ $users->name }}
                                </td>
                                <td class="px-6 py-4 border-b border-gray-200 text-sm text-gray-700">
                                    {{ $users->phone_number }}</td>
                                <td class="px-6 py-4 border-b border-gray-200 text-sm text-gray-700">{{ $users->email }}
                                </td>
                                <td class="px-6 py-4 border-b border-gray-200 text-sm text-gray-700">
                                    {{ $users->role->role }}</td>
                                <td class="px-6 py-4 border-b border-gray-200 text-center">
                                    <button value={{ $users->id }}
                                        class="trigger-delete bg-red-500 hover:bg-red-600 text-white font-semibold py-1 px-3 rounded">
                                        Delete
                                    </button>
                                </td>
                                <td class="px-6 py-4 border-b border-gray-200 text-center">
                                    <button value={{ $users->id }}
                                        class=" trigger-edit bg-blue-500 hover:bg-blue-600 text-white font-semibold py-1 px-3 rounded">
                                        Edit
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>

        {{-- Delete --}}
        <div class="hidden fixed button-delete top-0 left-0 w-full h-full">
            @include('components.button.popup-button', [
                'id' => 'addData',
                'text' => 'Menghapus',
                'choise' => 'Hapus',
                'color' => 'red',
            ])
        </div>

        <div
            class="fixed form-edit inset-0 hidden flex flex-col justify-center items-center w-full h-full bg-black bg-opacity-50  justify-center items-center">
            <form action="{{ route('edit.data') }}" method='post'
                class="bg-white  flex flex-wrap w-[30%] rounded-md h-[90%] box-border py-[5vh] px-[3vh]">
                @csrf
                @method('put')
                <h2 class="w-full flex justify-center text-xl font-semibold text-gray-700">Edit Profil</h2>
                <div class="w-full">
                    @error('username')
                        <p class="text-red-500">{{ $message }}</p>
                    @enderror
                    <label for="editNama" class="block text-gray-700 text-[20px] font-medium mb-2">Nama :</label>
                    <input type="text" id="editNama" name='username'
                        class="w-full text-[17px] h-[40%] border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500" required>
                </div>
                <div class="w-full">
                    @error('phone_number')
                        <p class="text-red-500">{{ $message }}</p>
                    @enderror
                    <label for="editTelepon" class="block text-gray-700 text-[20px] font-medium mb-2">Nomor Telepon</label>
                    <input type="text" id="editTelepon" name='phone_number'
                        class="w-full text-[17px] h-[40%] border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500" required>
                </div>
                <div class="w-full">
                    @error('address')
                        <p class="text-red-500">{{ $message }}</p>
                    @enderror
                    <label for="editAlamat" class="block text-gray-700 text-[20px] font-medium mb-2">Alamat</label>
                    <textarea id="editAlamat" name='address'
                        class="w-full text-[17px] border-gray-300 h-[40%] rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500" required></textarea>
                </div>
                <div class="mb-2">
                    <label for="jabatan" class=" text-[20px] font-medium text-gray-700">Jabatan di Desa :</label>
                    <select name="jabatan" id="jabatan">
                        <option value="ketua_desa">Ketua Desa</option>
                        <option value="wakil_desa">Wakil Desa</option>
                        <option value="bendahara">Bendahara</option>
                        <option value="warga">Warga</option>
                    </select>                
                </div>
                <div class="flex justify-end space-x-2 w-full box-border w-full ">
                    <button type="button"
                        class="close-popup bg-gray-500 hover:bg-gray-600 text-white font-semibold py-2 px-4 w-[50%] h-[50%] rounded">Batal</button>
                    <button type="submit" name='id'
                        class="close-popup bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 w-[50%] h-[50%] rounded">Simpan</button>
                </div>
            </form>
        @endsection
