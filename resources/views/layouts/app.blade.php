<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>ZionValley</title>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->

        @include('layouts.admin.partials.links')
    </head>

    <body class="font-sans antialiased">
        <x-banner />

        <div class="">
            @livewire('navigation-menu')

            <!-- Page Heading -->
            <header class="shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                    {{-- Navs --}}
                    @include('layouts.admin.partials.headers')
                </div>
            </header>

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

        @stack('modals')

        @livewireScripts
        @include('layouts.admin.partials.scripts')
    </body>

</html>
