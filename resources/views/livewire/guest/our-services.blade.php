<div class="py-16">
    <h1 class="text-4xl font-bold text-blue-600 text-center">Our Services</h1>
    <div class="mt-12 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 px-4 md:px-16">
        <!-- Room Card -->
        @foreach($services as $data)
            <div class="bg-white border border-gray-300 shadow-lg rounded-lg overflow-hidden">
                <div class="p-6">
                    <h2 class="text-2xl font-semibold text-center text-gray-800">{{ $data->name }}</h2>
                    <p class="text-gray-600 mt-2">{{ $data->description }}</p>
                </div>
            </div>
        @endforeach
    </div>
</div>
