<nav class="hidden lg:flex items-center justify-end text-lg">

    <a title="{{ $page->siteName }} Blog" href="/blog"
        class="ml-6 text-gray-700 hover:text-blue-600 {{ $page->isActive('/blog') ? 'active text-blue-600' : '' }}">
        Blog
    </a>

    <a title="{{ $page->siteName }} Contact" href="/contact"
        class="ml-6 text-gray-700 hover:text-blue-600 {{ $page->isActive('/contact') ? 'active text-blue-600' : '' }}">
        Contact
    </a>

    <a title="{{ $page->siteName }} Github" rel="noopener" target="_blank" href="{{ $page->social->github }}"
        class="ml-6 text-gray-700 hover:text-gray-900">
        @include('_assets.GitHub')
    </a>

    <a title="{{ $page->siteName }} Twitter" rel="noopener" target="_blank" href="{{ $page->social->twitter }}"
        class="ml-6 text-gray-700 hover:text-gray-900">
        @include('_assets.Twitter')
    </a>

    <a title="{{ $page->siteName }} Contact" rel="noopener" target="_blank" href="{{ $page->social->email }}"
        class="ml-6 text-gray-700 hover:text-gray-900">
        @include('_assets.at')
    </a>
</nav>
