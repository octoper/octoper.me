<button x-data="ToggleDark()" x-cloak x-init="created()" title="Dark Mode" @click.prevent="toggle()" class="lg:hidden ml-6 dark:text-gray-100 dark-hover:text-white text-gray-700">
    <svg fill="none" stroke="currentColor" class="fill-current h-8 h-8 lg:h-6 lg:h-6"
        stroke-linecap="round" stroke-linejoin="round" :class="{'hidden': mode == 'dark'}" stroke-width="2" viewBox="0 0 24 24">
        <path d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"></path>
    </svg>
    <svg fill="none" stroke="currentColor" class="fill-current h-8 h-8 lg:h-6 lg:h-6"
        stroke-linecap="round" stroke-linejoin="round" :class="{'hidden': mode == 'light'}" stroke-width="2" viewBox="0 0 24 24">
        <path
            d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z">
        </path>
    </svg>
</button>
<button class="flex justify-center items-center ml-8 lg:hidden focus:outline"
    @click.prevent="openNav = !openNav;" type="button" aria-label="Toggle Navigation Menu">
    <svg :class="{'hidden': openNav }" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="fill-current dark:text-white text-black h-10 w-10">
        <path d="M0 0h24v24H0V0z" fill="none"/>
        <path d="M4 18h16c.55 0 1-.45 1-1s-.45-1-1-1H4c-.55 0-1 .45-1 1s.45 1 1 1zm0-5h16c.55 0 1-.45 1-1s-.45-1-1-1H4c-.55 0-1 .45-1 1s.45 1 1 1zM3 7c0 .55.45 1 1 1h16c.55 0 1-.45 1-1s-.45-1-1-1H4c-.55 0-1 .45-1 1z"/>
    </svg>

    <svg :class="{'hidden': !openNav }" xmlns="http://www.w3.org/2000/svg" class="fill-current dark:text-white text-black h-10 w-10 hidden" viewBox="0 0 24 24">
        <path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"/><path d="M0 0h24v24H0z" fill="none"/>
    </svg>
</button>