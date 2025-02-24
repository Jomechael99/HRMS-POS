<div>
    <!-- Table Section -->
    <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
        <!-- Card -->
        <div class="flex flex-col">
            <div class="-m-1.5 overflow-x-auto">
                <div class="p-1.5 min-w-full align-middle">
                    <div
                        class="bg-white border border-gray-200 rounded-xl shadow-sm overflow-hidden dark:bg-neutral-800 dark:border-neutral-700">
                        <!-- Header -->
                        <div
                            class="px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center border-b border-gray-200 dark:border-neutral-700">
                            <div>
                                <h2 class="text-xl font-semibold text-gray-800 dark:text-neutral-200">
                                    Room
                                </h2>
                                <p class="text-sm text-gray-600 dark:text-neutral-400">
                                    Add Room, edit and more.
                                </p>
                            </div>

                            <div>
                                <div class="inline-flex gap-x-2">
                                     <button type="button" class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none" aria-haspopup="dialog" aria-expanded="false" aria-controls="hs-slide-down-animation-modal" data-hs-overlay="#hs-slide-down-animation-modal">
                                        <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M5 12h14" />
                                            <path d="M12 5v14" />
                                        </svg>
                                        Add User
                                     </button>

                                      <div id="hs-slide-down-animation-modal" class="hs-overlay hidden size-full fixed inset-0 z-[80] flex items-center justify-center overflow-x-hidden overflow-y-auto pointer-events-none" role="dialog" tabindex="-1" aria-labelledby="hs-slide-down-animation-modal-label">
                                        <div class="hs-overlay-animation-target hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto">
                                          <div class="flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto dark:bg-neutral-800 dark:border-neutral-700 dark:shadow-neutral-700/70">
                                            <div class="flex justify-between items-center py-3 px-4 border-b dark:border-neutral-700">
                                              <h3 id="hs-slide-down-animation-modal-label" class="font-bold text-gray-800 dark:text-white">
                                                Modal title
                                              </h3>
                                              <button type="button" class="size-8 inline-flex justify-center items-center gap-x-2 rounded-full border border-transparent bg-gray-100 text-gray-800 hover:bg-gray-200 focus:outline-none focus:bg-gray-200 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-700 dark:hover:bg-neutral-600 dark:text-neutral-400 dark:focus:bg-neutral-600" aria-label="Close" data-hs-overlay="#hs-slide-down-animation-modal">
                                                <span class="sr-only">Close</span>
                                                <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                  <path d="M18 6 6 18"></path>
                                                  <path d="m6 6 12 12"></path>
                                                </svg>
                                              </button>
                                            </div>
                                            <div class="p-4 overflow-y-auto">
                                              <p class="mt-1 text-gray-800 dark:text-neutral-400">
                                                This is a wider card with supporting text below as a natural lead-in to additional content.
                                              </p>
                                            </div>
                                            <div class="flex justify-end items-center gap-x-2 py-3 px-4 border-t dark:border-neutral-700">
                                              <button type="button" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-700 dark:focus:bg-neutral-700" data-hs-overlay="#hs-slide-down-animation-modal">
                                                Close
                                              </button>
                                              <button type="button" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                                                Save changes
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
                            <table class="w-full table-fixed border-collapse divide-y divide-gray-200 dark:divide-neutral-700">
                              <thead class="w-full bg-gray-50 dark:bg-neutral-800">
                                <tr>
                                  <th class="w-1/5 px-4 py-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                                    Name
                                  </th>
                                  <th class="w-1/5 px-4 py-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                                    Position
                                  </th>
                                  <th class="w-1/5 px-4 py-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                                    Status
                                  </th>
                                  <th class="w-1/5 px-4 py-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                                    Portfolio
                                  </th>
                                  <th class="w-1/5 px-4 py-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                                    Created
                                  </th>
                                  <th class="w-1/5 px-4 py-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">Actions </th>
                                </tr>
                              </thead>
                              <tbody class="divide-y divide-gray-200 dark:divide-neutral-700">
                                <tr>
                                  <td class="px-4 py-3 text-sm text-gray-800 dark:text-neutral-200">John Doe</td>
                                  <td class="px-4 py-3 text-sm text-gray-800 dark:text-neutral-200">Manager</td>
                                  <td class="px-4 py-3 text-sm text-green-600 dark:text-green-400">Active</td>
                                  <td class="px-4 py-3 text-sm text-gray-800 dark:text-neutral-200">Finance</td>
                                  <td class="px-4 py-3 text-sm text-gray-800 dark:text-neutral-200">2025-02-24</td>
                                  <td class="px-4 py-3 text-right">
                                    <button class="text-blue-600 dark:text-blue-400">Edit</button>
                                  </td>
                                </tr>
                              </tbody>
                            </table>

                            <!-- Pagination -->

                            <div>

                            </div>

                          </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Card -->
    </div>
    <!-- End Table Section -->
</div>
