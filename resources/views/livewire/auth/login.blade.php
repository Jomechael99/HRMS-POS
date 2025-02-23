<div>


    <div class="flex items-center justify-center min-h-screen bg-gray-300 dark:bg-neutral-900 px-6">
        <div
            class="w-full max-w-md mb-auto mt-6 bg-blue-200 border border-gray-400 rounded-xl shadow-sm dark:bg-neutral-900 dark:border-neutral-700">
            <div class="p-6 sm:p-7">
                <div class="text-center">
                    <h3 id="hs-modal-signin-label" class="block text-2xl font-bold text-gray-800 dark:text-neutral-200">Sign in</h3>
                        Don't have an account yet?
                        <a type="button" href="{{ url('/register') }}" class="text-blue-600 decoration-2 hover:underline focus:outline-none focus:underline font-medium dark:text-blue-500">
                            Sign up here
                        </a>
                </div>
                    <div class="mt-5">
                        <div class="py-3 flex items-center text-xs text-gray-400 uppercase before:flex-1 before:border-t before:border-gray-200 before:me-6 after:flex-1 after:border-t after:border-gray-200 after:ms-6 dark:text-neutral-500 dark:before:border-neutral-800 dark:after:border-neutral-800">Or</div>

                        <form wire:submit.prevent="login">
                        <div class="grid gap-y-4">
                            <div>
                                <label for="email" class="block text-sm dark:text-white">Email address</label>
                                <input type="email" wire:model='email' id="email"
                                    class="w-full py-3 px-4 border rounded-lg text-sm dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 @error('email') border-red-500 @enderror">
                                @error('email')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>

                            <div>
                                <label for="password" class="block text-sm dark:text-white">Password</label>
                                <input type="password" wire:model='password' id="password"
                                    class="w-full py-3 px-4 border rounded-lg text-sm dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 @error('password') border-red-500 @enderror">
                                @error('password')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>


                            <button type="submit"
                                class="w-full py-3 px-4 text-sm font-medium rounded-lg border bg-blue-600 text-white hover:bg-blue-700">Sign
                                in</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
