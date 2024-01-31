<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="copyright" content="MACode ID, https://macodeid.com/">

        <title>zion valley </title>

        @yield('css')
        {{-- Css --}}
        @include('layouts.user.partials.links')
    </head>

    <body>
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
                <button type="button" class="close" data-dismiss="alert">X</button>
            </div>
        @endif

        <div class="back-to-top"></div>

        {{-- Navs --}}
        @include('layouts.user.partials.headers')

        <main>
            {{ $slot }}
        </main>

        {{-- Footer --}}
        @include('layouts.user.partials.footer')

        {{-- Scripts --}}
        @include('layouts.user.partials.scripts')

    </body>

</html>
