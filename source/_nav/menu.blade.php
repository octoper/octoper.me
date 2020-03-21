<nav class="hidden lg:flex items-center justify-end text-lg" >
    <button title="Dark Mode"x-data="colorMode()" @click.prevent="toggle()" x-init="init()"
        class="ml-6 dark:text-gray-100 dark-hover:text-white text-gray-700">
        <svg fill="none" stroke="currentColor" :class="{ 'hidden': mode == true }"
            class="fill-current h-6 h-6" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8"><path d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"></path></svg>
        <svg fill="none" stroke="currentColor" :class="{ 'hidden': mode == false }"
            class="fill-current h-6 h-6" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8"><path d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
    </button>

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

@push('scripts')
<script>
    var htmlEl = document.querySelector('html');
    function colorMode() {
        return {
            mode: false,
            toggle() {
                localStorage.removeItem('mode');
                this.mode = !this.mode;
                localStorage.setItem('mode', this.mode);
                htmlEl.classList.toggle('mode-dark');
            },
            init() {
                if (localStorage.getItem('mode')) {
                    this.mode = true;
                    htmlEl.classList.add('mode-dark');
                } else {
                    this.mode = false;
                    htmlEl.classList.remove('mode-dark');
                }
            }
        }
    }
</script>
@endpush
