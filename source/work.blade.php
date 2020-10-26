---
title: Work
pagination:
    collection: projects
---
@extends('_layouts.master')

@push('meta')
    <meta property="og:title" content="{{ $page->siteName }} Work" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ $page->getUrl() }}"/>
    <meta property="og:description" content="{{ $page->siteName }} Work" />
@endpush

@section('body')
    <h1 class="text-center">Work</h1>

    <div class="flex flex-row space-x-4 justify-center items-center mt-8">
        <a href="#projects" class="py-2 px-4 shadow rounded-full bg-gray-100">Projects</a>
        <a href="#open-source" class="py-2 px-4 shadow rounded-full bg-gray-100">Open Source</a>
    </div>

    @if($pagination->items->count())
        <h2 id="projects" class="mt-16">Projects</h2>
        <div class="grid grid-row-1 mt-8 space-y-4">
            @foreach ($pagination->items as $project)
                @if(!$project->openSource)
                    <div class="border-b-2 border-gray-100 hover:bg-blue-100">
                        <a href="{{ $project->link }}" target="_blank" class="font-semibold under-1">{{ $project->title }}</a>
                        <p class="text-gray-500 text-sm break-words">{{ $project->description }}</p>
                    </div>
                @endif
            @endforeach
        </div>
    @endif

    @if($pagination->items->count())
        <h2 id="open-source" class="mt-16">Open Source</h2>
        <div class="grid grid-row-1 mt-8 space-y-4">
            @foreach ($pagination->items as $project)
                @if($project->openSource)
                    <div class="border-b-2 border-gray-100 hover:bg-blue-100">
                        <a href="{{ $project->link }}" target="_blank" class="font-semibold under-1">{{ $project->title }}</a>
                        <p class="text-gray-500 text-sm break-words">{{ $project->description }}</p>
                    </div>
                @endif
            @endforeach
        </div>
    @endif
@endsection

@push('scripts')
    <script src="{{ mix('js/blog.js', 'assets/build') }}"></script>
@endpush
