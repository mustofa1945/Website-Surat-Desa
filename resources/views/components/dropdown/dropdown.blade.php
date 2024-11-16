<script src="//unpkg.com/alpinejs" defer></script>


<div class="dropdown relative inline-block text-left " x-data="{ open: false }">
    <button @click="open = !open"
        class="w-full text-white py-2 px-4 rounded inline-flex justify-between items-center dark:bg-[#20293A] dark:border-slate-700 dark:text-gray-400">
        <span>Fitur</span>

        <svg class="ml-1 h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
        </svg>
    </button>

    <div x-show="open" x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100"
        x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 scale-100"
        x-transition:leave-end="opacity-0 scale-95"
        class="absolute z-50 mt-2 w-[16rem] rounded-md   shadow-lg bg-white border border-gray-200 dark:bg-[#20293A] dark:border-slate-700">
        <div class="py-1 text-gray-700 dark:text-gray-400 text-sm w-full" role="menu" aria-orientation="vertical"
            aria-labelledby="options-menu">
            <a href="{{ route("fitur.administrasi") }}" class="block px-4 py-2  hover:bg-gray-100 dark:hover:bg-[#161d2a] text-[20px]"
                role="menuitem">Administrasi Desa</a>
            <a href="{{ route("fitur.pelayanan") }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-[#161d2a] text-[20px]"
                role="menuitem">Pelayanan Desa</a>
            <a href="{{ route("fitur.perpajakan") }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-[#161d2a] text-[20px]"
                role="menuitem">Perpajakan (PBB-P2)</a>
            <a href="{{ route("fitur.bantuan") }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-[#161d2a] text-[20px]"
                role="menuitem">Bantuan Sosial</a>
            <a href="{{ route("fitur.website") }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-[#161d2a] text-[20px]"
                role="menuitem">Website Profil</a>
            <a href="{{ route("fitur.digides") }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-[#161d2a] text-[20px]"
                role="menuitem">DIGIES Mobile App</a>
            <a href="{{ route("fitur.andi") }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-[#161d2a] text-[20px]"
                role="menuitem">Andi Smart</a>
            <a href="{{route("fitur.absensi")}}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-[#161d2a] text-[20px]"
                role="menuitem">Absensi Smart</a>
            <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-[#161d2a] text-[20px]"
                role="menuitem">Absensi & Buku Tamu</a>
            <a href="{{ route("fitur.siskeudes") }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-[#161d2a] text-[20px]"
                role="menuitem">Siskeudes Online</a>
            <a href="{{ route("fitur.webgis") }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-[#161d2a] text-[20px]"
                role="menuitem">WebGIS DIGIDES</a>
            <a href="{{ route("fitur.pendekar") }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-[#161d2a] text-[20px]"
                role="menuitem">Pendekar</a>
            <a href="{{ route("fitur.kios") }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-[#161d2a] text-[20px]"
                role="menuitem">KIOS DIGIDES</a>
        </div>
    </div>
