<!doctype html>
<html lang="en">
<head>
    <!-- Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Title -->
    <title>@yield('title', 'TARPOR | Online Shopping in BD | Shop Online, Save Time')</title>

    <!-- Common Styles -->
    @include('partials.meta')
    @include('partials.styles')

    <!-- Canonical URL -->
    <link rel="canonical" href="@yield('canonical_url', url()->current())">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('/logos/favicon.ico') }}" type="image/png">

    <!-- Structured Data -->
    @stack('structured-data')

    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src = 'https://www.googletagmanager.com/gtm.js?id=GTM-XXXXXX' + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-XXXXXX');
    </script>
    <!-- End Google Tag Manager -->
    @stack('head-scripts')
</head>

<body class="bg-gray-100 max-h-full overflow-x-hidden">

    @include('partials.scroll-to-top')
    @include('partials.header')

    <!-- Main Content -->
{{--    <main class="min-h-screen">--}}
{{--        @yield('content')--}}
{{--    </main>--}}
    @yield('content')


    @include('partials.footer')

    <!-- Scripts -->
    @include('partials.scripts')
    @stack('footer-scripts')
</body>
</html>
