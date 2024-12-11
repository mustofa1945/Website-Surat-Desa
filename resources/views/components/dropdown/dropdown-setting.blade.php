<!-- component -->
<div class="flex items-center justify-center">
    <div x-data="{ open: false }" class="relative inline-block text-left">
        <button @click="open = !open"
            class="inline-flex  justify-center w-full px-4 py-2 text-[17px] font-medium hover:text-[#FF2E63]   shadow-sm ">
            Setting
        </button>
        <div x-show="open" @click.away="open = false"
            class="origin-top-left absolute left-0 top-[5vh] mt-2 w-[20vh] rounded-md shadow-lg text-white bg-[#252A34] ring-1 ring-black ring-opacity-5 px-2  ">
            <a href="{{ route('fitur.administrasi') }}"
                class="block px-4 py-2  hover:text-[#FF2E63] dark:hover:bg-[#161d2a] text-[20px]"
                role="menuitem">Profil</a>
                <form action="{{ route('logout')}}"  role="menuitem" method="get">
                    @csrf
                    <button role="menuitem" class="block px-4 py-2 hover:text-[#FF2E63] dark:hover:bg-[#161d2a] text-[20px]" type="submit">Logout</button>
                </form>
        </div>
    </div>
</div>
