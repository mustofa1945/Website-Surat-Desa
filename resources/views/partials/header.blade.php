    <header
        class=" z-50 fixed w-full md:h-[3.5rem] top-0 bg-[#252A34] bg-opacity-50  shadow-lg flex md:flex-row flex-col md:justify-center md:px-2">
        <div class="flex w-full md:w-full  md:h-full h-[15%] items-center  md:px-0 px-5  justify-between">
            <!-- Judul Header -->
            <h1 class="text-white text-[15px] md:text-3xl font-semibold md:w-1/2 bg-opacity-100">Untuk Desa</h1>
            <img src="{{ asset('images/icons/menu.png') }}" alt=""
                class="icon-menu w-[15%] block bg-cover md:hidden h-full">
        </div>

        <!-- Menu Navigasi -->
        <nav
            class=" md:w-[65%] w-full  md:h-full h-[85%] hidden md:block flex justify-center items-center md:p-2  bg-opacity-50  menu">
            <ul
                class="flex flex-col md:flex-row md:space-x-8 md:items-center text-white font-medium w-full h-full md:gap-0 gap-y-3 md:justify-start justify-around md:px-0 px-5">
                <li><a href="{{ route('home') }}" class="hover:text-[#FF2E63]">Beranda</a></li>
                <li class="list md:hidden block">fitur
                    <div class="list-fitur hidden py-3  dark:text-gray-400 text-sm w-full">
                        <a href="{{ route('fitur.administrasi') }}"
                            class="block px-4 py-2  hover:text-[#FF2E63] dark:hover:bg-[#161d2a] text-[20px]"
                            role="menuitem">Administrasi Desa</a>
                        <a href="{{ route('fitur.pelayanan') }}"
                            class="block px-4 py-2 hover:text-[#FF2E63] dark:hover:bg-[#161d2a] text-[20px]"
                            role="menuitem">Pelayanan Desa</a>
                        <a href="{{ route('fitur.perpajakan') }}"
                            class="block px-4 py-2 hover:text-[#FF2E63] dark:hover:bg-[#161d2a] text-[20px]"
                            role="menuitem">Perpajakan (PBB-P2)</a>
                        <a href="{{ route('fitur.bantuan') }}"
                            class="block px-4 py-2 hover:text-[#FF2E63] dark:hover:bg-[#161d2a] text-[20px]"
                            role="menuitem">Bantuan Sosial</a>
                        <a href="{{ route('fitur.website') }}"
                            class="block px-4 py-2 hover:text-[#FF2E63] dark:hover:bg-[#161d2a] text-[20px]"
                            role="menuitem">Website Profil</a>
                        <a href="{{ route('fitur.digides') }}"
                            class="block px-4 py-2 hover:text-[#FF2E63] dark:hover:bg-[#161d2a] text-[20px]"
                            role="menuitem">DIGIES Mobile App</a>
                        <a href="{{ route('fitur.andi') }}"
                            class="block px-4 py-2 hover:text-[#FF2E63] dark:hover:bg-[#161d2a] text-[20px]"
                            role="menuitem">Andi Smart</a>
                        <a href="{{ route('fitur.absensi') }}"
                            class="block px-4 py-2 hover:text-[#FF2E63] dark:hover:bg-[#161d2a] text-[20px]"
                            role="menuitem">Absensi Smart</a>
                        <a href="{{ route('fitur.absensi-buku') }}"
                            class="block px-4 py-2 hover:text-[#FF2E63] dark:hover:bg-[#161d2a] text-[20px]"
                            role="menuitem">Absensi & Buku Tamu</a>
                        <a href="{{ route('fitur.siskeudes') }}"
                            class="block px-4 py-2 hover:text-[#FF2E63] dark:hover:bg-[#161d2a] text-[20px]"
                            role="menuitem">Siskeudes Online</a>
                        <a href="{{ route('fitur.webgis') }}"
                            class="block px-4 py-2 hover:text-[#FF2E63] dark:hover:bg-[#161d2a] text-[20px]"
                            role="menuitem">WebGIS DIGIDES</a>
                        <a href="{{ route('fitur.pendekar') }}"
                            class="block px-4 py-2 hover:text-[#FF2E63] dark:hover:bg-[#161d2a] text-[20px]"
                            role="menuitem">Pendekar</a>
                        <a href="{{ route('fitur.kios') }}"
                            class="block px-4 py-2 hover:text-[#FF2E63] dark:hover:bg-[#161d2a] text-[20px]"
                            role="menuitem">KIOS DIGIDES</a>
                    </div>
                </li>
                <li class="md:block hidden">@include('components.dropdown.dropdown')</li>
                <li><a href="{{ route('mitra') }}" class="hover:text-[#FF2E63]">Mitra</a></li>
                <li><a href="{{ route('artikel') }}" class="hover:text-[#FF2E63]">Artikel</a></li>
                <li><a href="{{ route('contact') }}" class="hover:text-[#FF2E63]">Kontak</a></li>
                <li class="list-setting md:hidden block">Setting
                    <div class="target-list-setting hidden py-3  dark:text-gray-400 text-sm w-full">
                        <a href="{{ route('fitur.administrasi') }}"
                            class="block px-4 py-2  hover:text-[#FF2E63] dark:hover:bg-[#161d2a] text-[20px]"
                            role="menuitem">Profile</a>
                        <a href="{{ route('fitur.pelayanan') }}"
                            class="block px-4 py-2 hover:text-[#FF2E63] dark:hover:bg-[#161d2a] text-[20px]"
                            role="menuitem">Logout</a>
                    </div>
                </li>
                @if(session('userId'))
                <li class="md:block hidden">@include('components.dropdown.dropdown-setting')</li>
                @endif
            </ul>
        </nav>

    </header>
