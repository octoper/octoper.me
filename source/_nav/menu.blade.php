<nav class="hidden lg:flex items-center justify-end text-lg">

    <a title="{{ $page->siteName }} Blog" href="/blog"
        class="ml-6 text-gray-700 under-1 {{ $page->isActive('/blog') ? 'active text-black' : '' }}">
        Blog
    </a>

    <a title="{{ $page->siteName }} Contact" href="/contact"
        class="ml-6 text-gray-700 under-1 {{ $page->isActive('/contact') ? 'active text-black' : '' }}">
        Contact
    </a>

    <a title="{{ $page->siteName }} Github" rel="noopener" target="_blank" href="https://github.com/{{ $page->social->github }}"
        class="ml-6 text-gray-500 hover:text-gray-900">
        @include('_assets.GitHub')
    </a>

    <a title="{{ $page->siteName }} Twitter" rel="noopener" target="_blank" href="https://twitter.com/{{ $page->social->twitter }}"
        class="ml-6 text-gray-500 hover:text-gray-900">
        @include('_assets.Twitter')
    </a>

    <a title="{{ $page->siteName }} Contact" rel="noopener" target="_blank" href="mailto:{{ $page->social->email }}"
        class="ml-6 text-gray-500 hover:text-gray-900">
        @include('_assets.at')
    </a>
</nav>
