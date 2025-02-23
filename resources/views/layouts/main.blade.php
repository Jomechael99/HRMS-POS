<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'Page Title' }}</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
        @livewireStyles()
    </head>
    <body class="bg-gray-50 transition-all duration-300 lg:hs-overlay-layout-open:ps-[260px] dark:bg-neutral-900">
        <livewire:navigation.admin-nav-bar/>
        <div class="w-full lg:ps-64">
            <div class="p-4 sm:p-6 space-y-4 sm:space-y-6">
                {{ $slot }}
            </div>
          </div>
        <x-toaster-hub />
        @livewireScripts()
    </body>
</html>
