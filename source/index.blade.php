@extends('_layouts.master')

@section('body')
    
    <div class="grid grid-rows gap-2 lg:grid-cols-2 lg:gap-2">
        <div id="content" class="break-words">
            <h1 class="font-medium">Hello</h1>
            <h3 class="font-medium">My name is Vaggelis</h3>
            <p class="text-black text-lg">
                I'm a full-ftack web developer, I live in Heraklion, Greece and I'm also
                a student at <a href="https://www.csd.uoc.gr/CSD/index.jsp?lang=en" title="Computer Science Department">Computer Science Department</a> of
                <a href="http://en.uoc.gr/" title="University of Crete">University of Crete</a>.
            </p>

            <p class="text-lg">
                My speciality on the backend is Laravel, on the frontend is VueJS and nowdays I use TailwindCSS for styling.
            </p>

            <p class="text-lg">
                I'm passionate about PWA's, Web components and also I'm a website performance freak I optimize the speed of
                a website to be as fast as possible.
            </p>

            <p class="text-lg">
                I'm passionate about PWA's, Javascript, Rust and Python.<br>
                Oh! and I forgot to say that I'm website performance freak, I try to make every site
                as performance as possible (I'm getting very ungry when PageSpeeds show's score < 85)
            </p>

            <p>
                I you want know if I'm available for hire or If you would like to support me and make it
                possible for me to continue sharing resources for free, you could donate through the Buy me a coffee button below.
            </p>
            <div class="mt-6 flex flex-col lg:flex-row">
                <a href="/contact">
                    <div class="w-full shadow-sm rounded lg:w-32 text-center hover:text-white py-3 px-4 text-white bg-blue-700">
                        Contact me
                    </div>
                </a>
                <a href="/contact">
                    <div class="mt-4 lg:mt-0 lg:ml-4 w-full shadow-sm flex justify-center items-center rounded hover:text-white py-3 px-4 text-white bg-blue-700">
                        @include('_assets.bmc')
                        Buy me a coffee
                    </div>
                </a>
            </div>
        </div>

        <div class="row-start-1 lg:row-start-auto">
            <picture>
                <source type="image/webp" data-srcset="/assets/img/about.webp">
                <source type="image/jpeg" data-srcset="/assets/img/about.jpg">
                <img data-src="/assets/img/about.jpg" alt="Octoper Avatar"
                class="lazyload rounded-full h-64 w-64 bg-contain mx-auto my-6">
            </picture>
        </div>
    </div>
    @include('_components.newsletter-signup')
@endsection
