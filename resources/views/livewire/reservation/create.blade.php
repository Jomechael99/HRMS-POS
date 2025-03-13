<div class="max-w-4xl px-4 py-10 sm:px-6 lg:px-8 mx-auto"><!-- Card -->
    <div class="border-2 border-gray-600 rounded-xl shadow-xl p-4 sm:p-7 dark:bg-neutral-800">
        <div class="mb-8">
            <h2 class="text-xl text-center font-bold text-gray-800 dark:text-neutral-200">
                Reservation
            </h2>
            <p class="text-sm text-center text-gray-600 dark:text-neutral-400">
                Create a Reservation
            </p>
        </div>

        <form wire:submit.prevent="create">
            <!-- Grid -->
            <div class="grid sm:grid-cols-12 gap-2 sm:gap-6">

                <div class="sm:col-span-3">
                    <label class="inline-block text-sm text-gray-800 mt-2.5 dark:text-neutral-200">
                        Reservation Date
                    </label>
                </div>
                <!-- End Col -->

                <div class="sm:col-span-9">
                    <input type="text" id="dateRangePicker" wire:model="dateRange"
                           class="py-2 px-3 pe-11 block w-full border-2 @error('name') border-red-600 @else border-black @enderror shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                    >

                <script>
                    document.addEventListener("DOMContentLoaded", function() {
                        flatpickr("#dateRangePicker", {
                            mode: "range",
                            dateFormat: "Y-m-d",
                            onClose: function(selectedDates, dateStr) {
                                Livewire.dispatch("updateDateRange", { dateRange: dateStr });
                            }
                        });
                    });
                </script>

                    @error('name')
                    <span class="text-red-500 text-xs">{{ $message }}</span>
                    @enderror
                </div>

                <div class="sm:col-span-3">
                    <label class="inline-block text-sm text-gray-800 mt-2.5 dark:text-neutral-200">
                        Rooms
                    </label>
                </div>
                <!-- End Col -->

                <div class="sm:col-span-9">
                    <select id="roomSelect" wire:model="room"
                            class="py-2 px-3 pe-11 block w-full border-2 @error('name') border-red-600 @else border-black @enderror shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                        <option value="">Select Room</option>
                        @foreach($rooms as $data)
                            <option value="{{ $data->id }}">{{ $data->name }}</option>
                        @endforeach
                    </select>

                    @error('name')
                    <span class="text-red-500 text-xs">{{ $message }}</span>
                    @enderror
                </div>

                <div class="sm:col-span-3">
                    <label class="inline-block text-sm text-gray-800 mt-2.5 dark:text-neutral-200">
                        Services
                    </label>
                </div>
                <!-- End Col -->

                <div class="sm:col-span-9">
                    <select id="services" wire:model="servicesData" multiple class="py-2 px-3 pe-11 block w-full border-2 @error('name') border-red-600 @else border-black @enderror shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                        <option value="">Select Services</option>
                        @foreach($services as $data)
                            <option value="{{ $data->id }}">{{ $data->name }}</option>
                        @endforeach
                    </select>

                    @error('name')
                    <span class="text-red-500 text-xs">{{ $message }}</span>
                    @enderror
                </div>
                <!-- End Col -->
            </div>
            <!-- End Grid -->

            <div class="mt-5 flex justify-end gap-x-2">
                <a href="{{ route('reservations') }}" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-red-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                    Back
                </a>
                <button type="submit" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                    Save changes
                </button>
            </div>
        </form>
    </div>
</div>

<script>
</script>


<!-- End Card Section -->


