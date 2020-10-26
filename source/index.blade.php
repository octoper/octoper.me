@extends('_layouts.master')

@section('body')

    <div class="grid grid-rows gap-2 lg:grid-cols-2 lg:gap-2">
        <div id="content" class="break-words">
            <h1 class="font-medium font-righteous text-center lg:text-left text-5xl xl:text-6xl">Hey!</h1>
            <p class="dark:text-white text-black text-lg mt-16">
                My name is Vaggelis and I'm a full-stack web developer, I live in Heraklion, Greece and I'm also
                a student at <br class="hidden lg:block"> <a href="https://www.csd.uoc.gr/CSD/index.jsp?lang=en"
                                                             title="Computer Science Department" class="under">Computer
                    Science Department</a> of
                <a href="http://en.uoc.gr/" title="University of Crete" class="under">University of Crete</a>.
            </p>

            <p class="text-lg">
                My speciality on the backend is Laravel, nowdays I use the TALL (TailwindCSS,AlpineJS,Laravel,Livewire)
                Stack
            </p>

            <p class="text-lg">
                I'm passionate about PWA's, Web components, Javascript, Rust and Python.
            </p>

            <p class="text-lg">
                Oh! and I forgot to say that I'm performance freak, I try to make every site
                as performant as possible (I'm getting very angry when PageSpeeds show's score < 85)</p>
            <p>
                I you want know if I'm available for hire contact me by clicking the Contact me button below and if you
                would like to support me and make it
                possible for me to continue sharing resources for free, you can help me by sponsoring me on GitHub
            </p>

            <div class="mt-6 flex flex-col lg:flex-row">
                <a href="/contact">
                    <div
                            class="w-full shadow-sm rounded lg:w-32 text-center py-3 px-4 button">
                        Contact me
                    </div>
                </a>
                <a target="_blank" class="mt-4 lg:mt-0 lg:ml-4" rel="noopener"
                   href="https://github.com/sponsors/octoper">
                    <div
                            class="w-full flex justify-center py-3 px-5 items-center button">
                        <x-icons.heart class="w-5 h-5 mr-4"></x-icons.heart>
                        Sponsor
                    </div>
                </a>
            </div>
        </div>
        <div class="row-start-1 mb-8 lg:mb-0 lg:mt-10 lg:row-start-auto">
            <img src="https://res.cloudinary.com/ddcfoiu4x/image/upload/v1603684582/octoper.me/6823226_lfm8qy.jpg"
                 alt="Octoper profile picture" width="200" height="200"
                 class="mx-auto border-2 border-white rounded-full">
        </div>
    </div>
    <x-newsletter-signup></x-newsletter-signup>
@endsection
