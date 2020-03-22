<template>
    <button title="Dark Mode" @click.prevent="toggle()" class="ml-6 dark:text-gray-100 dark-hover:text-white text-gray-700">
        <svg fill="none" stroke="currentColor" class="fill-current h-6 h-6"
            stroke-linecap="round" stroke-linejoin="round" :class="{'hidden': mode == 'dark'}" stroke-width="2" viewBox="0 0 24 24">
            <path d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"></path>
        </svg>
        <svg fill="none" stroke="currentColor" class="fill-current h-6 h-6"
            stroke-linecap="round" stroke-linejoin="round" :class="{'hidden': mode == 'light'}" stroke-width="2" viewBox="0 0 24 24">
            <path
                d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z">
            </path>
        </svg>
    </button>
</template>

<script>
    export default {
        name: 'dark-toggle',
        data() {
            return {
                mode: '',
            }
        },
        methods: {
            toggle() {
                if (this.mode == 'light') {
                    this.mode = 'dark';
                    localStorage.setItem('mode', this.mode);
                    document.querySelector('html').classList.add('mode-dark');
                } else {
                    this.mode = 'light';
                    localStorage.setItem('mode', this.mode);
                    document.querySelector('html').classList.remove('mode-dark');
                }
            }
        },
        created() {
            if (localStorage.getItem('mode') == 'dark') {
                this.mode = 'dark';
                document.querySelector('html').classList.add('mode-dark');
            } else {
                this.mode = 'light';
                document.querySelector('html').classList.remove('mode-dark');
            }

        }
    }
</script>
