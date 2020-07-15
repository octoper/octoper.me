@extends('_layouts.master')

@section('body')

<div class="grid grid-rows xl:grid-cols-2 mt-10 xl:gap-2">
    <div id="content" class="break-words">
        <h1 class="font-medium font-righteous text-6xl">Hey!</h1>
        <p class="dark:text-white text-black text-lg mt-16">
            My name is Vaggelis and I'm a full-stack web developer, I live in Heraklion, Greece and I'm also
            a student at <br class="hidden lg:block"> <a href="https://www.csd.uoc.gr/CSD/index.jsp?lang=en"
                title="Computer Science Department" class="under">Computer Science Department</a> of
            <a href="http://en.uoc.gr/" title="University of Crete" class="under">University of Crete</a>.
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
            Oh! and I forgot to say that I'm performance freak, I try to make every site
            as performant as possible (I'm getting very angry when PageSpeeds show's score < 85) </p> <p>
                I you want know if I'm available for hire or If you would like to support me and make it
                possible for me to continue sharing resources for free, you can help me by sponsoring me on GitHub
        </p>
        <div class="mt-6 flex flex-col lg:flex-row">
            <a href="/contact">
                <div
                    class="w-full shadow-sm rounded lg:w-32 text-center py-3 px-4 button">
                    Contact me
                </div>
            </a>
            <a target="_blank" class="mt-4 lg:mt-0 lg:ml-4" rel="noopener" href="https://github.com/sponsors/octoper">
                <div
                    class="w-full flex justify-center py-3 px-5 items-center button">
                    <x-i-heart class="w-5 h-5 mr-4"></x-i-heart>
                    Sponsor
                </div>
            </a>
        </div>
    </div>

</div>
<x-newsletter-signup></x-newsletter-signup>
@endsection
