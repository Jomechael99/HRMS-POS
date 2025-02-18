<div>


    <div class="flex items-center justify-center min-h-screen bg-gray-300 dark:bg-neutral-900 px-6">

        <livewire:components.alert.success-alert />

        <div
            class="w-full max-w-md mb-auto mt-6 bg-blue-200 border border-gray-400 rounded-xl shadow-sm dark:bg-neutral-900 dark:border-neutral-700">
            <div class="p-6 sm:p-7">
                <div class="text-center">
                    <h1 class="text-2xl font-bold text-gray-800 dark:text-white">Sign up</h1>
                </div>
                <div class="mt-5">
                    <form wire:submit.prevent="register">
                        <div class="grid gap-y-4">

                            <div>
                                <label for="first_name" class="block text-sm dark:text-white">First name</label>
                                <input type="text" wire:model='first_name' id="first_name"
                                    class="w-full py-3 px-4 border rounded-lg text-sm dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 @error('first_name') border-red-500 @enderror">
                                @error('first_name')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>

                            <div>
                                <label for="last_name" class="block text-sm dark:text-white">Last name</label>
                                <input type="text" wire:model='last_name' id="last_name"
                                    class="w-full py-3 px-4 border rounded-lg text-sm dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 @error('last_name') border-red-500 @enderror">
                                @error('last_name')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>

                            <div>
                                <label for="email" class="block text-sm dark:text-white">Email address</label>
                                <input type="email" wire:model='email' id="email"
                                    class="w-full py-3 px-4 border rounded-lg text-sm dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 @error('email') border-red-500 @enderror">
                                @error('email')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>

                            <div>
                                <label for="username" class="block text-sm dark:text-white">Username</label>
                                <input type="text" wire:model='username' id="username"
                                    class="w-full py-3 px-4 border rounded-lg text-sm dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 @error('username') border-red-500 @enderror">
                                @error('username')
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

                            <div>
                                <label for="confirm-password" class="block text-sm dark:text-white">Confirm
                                    Password</label>
                                <input type="password" wire:model='password_confirmation' id="confirm-password"
                                    class="w-full py-3 px-4 border rounded-lg text-sm dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 @error('password_confirmation') border-red-500 @enderror">
                                @error('password_confirmation')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="flex items-center">
                                <input id="remember-me" wire:model='terms' type="checkbox"
                                    class="shrink-0 rounded text-blue-600 focus:ring-blue-500 dark:bg-neutral-800 dark:border-neutral-700 @error('terms') border-red-500 @enderror">
                                <label for="remember-me" class="ml-2 text-sm dark:text-white">I accept the <a
                                        class="text-blue-600 hover:underline dark:text-blue-500" href="#">Terms
                                        and Conditions</a></label>

                            </div>
                            @error('terms')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror

                            <button type="submit"
                                class="w-full py-3 px-4 text-sm font-medium rounded-lg border bg-blue-600 text-white hover:bg-blue-700">Sign
                                up</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
