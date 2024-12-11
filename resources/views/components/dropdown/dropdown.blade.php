<!-- component -->
<div class="flex items-center justify-center">
    <div x-data="{ open: false }" class="relative inline-block text-left">
        <button @click="open = !open"
            class="inline-flex justify-center w-full px-4 py-2 text-sm font-medium hover:text-[#FF2E63]   shadow-sm ">
            Menu
        </button>
        <div x-show="open" @click.away="open = false"
            class="origin-top-left absolute left-0 top-[4vh] mt-2 w-56 rounded-md shadow-lg text-white bg-[#252A34] ring-1 ring-black ring-opacity-5 px-2  w-[50vh]">
            <a href="{{ route('fitur.administrasi') }}"
                class="block px-4 py-2  hover:text-[#FF2E63] dark:hover:bg-[#161d2a] text-[20px]"
                role="menuitem">Administrasi Desa</a>
            <a href="{{ route('fitur.pelayanan') }}"
                class="block px-4 py-2 hover:text-[#FF2E63] dark:hover:bg-[#161d2a] text-[20px]" role="menuitem">Pelayanan
                Desa</a>
            <a href="{{ route('fitur.perpajakan') }}"
                class="block px-4 py-2 hover:text-[#FF2E63] dark:hover:bg-[#161d2a] text-[20px]" role="menuitem">Perpajakan
                (PBB-P2)</a>
            <a href="{{ route('fitur.bantuan') }}"
                class="block px-4 py-2 hover:text-[#FF2E63] dark:hover:bg-[#161d2a] text-[20px]" role="menuitem">Bantuan
                Sosial</a>
            <a href="{{ route('fitur.website') }}"
                class="block px-4 py-2 hover:text-[#FF2E63] dark:hover:bg-[#161d2a] text-[20px]" role="menuitem">Website
                Profil</a>
            <a href="{{ route('fitur.digides') }}"
                class="block px-4 py-2 hover:text-[#FF2E63] dark:hover:bg-[#161d2a] text-[20px]" role="menuitem">DIGIES
                Mobile App</a>
            <a href="{{ route('fitur.andi') }}"
                class="block px-4 py-2 hover:text-[#FF2E63] dark:hover:bg-[#161d2a] text-[20px]" role="menuitem">Andi
                Smart</a>
            <a href="{{ route('fitur.absensi') }}"
                class="block px-4 py-2 hover:text-[#FF2E63] dark:hover:bg-[#161d2a] text-[20px]" role="menuitem">Absensi
                Smart</a>
            <a href="{{ route('fitur.absensi-buku') }}" class="block px-4 py-2 hover:text-[#FF2E63] dark:hover:bg-[#161d2a] text-[20px]"
                role="menuitem">Absensi & Buku Tamu</a>
            <a href="{{ route('fitur.siskeudes') }}"
                class="block px-4 py-2 hover:text-[#FF2E63] dark:hover:bg-[#161d2a] text-[20px]" role="menuitem">Siskeudes
                Online</a>
            <a href="{{ route('fitur.webgis') }}"
                class="block px-4 py-2 hover:text-[#FF2E63] dark:hover:bg-[#161d2a] text-[20px]" role="menuitem">WebGIS
                DIGIDES</a>
            <a href="{{ route('fitur.pendekar') }}"
                class="block px-4 py-2 hover:text-[#FF2E63] dark:hover:bg-[#161d2a] text-[20px]"
                role="menuitem">Pendekar</a>
            <a href="{{ route('fitur.kios') }}"
                class="block px-4 py-2 hover:text-[#FF2E63] dark:hover:bg-[#161d2a] text-[20px]" role="menuitem">KIOS
                DIGIDES</a>
        </div>
    </div>
</div>
