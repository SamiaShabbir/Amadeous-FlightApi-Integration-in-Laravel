<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="
https://cdn.jsdelivr.net/npm/sweetalert2@11.7.20/dist/sweetalert2.min.css
" rel="stylesheet">
    <title>Booking Admin</title>
    {{--  All Links Imports are Here... --}}
    @include('partials.linksImports')
</head>

<body class="h-100">
    <div class="container-fluid">
        <div class="row">
            @auth
                {{-- Sidebar Here... --}}
                @include('sections.sidebar')
                <main class="main-content col-lg-10 col-md-9 col-sm-12 p-0 offset-lg-2 offset-md-3">
                    {{-- Header Here... --}}
                    @include('sections.header')
                    {{-- Loader Here... --}}
                    @include('sections.loader')
                    {{-- Content/Pages Here... --}}
                    <div id="content" style="display: none;">
                        @yield('content')
                    </div>
                    {{-- Footer Here... --}}
                    @include('sections.footer')
                </main>
            @endauth
        </div>
    </div>
    {{-- All Scripts Imports Are Here... --}}
    @include('partials.scriptsImports')
    <script src="
        https://cdn.jsdelivr.net/npm/sweetalert2@11.7.20/dist/sweetalert2.all.min.js
        "></script>
</body>

</html>
