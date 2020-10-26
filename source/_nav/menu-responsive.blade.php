<nav :class="{'hidden': !openNav }" class="bg-gray-100 pb-2 pt-6 px-2 w-auto text-center hidden lg:hidden">
    <ul class="my-0">
        <li class="pl-4">
            <a
                    title="{{ $page->siteName }} Blog"
                    href="/blog"
                    class="nav-menu__item {{ $page->isActive('/blog') ? 'active text-black' : '' }}"
            >Blog</a>
        </li>
        <li class="pl-4">
            <a
                    title="{{ $page->siteName }} Projects"
                    href="/work"
                    class="nav-menu__item {{ $page->isActive('/work') ? 'active text-black' : '' }}"
            >Work</a>
        </li>
        <li class="pl-4">
            <a
                    title="{{ $page->siteName }} Contact"
                    href="/contact"
                    class="nav-menu__item {{ $page->isActive('/contact') ? 'active text-black' : '' }}"
            >Contact</a>
        </li>
        <li class="pl-4 flex justify-center">
            <a title="{{ $page->siteName }} Github" rel="noopener" target="_blank"
               href="https://github.com/{{ $page->social->github }}"
               class="nav-menu__item text-gray-500 hover:text-gray-900">
                <x-icons.github class="h-8 h-8 lg:h-6 lg:h-6"></x-icons.github>
            </a>
        </li>
        <li class="pl-4 flex justify-center">
            <a title="{{ $page->siteName }} Twitter" rel="noopener" target="_blank"
               href="https://twitter.com/{{ $page->social->twitter }}"
               class="nav-menu__item text-gray-500 hover:text-gray-900">
                <x-icons.twitter class="h-8 h-8 lg:h-6 lg:h-6"></x-icons.twitter>
            </a>
        </li>
        <li class="pl-4 flex justify-center">
            <a title="{{ $page->siteName }} Email" rel="noopener" target="_blank"
               href="mailto:{{ $page->social->email }}"
               class="nav-menu__item text-gray-500 hover:text-gray-900">
                <x-icons.at class="h-8 h-8 lg:h-6 lg:h-6"></x-icons.at>
            </a>
        </li>
    </ul>
</nav>
