<div>
    <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
        <!-- Card -->
        <div class="flex flex-col">
            <div class="-m-1.5 overflow-x-auto">
                <div class="p-1.5 min-w-full align-middle">
                    <div class="bg-white border border-gray-400 rounded-xl shadow-sm overflow-hidden dark:bg-neutral-800 dark:border-neutral-700">
                        <!-- Header -->
                        <div class="px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center border-b border-gray-200 dark:border-neutral-700">
                            <div>
                                <h2 class="text-xl font-semibold text-gray-800 dark:text-neutral-200">
                                    Rooms
                                </h2>
                                <p class="text-sm text-gray-600 dark:text-neutral-400">
                                    Add Room, edit and more.
                                </p>
                            </div>

                            <div>
                                <div class="inline-flex gap-x-2">
                                    <a href="{{ route('room.create') }}" class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none" aria-haspopup="dialog" aria-expanded="false" aria-controls="hs-slide-down-animation-modal" data-hs-overlay="#hs-slide-down-animation-modal">
                                        <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M5 12h14" />
                                            <path d="M12 5v14" />
                                        </svg>
                                        Add Room
                                    </a>

                                    <div id="hs-slide-down-animation-modal" class="hs-overlay hidden size-full fixed inset-0 z-[80] flex items-center justify-center overflow-x-hidden overflow-y-auto pointer-events-none" role="dialog" tabindex="-1" aria-labelledby="hs-slide-down-animation-modal-label">
                                        <div class="hs-overlay-animation-target hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto">
                                            <div class="flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto dark:bg-neutral-800 dark:border-neutral-700 dark:shadow-neutral-700/70">
                                                <div class="flex justify-between items-center py-3 px-4 border-b dark:border-neutral-700">
                                                    <h3 id="hs-slide-down-animation-modal-label" class="font-bold text-gray-800 dark:text-white">
                                                        Room Info
                                                    </h3>
                                                    <button type="button" class="size-8 inline-flex justify-center items-center gap-x-2 rounded-full border border-transparent bg-gray-100 text-gray-800 hover:bg-gray-200 focus:outline-none focus:bg-gray-200 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-700 dark:hover:bg-neutral-600 dark:text-neutral-400 dark:focus:bg-neutral-600" aria-label="Close" data-hs-overlay="#hs-slide-down-animation-modal">
                                                        <span class="sr-only">Close</span>
                                                        <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                            <path d="M18 6 6 18"></path>
                                                            <path d="m6 6 12 12"></path>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Table -->
                        <div class="overflow-x-auto">
                            <table class="w-full table-fixed border-collapse divide-y divide-gray-400 dark:divide-neutral-700 border border-gray-300 dark:border-neutral-600">
                                <thead class="w-full bg-gray-400 dark:bg-neutral-800">
                                <tr>
                                    <th class="w-1/5 px-4 py-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200 text-center">
                                        ID
                                    </th>
                                    <th class="w-1/5 px-4 py-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200 text-center">
                                        Name
                                    </th>
                                    <th class="w-1/5 px-4 py-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200 text-center">
                                        Description
                                    </th>
                                    <th class="w-1/5 px-4 py-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200 text-center">
                                        Created
                                    </th>
                                    <th class="w-1/5 px-4 py-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200 text-center">Actions </th>
                                </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-200 dark:divide-neutral-700 text-center">
                                @foreach($data as $room)
                                    <tr>
                                        <td class="px-4 py-3 text-sm text-gray-800 dark:text-neutral-200">{{ $room->id }}</td>
                                        <td class="px-4 py-3 text-sm text-gray-800 dark:text-neutral-200">{{ $room->name }}</td>
                                        <td class="px-4 py-3 text-sm text-gray-800 dark:text-neutral-200">{{ $room->description }}</td>
                                        <td class="px-4 py-3 text-sm text-gray-800 dark:text-neutral-200">{{ $room->created_at }}</td>
                                        <td class="px-4 py-3 text-center items-center ">
                                            <button type="button" wire:click="edit({{ $room->id }})" class="py-2 px-3 gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                                                Edit
                                            </button>
                                            <button type="button" class="py-2 px-3 gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-red-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                                                Delete
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>

                            <!-- Pagination -->
                            <div>
                                {{ $data->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Card -->
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            Livewire.on('keep-modal-open', function () {
                let modal = document.querySelector('#hs-slide-down-animation-modal');
                let backdrop = document.querySelector('.hs-overlay-backdrop');

                if (backdrop) backdrop.remove(); // Remove overlay
                modal.classList.add('open'); // Ensure modal stays open
            });
        });
    </script>
</div>
