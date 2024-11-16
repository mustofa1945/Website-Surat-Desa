    <!-- Carousel Section -->
    <section class="relative w-full mx-auto mt-10 ">
        <!-- Slide Container -->
        <div id="carousel" class="overflow-hidden-x box-border  relative flex w-full space-x-[10px]">
            <!-- Slide 1 -->
            <div class="carousel-slide w-full h-64 bg-blue-500 text-white flex items-center justify-center text-3xl font-bold">
                Slide 1
            </div>
            <!-- Slide 2 -->
            <div class="carousel-slide w-full h-64 bg-green-500 text-white flex items-center justify-center text-3xl font-bold">
                Slide 2
            </div>
            <!-- Slide 3 -->
            <div class="md:block hidden carousel-slide w-full h-64 bg-sky-500 text-white flex items-center justify-center text-3xl font-bold">
                Slide 3
            </div>
            <div class="md:block hidden carousel-slide w-full h-64 bg-green-500 text-white flex items-center justify-center text-3xl font-bold">
                Slide 4
            </div>
            <div class=" md:block hidden  carousel-slide w-full h-64 bg-yellow-500 text-white flex items-center justify-center text-3xl font-bold">
                Slide 5
            </div>

        </div>

        <!-- Navigation Buttons -->
        <button onclick="prevSlide()" class="absolute top-1/2 left-0 transform -translate-y-1/2 text-white text-3xl px-4">
            &lt;
        </button>
        <button onclick="nextSlide()" class="absolute top-1/2 right-0 transform -translate-y-1/2 text-white text-3xl px-4">
            &gt;
        </button>
    </section>

    {{-- <script>
        // JavaScript for Carousel Functionality
        let currentSlide = 0;
        const slides = document.querySelectorAll('.carousel-slide');

        function showSlide(index) {
            // Loop slide index
            if (index >= slides.length) currentSlide = 0;
            if (index < 0) currentSlide = slides.length - 1;

            // Hide all slides
            slides.forEach(slide => slide.style.transform = `translateX(-${currentSlide * 100}%)`);
        }

        function nextSlide() {
            currentSlide++;
            showSlide(currentSlide);
        }

        function prevSlide() {
            currentSlide--;
            showSlide(currentSlide);
        }

        // Initial Slide Display
        showSlide(currentSlide);
    </script> --}}

