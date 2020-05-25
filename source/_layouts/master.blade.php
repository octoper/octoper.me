<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link rel="dns-prefetch" href="https://fonts.gstatic.com/">

    <link rel="preload" as="script" href="{{ $page->baseUrl }}/assets/build/js/manifest.js">
    <link rel="preload" as="script" href="{{ $page->baseUrl }}/assets/build/js/vendor.js">
    <link rel="preload" as="script" href="{{ $page->baseUrl }}/assets/build/js/main.js">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="{{ $page->meta_description ?? $page->siteDescription }}">

    <meta property="og:title" content="{{ $page->title ? $page->title . ' | ' : '' }}{{ $page->siteName }}" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ $page->getUrl() }}" />
    <meta property="og:description" content="{{ $page->siteDescription }}" />

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700&family=Righteous&display=swap"
    media="print" onload="this.media='all'" crossorigin="anonymous" rel="stylesheet">

    <meta name="theme-color" content="#24292E"/>

    <title>{{ $page->title ? $page->title . ' | ' : '' }}{{ $page->siteName }}</title>

    <link rel="manifest" href="/manifest.json">

    <link rel="home" href="{{ $page->baseUrl }}">
    <link rel="apple-touch-icon" sizes="200x200" href="/assets/img/apple-touch-icon.png">
    <link rel="icon" type="image/jpeg" href="/assets/img/about.jpg">
    <link href="/blog/feed.atom" type="application/atom+xml" rel="alternate" title="{{ $page->siteName }} Atom Feed">

    @stack('meta')

    @include('_assets.style')
</head>

<body x-data="{ openNav: false }" class="flex flex-col justify-between min-h-screen bg-white dark:bg-gray-900 dark:text-white text-gray-800 leading-normal font-sans">
    <div id="website">
        <a class="sr-only py-4 px-4 w-full focus:not-sr-only" href="#main">Skip to main content</a>
        <header class="flex items-center dark:bg-black bg-white h-16 py-4 lg:py-16" role="banner">
            <div class="container flex items-center max-w-8xl mx-auto px-4 lg:px-8">
                <div class="flex items-center">
                    <a href="/" title="{{ $page->siteName }} home" class="inline-flex items-center">
                        <h1 class="text-lg md:text-2xl border-b-2 border-t-2 dark:border-gray-200 dark-hover:border-white border-gray-900 uppercase font-righteous
                        dark:text-gray-100 dark-hover:text-white text-gray-500 font-medium hover:text-gray-900 my-0">
                            Octoper
                        </h1>
                    </a>
                </div>

                <div class="flex flex-1 justify-end items-center">

                    {{-- @if( strpos($page->getPath(), "blog") )
                        @include('_components.search')
                    @endif --}}

                    @include('_nav.menu')

                    @include('_nav.menu-toggle')
                </div>
            </div>
        </header>

        @include('_nav.menu-responsive')

        <main role="main" id="main" class="flex-auto w-full container px-4 mx-auto py-20">
            @yield('body')
        </main>

        <footer class="dark:bg-black dark:text-white bg-white text-center text-sm mt-12 py-4" role="contentinfo">
            <ul class="flex flex-col justify-center list-none">
                <li>
                    Built with ❤️ using <a href="http://jigsaw.tighten.co" title="Jigsaw by Tighten">Jigsaw</a>
                    and <a href="https://tailwindcss.com" title="Tailwind CSS, a utility-first CSS framework">Tailwind
                        CSS</a>.
                </li>
            </ul>
        </footer>


    </div>
    <script src="{{ $page->baseUrl }}{{ mix('js/manifest.js', 'assets/build') }}" defer></script>
    <script src="{{ $page->baseUrl }}{{ mix('js/vendor.js', 'assets/build') }}" defer></script>
    <script src="{{ $page->baseUrl }}{{ mix('js/main.js', 'assets/build') }}"></script>
    <script>
        if ('serviceWorker' in navigator) {
          window.addEventListener('load', function() {
            navigator.serviceWorker.register('service-worker.js')
              .then(reg => {
                console.log('Service worker registered! 🥳', reg);
              })
              .catch(err => {
                console.log('😫 Service worker registration failed: ', err);
              });
          });
        }
    </script>
    @stack('scripts')
</body>
</html>
