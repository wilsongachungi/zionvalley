<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>ZionValley</title>

        <!-- Scripts -->
        @vite(['resources/js/app.js'])

        <!-- Styles -->

        @include('layouts.admin.partials.links')
    </head>

    <body class="font-sans antialiased">
        <x-banner />

        {{-- @livewire('navigation-menu') --}}

        <!-- Page Heading -->
        <header class="shadow mt-4">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                {{ $header }}
                {{-- Navs --}}
            </div>
        </header>

        @include('layouts.admin.partials.headers')

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>

        @stack('modals')

        @livewireScripts
        @include('layouts.admin.partials.scripts')
    </body>

</html>
