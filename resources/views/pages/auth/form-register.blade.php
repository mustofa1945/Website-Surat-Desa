<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi DIGIDES</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-[#EAEAEA] flex justify-center items-center min-h-screen">

    <div class="bg-white shadow-md rounded-lg p-6 w-full max-w-lg">
        @if (session('success'))
            <div class="alert text-green-500 alert-success">
                {{ session('success') }}
            </div>
        @endif
        <h1 class="text-green-700 text-xl font-bold mb-4">Registrasi DIGIDES Gratis</h1>
        <form action="{{ route('daftar-digides.create') }}" method='get' class="flex flex-wrap gap-4">
            @csrf
            <!-- Nama Lengkap -->
            <div class="w-full">
                {{-- Error Message --}}
                @error('username')
                    <p class="text-red-500">{{ $message }}</p>
                @enderror
                <label for="nama" class="block text-sm font-medium text-gray-700">Nama Lengkap</label>
                <input type="text" id="nama" placeholder="Isi nama lengkap Anda"
                    class="mt-1 block w-full p-2 border rounded-lg shadow-sm focus:ring-green-500 focus:border-green-500"
                    name='username' value="{{ old('username') }}" />
            </div>
            <!-- Email -->
            <div class="w-full">
                {{-- Error Message --}}
                @error('email')
                    <p class="text-red-500">{{ $message }}</p>
                @enderror
                <label for="email" class="block text-sm font-medium text-gray-700">email</label>
                <input type="email" id="email" placeholder="Isi nama lengkap Anda"
                    class="mt-1 block w-full p-2 border rounded-lg shadow-sm focus:ring-green-500 focus:border-green-500"
                    name='email' value="{{ old('email') }}" />
            </div>
            <!-- Password -->
            <div class="w-full">
                {{-- Error Message --}}
                @error('password')
                    <p class="text-red-500">{{ $message }}</p>
                @enderror
                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                <input type="Password" id="password" placeholder="Isi nama lengkap Anda"
                    class="mt-1 block w-full p-2 border rounded-lg shadow-sm focus:ring-green-500 focus:border-green-500"
                    name='password' value="{{ old('password') }}" />
            </div>
            <!-- Nomor Telepon -->
            <div class="w-full">
                {{-- Error Message --}}
                @error('phone_number')
                    <p class="text-red-500">{{ $message }}</p>
                @enderror
                @if (session('error'))
                    <p class="text-red-500">{{ $error }}</p>
                @endif
                <label for="telepon" class="block text-sm font-medium text-gray-700">Nomor Telepon</label>
                <input type="text" id="telepon" placeholder="Isi nomor telepon/HP Anda"
                    class="mt-1 block w-full p-2 border rounded-lg shadow-sm focus:ring-green-500 focus:border-green-500"
                    name='phone_number' value="{{ old('phone_number') }}" />
            </div>
            <!-- Asal Desa/Instansi -->
            <div class="w-full">
                @error('address')
                    <p class="text-red-500">{{ $message }}</p>
                @enderror
                <label for="asal" class="block text-sm font-medium text-gray-700">Asal Desa/Instansi</label>
                <input type="text" id="asal" placeholder="Isi nama desa/instansi lengkap Anda"
                    class="mt-1 block w-full p-2 border rounded-lg shadow-sm focus:ring-green-500 focus:border-green-500"
                    name='address' value="{{ old('address') }}"/>
            </div>
            <!-- Jabatan di Desa -->
            
            <div class="mb-2">
                @error('jabatan')
                    <p class="text-red-500">{{ $message }}</p>
                @enderror
            <label for="jabatan" class="text-[17px] font-medium text-gray-700">Jabatan di Desa</label>
                <select name="jabatan" id="jabatan" class='mb-2'>
                    <option value="ketua_desa">Ketua Desa</option>
                    <option value="warga">Warga</option>
                    <option value="wakil_desa">Wakil Desa</option>
                    <option value="bendahara">Bendahara</option>
                </select>
            </div>
            <!-- Checkbox -->
            <div class="flex items-center w-full">
                <input type="checkbox" id="panduan"
                    class="h-4 w-4 text-green-600 focus:ring-green-500 border-gray-300 rounded" name='panduan' />
                <label for="panduan" class="ml-2 block text-sm text-gray-700">
                    Saya sudah mempelajari panduan ini
                </label>
            </div>
            <!-- Tombol Register -->
            <div class="w-full">
                <button type="submit"
                    class="w-full bg-green-600 text-white py-2 px-4 rounded-lg hover:bg-green-700 focus:ring-4 focus:ring-green-500 focus:ring-opacity-50">
                    Register
                </button>
            </div>
        </form>
        <div class="mt-4 text-center">
            <a href="{{ route('masuk-digides.index') }}" class="text-sm text-blue-600 hover:underline">Sudah Punya Akun
                ?</a>
        </div>
    </div>
</body>

</html>
