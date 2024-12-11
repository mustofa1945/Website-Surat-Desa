    <!-- Pop-up Konfirmasi -->
    <div class="inset-0 flex justify-center items-center w-full h-full bg-black bg-opacity-50  justify-center items-center">
        <div class="bg-white p-6 rounded-lg shadow-lg w-1/3">
            <h2 class="text-xl font-bold mb-4">Konfirmasi</h2>
            <p class="text-gray-700 mb-6">Apakah Anda yakin ingin {{ $text }} Account ini?</p>
            <div class="flex justify-end space-x-2">
                <button 
                    class="bg-gray-500 close-popup hover:bg-gray-600 text-white font-semibold py-2 px-4 rounded" >
                    Batal
                </button>
                <form action='{{ route('logout') }}' method='get'>
                    @csrf
                    <button 
                      type="submit"  name='id'  class="bg-{{ $color }}-500 close-popup hover:bg-red-600 text-white font-semibold py-2 px-4 rounded"
                        ">{{ $choise }}</button>
                </form>
            </div>
        </div>
    </div>

