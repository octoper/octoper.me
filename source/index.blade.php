@extends('_layouts.master')

@section('body')
    
    <div class="grid grid-rows gap-2 lg:grid-cols-2 lg:gap-2">
        <div id="content">
            <h2>Hello</h2>
            <h3>My name is Octoper <span class="text-gray-600 text-base">(or just Vaggelis)</span> </h3>
            <p class="text-black text-lg">
                I live in Heraklion, Greece and am passionate about PHP, Python and Javascript.
                I'm undergraduate student of the <a href="https://www.csd.uoc.gr/CSD/index.jsp?lang=en" title="Computer Science Department">CSD</a> of
                <a href="http://en.uoc.gr/" title="University of Crete">UoC</a>.
            </p>
            <p class="text-black text-lg">
                I'm a Laravel enthusiast, most of the websites and web apps are . 
            </p>
        </div>

        <div class="row-start-1 lg:row-start-auto">
            <picture>
                <source type="image/webp" srcset="/assets/img/about.webp">
                <source type="image/jpeg" srcset="/assets/img/about.jpg">
                <img src="/assets/img/about.jpg" alt="Octoper Avatar"
                class="rounded-full h-64 w-64 bg-contain mx-auto my-6">
            </picture>
        </div>
    </div>

    @include('_components.newsletter-signup')
@endsection
