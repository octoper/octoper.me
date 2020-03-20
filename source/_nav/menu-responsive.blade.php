<nav id="js-nav-menu" class="nav-menu text-center hidden lg:hidden">
    <ul class="my-0">
        <li class="pl-4">
            <a
                title="{{ $page->siteName }} Blog"
                href="/blog"
                class="nav-menu__item {{ $page->isActive('/blog') ? 'active text-black' : '' }}"
            >Blog</a>
        </li>.
        <li class="pl-4">
            <a
                title="{{ $page->siteName }} Contact"
                href="/contact"
                class="nav-menu__item {{ $page->isActive('/contact') ? 'active text-black' : '' }}"
            >Contact</a>
        </li>
    </ul>
</nav>
