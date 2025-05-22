<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'SMK ISLAM SEKARAN - Jalan Raya Sekaran, 01, Sekaran Lamongan' }}</title>
    <meta name="keywords" content="SMK Islam Sekaran, pendidikan, sekolah menengah, belajar">
    <meta name="author" content="SMK ISLAM SEKARAN">
    <meta name="description"
        content="Selamat datang di SMK ISLAM SEKARAN, lembaga pendidikan  yang berdedikasi untuk memberikan pendidikan berkualitas tinggi.">

    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="{{ $title ?? 'SMK ISLAM SEKARAN' }}">
    <meta property="og:description"
        content="Selamat datang di SMK ISLAM SEKARAN, lembaga pendidikan terkemuka yang berdedikasi untuk memberikan pendidikan berkualitas tinggi.">
    <meta property="og:image" content="{{ asset('logo.png') }}">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="website">

    <!-- Schema Markup -->
    <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "EducationalOrganization",
          "name": "SMK ISLAM SEKARAN",
          "url": "https://www.smkislamsekaran.sch.id",
          "logo": "https://www.smkislamsekaran.sch.id/logo.png",
          "description": "Selamat datang di SMK ISLAM SEKARAN, lembaga pendidikan terkemuka yang berdedikasi untuk memberikan pendidikan berkualitas tinggi.",
          "address": {
            "@type": "62261",
            "streetAddress": "Jalan Raya Sekaran, 01",
            "addressLocality": "Sekaran",
            "addressRegion": "Lamongan",
            "postalCode": "62261",
            "addressCountry": "ID"
          },
          "contactPoint": {
            "@type": "ContactPoint",
            "telephone": "+62-xxx-xxxx",
            "contactType": "Customer Service"
          }
        }
        </script>

    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon-precomposed" sizes="60x60" href="apple-touch-icon-60x60.png" />
    <link rel="apple-touch-icon-precomposed" sizes="120x120" href="apple-touch-icon-120x120.png" />
    <link rel="apple-touch-icon-precomposed" sizes="76x76" href="apple-touch-icon-76x76.png" />
    <link rel="apple-touch-icon-precomposed" sizes="152x152" href="apple-touch-icon-152x152.png" />
    <link rel="icon" type="image/png" href="favicon-196x196.png" sizes="196x196" />
    <link rel="icon" type="image/png" href="favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16x16" />
    <link rel="icon" type="image/png" href="favicon-128.png" sizes="128x128" />
    <meta name="application-name" content="&nbsp;" />
    <meta name="msapplication-TileColor" content="#FFFFFF" />
    <meta name="msapplication-TileImage" content="mstile-144x144.png" />
    <meta name="msapplication-square70x70logo" content="mstile-70x70.png" />
    <meta name="msapplication-square150x150logo" content="mstile-150x150.png" />
    <meta name="msapplication-wide310x150logo" content="mstile-310x150.png" />
    <meta name="msapplication-square310x310logo" content="mstile-310x310.png" />

    <link rel="stylesheet" href="/css/style.css">
    @PwaHead
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('styles')
    {{-- Need Production Only  --}}
    @livewireStyles
</head>

<body x-data="{ scrolledFromTop: false }" x-init="window.pageYOffset >= 50 ? scrolledFromTop = true : scrolledFromTop = false"
    @scroll.window="window.pageYOffset >= 50 ? scrolledFromTop = true : scrolledFromTop = false">
    <div class="scroll-indicator" id="scrollIndicator"></div>
    <header class="fixed top-0 z-50 w-full p-4" x-data="{ navigationOpen: false }">
        @include('components.layouts._app_header')
    </header>
    <main>
        {{ $slot }}
    </main>
    <footer aria-label="Site Footer" class="bg-greenMain">
        @include('components.layouts._app_footer')
    </footer>
    @include('components.layouts._scrollback')
    @stack('scripts')

    <script src="js/script.js"></script>
    {{-- Need Production Only  --}}
    @livewireScripts
    {{-- <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script> <!-- Untuk Alpine.js --> --}}
    @RegisterServiceWorkerScript

</body>

</html>
