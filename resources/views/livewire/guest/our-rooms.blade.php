<div class="py-16 bg-gray-50">
    <!-- Page Header -->
    <div class="text-center">
        <h1 class="text-5xl font-bold text-blue-600">Our Rooms</h1>
        <p class="text-lg text-gray-700 mt-2">Find the perfect stay with comfort and luxury.</p>
    </div>

    <!-- Carousel Section -->
    <div class="w-full max-w-4xl mx-auto bg-white rounded-lg shadow-lg overflow-hidden dark:bg-neutral-800">
        <!-- Carousel Container -->
        <div data-hs-carousel='{
        "loadingClasses": "opacity-0",
        "dotsItemClasses": "hs-carousel-active:bg-blue-700 hs-carousel-active:border-blue-700 size-3 border border-gray-400 rounded-full cursor-pointer dark:border-neutral-600 dark:hs-carousel-active:bg-blue-500 dark:hs-carousel-active:border-blue-500"
    }' class="relative">

            <!-- Carousel Wrapper -->
            <div class="hs-carousel relative overflow-hidden w-full min-h-64 bg-gray-100 rounded-lg dark:bg-neutral-900">
                <div class="hs-carousel-body absolute top-0 bottom-0 left-0 flex flex-nowrap transition-transform duration-700 opacity-100">

                    <!-- Slide 1 -->
                    @foreach($rooms as $data)
                        <div class="hs-carousel-slide w-full flex items-center justify-center bg-gray-100 p-10 dark:bg-neutral-900 relative">
                            @if($data->getFirstMediaUrl('images'))
                                <img class="absolute inset-0 w-full h-full object-fill"
                                     src="{{ asset('storage/' . $data->getFirstMedia('images')->id . '/' . $data->getFirstMedia('images')->file_name) }}"
                                     alt="Product Image">
                                <span class="relative z-10 text-4xl font-bold text-black dark:text-white">{{ $data->name }}</span>
                            @else
                                <img class="absolute inset-0 w-full h-full object-fill" src="{{ url('no-image.jpg') }}" alt="No Picture Available">
                                <span class="relative z-10 text-4xl font-bold text-black dark:text-white">{{ $data->name }}</span>
                            @endif
                        </div>
                    @endforeach
                    <!-- Slide 2 -->
                </div>
            </div>

            <!-- Navigation Buttons -->
            <button type="button" class="hs-carousel-prev absolute inset-y-0 left-0 flex items-center justify-center w-12 h-full bg-black/20 text-white rounded-l-lg hover:bg-black/40 transition">
                <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                    <path d="M15 18l-6-6 6-6"></path>
                </svg>
            </button>

            <button type="button" class="hs-carousel-next absolute inset-y-0 right-0 flex items-center justify-center w-12 h-full bg-black/20 text-white rounded-r-lg hover:bg-black/40 transition">
                <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                    <path d="M9 18l6-6-6-6"></path>
                </svg>
            </button>

            <!-- Pagination Dots -->
            <div class="hs-carousel-pagination flex justify-center absolute bottom-4 left-0 right-0 space-x-2"></div>
        </div>
    </div>




    <!-- Room Details Section -->
    <div class="mt-12 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 px-4 md:px-16">
        <!-- Room Card -->
        @foreach($rooms as $data)
            <div class="bg-white border border-gray-300 shadow-lg rounded-lg overflow-hidden">
                <div class="p-6">
                    <h2 class="text-2xl font-semibold text-gray-800">{{ $data->name }}</h2>
                    <p class="text-gray-600 mt-2">{{ $data->description }}</p>
                    <a href="#" class="mt-4 inline-block bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">Book Now</a>
                </div>
            </div>
        @endforeach
    </div>
</div>
