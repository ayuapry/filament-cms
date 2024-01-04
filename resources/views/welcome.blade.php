@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <h1>My Blogs</h1>
    <div class="mt-16">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">
            @foreach ($blogs as $blog)
                <article class="group">
                    <img alt="{{ $blog->title }}" src="{{ $blog->getFirstMediaUrl() }}"
                        class="h-56 w-full rounded-xl object-cover shadow-xl transition group-hover:grayscale-[50%]" />

                    <div class="p-4">
                        <a href="blog/{{ $blog->id }}">
                            <h3 class="text-lg font-medium text-gray-900">{{ $blog->title }}</h3>
                        </a>

                        <p class="mt-2 line-clamp-3 text-sm/relaxed text-gray-500">
                            {{ $blog->meta_description }}
                        </p>
                    </div>
                </article>
            @endforeach
        </div>
    </div>
@endsection