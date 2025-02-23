<div>
      <div class="text-center">
        <button type="button" class="p-2 w-full flex items-center text-sm text-gray-800 hover:text-gray-500 focus:outline-none focus:text-gray-500 dark:text-neutral-200 dark:hover:text-neutral-500 dark:focus:text-neutral-500" aria-haspopup="dialog" aria-expanded="false" aria-controls="hs-modal-signin" data-hs-overlay="#hs-modal-signin">
            <svg class="shrink-0 size-4 me-3 md:me-2" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
            Sign in
        </button>
      </div>

      <div id="hs-modal-signin" class="hs-overlay hidden fixed inset-0 z-[80] overflow-x-hidden overflow-y-auto">
        <div class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto">
          <div class="bg-white border border-gray-200 rounded-xl shadow-sm dark:bg-neutral-900 dark:border-neutral-800">
            <div class="p-4 sm:p-7">
              <div class="text-center">
                <h3 id="hs-modal-signin-label" class="block text-2xl font-bold text-gray-800 dark:text-neutral-200">Sign in</h3>
                    Don't have an account yet?
                    <a type="button" href="{{ url('/register') }}" class="text-blue-600 decoration-2 hover:underline focus:outline-none focus:underline font-medium dark:text-blue-500">
                        Sign up here
                    </a>
              </div>

              <div class="mt-5">


                <div class="py-3 flex items-center text-xs text-gray-400 uppercase before:flex-1 before:border-t before:border-gray-200 before:me-6 after:flex-1 after:border-t after:border-gray-200 after:ms-6 dark:text-neutral-500 dark:before:border-neutral-800 dark:after:border-neutral-800">Or</div>

                <!-- Form -->
                <form wire:submit.prevent="signin" class="mt-5" onsubmit="checkForErrors(event)">
                  <div class="grid gap-y-4">
                    <!-- Form Group -->
                    <div>
                      <label for="email" class="block text-sm mb-2 dark:text-white">Email address</label>
                      <div class="relative">
                        <input type="email" wire:model='email' id="email" name="email" class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-800 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" aria-describedby="email-error">
                        <div class="hidden absolute inset-y-0 end-0 pointer-events-none pe-3">
                          <svg class="size-5 text-red-500" width="16" height="16" fill="currentColor" viewBox="0 0 16 16" aria-hidden="true">
                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
                          </svg>
                        </div>
                      </div>
                      @error('email')
                        <p class="hidden text-xs text-red-600 mt-2" id="email-error">{{ $message }}</p>
                      @enderror
                    </div>
                    <!-- End Form Group -->

                    <!-- Form Group -->
                    <div>
                      <div class="flex justify-between items-center">
                        <label for="password" class="block text-sm mb-2 dark:text-white">Password</label>
                        {{-- <a class="inline-flex items-center gap-x-1 text-sm text-blue-600 decoration-2 hover:underline focus:outline-none focus:underline font-medium dark:text-blue-500" href="../examples/html/modal-recover-account.html">Forgot password?</a> --}}
                      </div>
                      <div class="relative">
                        <input type="password" wire:model='password' id="password" name="password" class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-800 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" aria-describedby="password-error">
                        <div class="hidden absolute inset-y-0 end-0 pointer-events-none pe-3">
                          <svg class="size-5 text-red-500" width="16" height="16" fill="currentColor" viewBox="0 0 16 16" aria-hidden="true">
                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
                          </svg>
                        </div>
                      </div>
                      <p class="hidden text-xs text-red-600 mt-2" id="password-error">8+ characters required</p>
                    </div>
                    <!-- End Form Group -->

                    <!-- Checkbox | Remember Me -->
                    {{-- <div class="flex items-center">
                      <div class="flex">
                        <input id="remember-me" name="remember-me" type="checkbox" class="shrink-0 mt-0.5 border-gray-200 rounded text-blue-600 focus:ring-blue-500 dark:bg-neutral-800 dark:border-neutral-800 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800">
                      </div>
                      <div class="ms-3">
                        <label for="remember-me" class="text-sm dark:text-white">Remember me</label>
                      </div>
                    </div> --}}
                    <!-- End Checkbox -->

                    @error('info')
                        <p class="hidden text-xs text-red-600 mt-2" id="email-error">{{ $message }}</p>
                    @enderror

                    <button type="submit" class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">Sign in</button>

                </div>
                </form>
                <!-- End Form -->
              </div>
            </div>
          </div>
        </div>
      </div>
</div>

<script>
   function checkForErrors(event) {
       if (document.querySelector(".text-red-600:not(.hidden)")) {
           event.preventDefault(); // Prevent form submission if there are errors
       }
   }

   document.addEventListener("click", function (event) {
    const modal = document.getElementById("hs-modal-signin");
    const modalContent = modal.querySelector(".bg-white"); // Modal inner content

    // Prevent closing if the click is inside the modal
    if (modal.classList.contains("open") && modal.classList.contains("opened")) {
        if (!modalContent.contains(event.target)) {
            // Check if there are validation errors before closing
            if (document.querySelector(".text-red-600:not(.hidden)")) {
                return; // Stop modal from closing if there are errors
            }

            modal.setAttribute("aria-hidden", "true");
            modal.removeAttribute("aria-modal");
            modal.classList.remove("open", "opened");
            modal.classList.add("hidden");
            modal.setAttribute("tabindex", "-1");

            document.querySelector(".hs-overlay-backdrop")?.remove();
        }
    }
});

</script>
