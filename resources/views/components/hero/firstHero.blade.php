<section class="relative  w-full md:mx-auto   flex justify-center items-center h-[100vh] text-black ">
        {{-- background-image --}}
        <div class="absolute bg-[url('{{ asset("images/beranda-images/desa1.jpg") }}')] bg-cover bg-center  md:top-[0rem] top-[0rem] left-[0rem] bg-rose-500 w-full  h-full -z-2"></div>

    <!-- Konten Utama -->
    <div class="relative container  px-6 py-20 text-center z-10 ">
        <!-- Title -->
        <h1 class="text-[#FF2E63] text-4xl md:text-6xl font-bold mb-4">
            Transformasi Digital Desa
        </h1>

        <!-- Subtitle -->
        <p class="text-[#252A34] text-lg md:text-2xl mb-8">
            Perluas Jangkauan, Lakukan Percepatan Pelayanan Dengan Smart System Terintegrasi
        </p>

        <!-- Call to Action Button -->
        <div class="flex justify-center space-x-4">
            <a href="{{ route('view.register') }}"
               class="px-6 py-3 bg-[#FF2E63] text-white font-semibold rounded-md hover:bg-[transparent] hover:text-[#FF2E63] hover:border hover:border-[#FF2E63] transition duration-300">
                Get Started
            </a>
            <a href="#"
               class="px-6 py-3  text-[#FF2E63] font-semibold rounded-md hover:bg-[#FF2E63] hover:text-[#EAEAEA] transition duration-300">
                Learn More
            </a>
        </div>
    </div>
</section>
