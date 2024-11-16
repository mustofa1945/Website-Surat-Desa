 <!-- 5 Cards -->
 <div class="bg-white rounded-lg shadow-lg p-6 max-w-sm">
    <!-- Child 1: Logo and Title -->
    <div class="flex items-center space-x-4 mb-4">
        <!-- Logo -->
        <img src="{{ $image }}" alt="Logo" class=" w-10 h-10 bg-cover">
        <!-- Title -->
        <h1 class="text-xl font-semibold text-green-600">{{ $title }}</h1>
    </div>

    <!-- Child 2: Description -->
    <p class="text-gray-600">
       {{ $text }}
    </p>
</div>