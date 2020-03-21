<button title="Dark Mode Toggle" x-data="colorMode()"  @click.prevent="toggle()" x-init="init()"
    class="flex justify-center dark:text-gray-100 mr-4 p-4 dark-hover:text-white lg:hidden text-gray-700">
    <svg fill="none" stroke="currentColor" :class="{ 'hidden': mode == false }"
    class="fill-current h-6 h-6" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8"><path d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"></path></svg>
    <svg fill="none" stroke="currentColor" :class="{ 'hidden': mode == true }"
    class="fill-current h-6 h-6" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8"><path d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
</button>

<button class="flex justify-center items-center h-10 px-5 lg:hidden focus:outline"
    onclick="navMenu.toggle()"
>
    <svg id="js-nav-menu-show" xmlns="http://www.w3.org/2000/svg"
        class="fill-current dark:text-white text-black h-9 w-4" viewBox="0 0 32 32"
    >
        <path d="M4,10h24c1.104,0,2-0.896,2-2s-0.896-2-2-2H4C2.896,6,2,6.896,2,8S2.896,10,4,10z M28,14H4c-1.104,0-2,0.896-2,2  s0.896,2,2,2h24c1.104,0,2-0.896,2-2S29.104,14,28,14z M28,22H4c-1.104,0-2,0.896-2,2s0.896,2,2,2h24c1.104,0,2-0.896,2-2  S29.104,22,28,22z"/>
    </svg>

    <svg id="js-nav-menu-hide" xmlns="http://www.w3.org/2000/svg"
        class="hidden fill-current dark:text-white text-black h-9 w-4" viewBox="0 0 36 30"
    >
        <polygon points="32.8,4.4 28.6,0.2 18,10.8 7.4,0.2 3.2,4.4 13.8,15 3.2,25.6 7.4,29.8 18,19.2 28.6,29.8 32.8,25.6 22.2,15 "/>
    </svg>
</button>

@push('scripts')
<script>
    const navMenu = {
        toggle() {
            const menu = document.getElementById('js-nav-menu');
            menu.classList.toggle('hidden');
            menu.classList.toggle('lg:block');
            document.getElementById('js-nav-menu-hide').classList.toggle('hidden');
            document.getElementById('js-nav-menu-show').classList.toggle('hidden');
        },
    }
</script>
@endpush
