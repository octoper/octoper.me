---
pagination:
    collection: posts
    perPage: 4
---
@extends('_layouts.master')

@push('meta')
    <meta property="og:title" content="{{ $page->siteName }} Blog" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ $page->getUrl() }}"/>
    <meta property="og:description" content="The list of blog posts for {{ $page->siteName }}" />
@endpush

@section('body')
    <h1>Blog</h1>

    <hr class="border-b my-6">


    @if($pagination->items->count())
        @foreach ($pagination->items as $post)
            @include('_components.post-preview-inline')

            @if ($post != $pagination->items->last())
                <hr class="border-b my-6">
            @endif
        @endforeach
    @else
        <h1>I haven't post anything yert</h1>
    @endif

    @if ($pagination->pages->count() > 1)
        <nav class="flex text-base my-8">
            @if ($previous = $pagination->previous)
                <a
                    href="{{ $previous }}"
                    title="Previous Page"
                    class="bg-gray-200 hover:bg-gray-400 rounded mr-3 px-5 py-3"
                >&LeftArrow;</a>
            @endif

            @foreach ($pagination->pages as $pageNumber => $path)
                <a
                    href="{{ $path }}"
                    title="Go to Page {{ $pageNumber }}"
                    class="bg-gray-200 hover:bg-gray-400 text-gray-700 rounded mr-3 px-5 py-3 {{ $pagination->currentPage == $pageNumber ? 'text-gray-600' : '' }}"
                >{{ $pageNumber }}</a>
            @endforeach

            @if ($next = $pagination->next)
                <a
                    href="{{ $next }}"
                    title="Next Page"
                    class="bg-gray-200 hover:bg-gray-400 rounded mr-3 px-5 py-3"
                >&RightArrow;</a>
            @endif
        </nav>
    @endif
@stop

@push('scripts')
<script src="{{ mix('js/blog.js', 'assets/build') }}"></script>
@endpush
