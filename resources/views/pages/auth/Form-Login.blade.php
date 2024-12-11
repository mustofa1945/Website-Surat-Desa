<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Pelayanan Desa</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-50">

    <div class="min-h-screen flex justify-center items-center">
        <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
            <div class="text-center mb-6">
                <h1 class="text-3xl font-bold text-blue-600">Pelayanan Desa</h1>
                <p class="text-gray-500">Masuk untuk mengakses sistem pelayanan desa</p>
            </div>

            <!-- Form Login -->
            <form action="{{ route('masuk-digides.store') }}" method="POST">
                @csrf
                <!-- Email -->
                <div class="mb-4">
                    @error('email')
                        <p class="text-red-500">{{ $message }}</p>
                    @enderror
                    @if (session('error'))
                    <p class="text-red-500">{{ session('error') }}</p>
                    @endif
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input type="email" id="email" name="email" value="{{ old('email') }}"
                        class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500">
                </div>

                <!-- Password -->
                <div class="mb-6">
                    @error('password')
                        <p class="text-red-500">{{ $message }}</p>
                    @enderror
                    <label for="password" class="block text-sm font-medium text-gray-700">Kata Sandi</label>
                    <input type="password" id="password" name="password" value="{{ old('password') }}"
                        class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500">
                </div>

                <!-- Submit Button -->
                <button type="submit"
                    class="w-full py-2 px-4 bg-blue-600 text-white font-semibold rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">
                    Masuk
                </button>
            </form>

            <!-- Footer / Link Forgot Password -->
            <div class="mt-4 text-center">
                <a href="{{ route('daftar-digides.index') }}" class="text-sm text-blue-600 hover:underline">Belum Punya Akun
                    ?</a>
            </div>
        </div>
    </div>

</body>

</html>
