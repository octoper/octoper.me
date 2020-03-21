<style>
input[name="search"] {
  background-image: url("/assets/img/magnifying-glass.svg");
  background-position: 0.8em;
  background-repeat: no-repeat;
  text-indent: 1.2em;
}

input[name="search"].transition-border {
  border-bottom-left-radius: 0;
  border-bottom-right-radius: 0;
  border-top-left-radius: 0.5rem;
  border-top-right-radius: 0.5rem;
}

.fade-enter-active {
  transition: opacity 0.5s;
}

.fade-leave-active {
  transition: opacity 0s;
}

.fade-enter,
.fade-leave-to {
  opacity: 0;
}
</style>


<div class="flex flex-1 justify-end items-center text-right px-4" x-data="searchInput()" x-init="created()">
    <div
      class="absolute md:relative w-full justify-end mt-16 md:mt-0 left-0 z-10 px-4 md:px-0"
      :class="{'hidden md:flex': true}"
    >
      <label for="search" class="hidden">Search</label>

      <input
        id="search"
        x-model="query"
        x-ref="search"
        class="transition-fast rounded relative block h-10 w-full lg:w-1/2 lg:focus:w-3/4
            bg-gray-100 focus:shadow-outline outline-none cursor-pointer text-gray-700 px-4 pb-0 pt-px"
        :class="{ 'transition-border': query }"
        autocomplete="off"
        name="search"
        placeholder="Search"
        type="text"
        x-on:blur="searching = false"
        x-on:keyup="searching = true"
        @keydown.escape="reset"
      />

      <button
        x-show="query || searching"
        class="absolute top-0 right-0 leading-snug font-400 text-3xl text-blue-500 hover:text-blue-600 focus:outline-none pr-6 md:pr-3"
        @click="reset"
      >&times;</button>

        <template x-if="results().length > 0 && searching">
            <div class="absolute left-0 right-0 md:inset-auto w-full lg:w-3/4 text-left mb-4 md:mt-10" >
                <div class="flex flex-col bg-white border border-b-0 border-t-0 border-blue-400 rounded-b-lg shadow-lg mx-4 md:mx-0">
                    <template x-for="(result, index) in results()" :key="result.link">
                        <div class="bg-white dark:bg-gray-100 dark:text-black dark-hover:text-black hover:bg-gray-100 border-b border-gray-400 text-xl cursor-pointer p-4">
                            <a  :class="{ 'rounded-b-lg' : (index === results().length - 1) }"
                                :href="result.link"
                                class="dark:text-black dark-hover:text-black hover:bg-gray-100 text-xl cursor-pointer p-4"
                                :title="result.title"
                                x-text="result.title" @mousedown.prevent>
                            </a>
                            <p  class="block font-normal dark:text-gray-700 dark-hover:text-gray-900 text-gray-700 text-sm px-4 my-1"
                                :href="result.link"
                            x-html="result.snippet"></p>
                        </div>
                    </template>

                    <template x-if="!results()">
                        <div

                        class="bg-white w-full hover:bg-gray-100 border-b border-gray-400 rounded-b-lg shadow cursor-pointer p-4"
                        >
                            <p class="my-0">
                                No results for
                                <strong x-text="query"></strong>
                            </p>
                        </div>
                    </template>
                </div>
            </div>
        </template>
    </div>

    <button
      title="Start searching"
      type="button"
      class="flex md:hidden dark:bg-gray-800 bg-gray-100 hover:bg-gray-200 justify-center items-center focus:outline-none h-10 px-3"
      @click.prevent="showInput"
    >
      <img src="/assets/img/magnifying-glass.svg" alt="search icon" class="fill-current text-gray-900 h-4 w-4 max-w-none" />
    </button>
</div>

@push('scripts')
<script>
    function searchInput() {
        return {
            fuse: null,
            searching: false,
            query: "",
            results() {
                return this.query ? this.fuse.search(this.query) : [];
            },
            reset() {
                this.query = "";
                this.searching = false;
            },
            showInput() {
                this.searching = true;
                this.$nextTick(() => {
                    this.$refs.search.focus();
                });
            },
            created() {
                axios("/index.json").then(response => {
                    this.fuse = new Fuse(response.data, {
                        minMatchCharLength: 6,
                        keys: ["title", "snippet", "categories"]
                    });
                });

            }
        }
    }
</script>
@endpush
