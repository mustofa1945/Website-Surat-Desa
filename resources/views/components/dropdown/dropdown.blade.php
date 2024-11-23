<!-- component -->
<div class="flex items-center justify-center">
    <div x-data="{ open: false }" class="relative inline-block text-left">
        <button @click="open = !open"
            class="inline-flex justify-center w-full px-4 py-2 text-sm font-medium text-gray-700  border border-gray-300 rounded-md shadow-sm ">
            Menu <svg class="h-5 w-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
            </svg>
        </button>
        <div x-show="open" @click.away="open = false"
            class="origin-top-left absolute left-0 mt-2 w-56 rounded-md shadow-lg text-black bg-white ring-1 ring-black ring-opacity-5 px-2  w-[50vh]">
            <a href="{{ route('fitur.administrasi') }}"
                class="block px-4 py-2  hover:bg-gray-100 dark:hover:bg-[#161d2a] text-[20px]"
                role="menuitem">Administrasi Desa</a>
            <a href="{{ route('fitur.pelayanan') }}"
                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-[#161d2a] text-[20px]" role="menuitem">Pelayanan
                Desa</a>
            <a href="{{ route('fitur.perpajakan') }}"
                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-[#161d2a] text-[20px]" role="menuitem">Perpajakan
                (PBB-P2)</a>
            <a href="{{ route('fitur.bantuan') }}"
                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-[#161d2a] text-[20px]" role="menuitem">Bantuan
                Sosial</a>
            <a href="{{ route('fitur.website') }}"
                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-[#161d2a] text-[20px]" role="menuitem">Website
                Profil</a>
            <a href="{{ route('fitur.digides') }}"
                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-[#161d2a] text-[20px]" role="menuitem">DIGIES
                Mobile App</a>
            <a href="{{ route('fitur.andi') }}"
                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-[#161d2a] text-[20px]" role="menuitem">Andi
                Smart</a>
            <a href="{{ route('fitur.absensi') }}"
                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-[#161d2a] text-[20px]" role="menuitem">Absensi
                Smart</a>
            <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-[#161d2a] text-[20px]"
                role="menuitem">Absensi & Buku Tamu</a>
            <a href="{{ route('fitur.siskeudes') }}"
                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-[#161d2a] text-[20px]" role="menuitem">Siskeudes
                Online</a>
            <a href="{{ route('fitur.webgis') }}"
                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-[#161d2a] text-[20px]" role="menuitem">WebGIS
                DIGIDES</a>
            <a href="{{ route('fitur.pendekar') }}"
                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-[#161d2a] text-[20px]"
                role="menuitem">Pendekar</a>
            <a href="{{ route('fitur.kios') }}"
                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-[#161d2a] text-[20px]" role="menuitem">KIOS
                DIGIDES</a>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>
