    <header class=" z-50 fixed w-[27.2rem] md:w-full h-[3.5rem] top-0 bg-green-500 bg-opacity-50 p-4 shadow-lg flex justify-center">
        <div class="flex w-full items-center  justify-between">
            <!-- Judul Header -->
            <h1 class="text-white text-[15px] md:text-3xl font-semibold bg-opacity-100">Untuk Desa</h1>
            <!-- Menu Navigasi -->
            <nav class="hidden md:block">
                <ul class="flex flex-col md:flex-row md:space-x-8 items-center text-white font-medium">
                    <li><a href="{{ route("home") }}" class="hover:text-gray-300">Beranda</a></li>
                    <li>@include('components.dropdown.dropdown')</li>
                    <li><a href="{{ route("mitra") }}" class="hover:text-gray-300">Mitra</a></li>
                    <li><a href="{{ route("artikel") }}" class="hover:text-gray-300">Artikel</a></li>
                    <li><a href="{{ route("contact") }}" class="hover:text-gray-300">Kontak</a></li>
                </ul>
            </nav>

         <img src="{{ asset("images/icons/menu.png") }}" alt="" class="w-[15%] block bg-cover md:hidden h-full">
        </div>
    </header>

