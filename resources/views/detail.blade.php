@extends('layouts.app')

@section('title', 'Detail blog')

@section('content')
    <article class="max-w-2xl px-6 py-24 mx-auto space-y-12 text-gray-800">
        <div class="w-full mx-auto space-y-4">
            <p class="text-s font-bold tracki uppercase text-center">#Filament3</p>
            <img alt="{{ $blog->title }}" src="{{ $blog->getFirstMediaUrl() }}"
                class="h-100 w-full rounded-xl object-cover shadow-xl transition group-hover:grayscale-[50%]" />
            <h1 class="text-4xl font-bold leadi md:text-5xl ">{{ $blog->title }}</h1>
            <p class="text-sm text-gray-400">by
                <a rel="noopener noreferrer" href="#" target="_blank" class="underline text-violet-400">
                    <span itemprop="name">Fardi Khalik Ramadhan</span>
                </a>on
                <time>{{ Carbon\Carbon::parse($blog->created_at)->format('d-m-Y') }}</time>
            </p>
        </div>
        <div class="text-gray-500 text-justify">
            <p>{{ $blog->meta_description }}</p>
        </div>
        <div class="pt-8 border-t border-gray-500 text-justify">
            <p class="text-gray-400">{!! $blog->content !!}</p>
        </div>
    </article>
@endsections