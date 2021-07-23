<x-sidebar-layout>
    <x-seo title="{{ $article->title }}"
           :description="strip_tags($article->description)" />

    <article class="mb-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
        <img src="/images/cikkek/{{ $article->header_image }}" alt="{{ $article->title }}" class="mb-4 hidden md:block" loading="lazy" />
        <div class="prose lg:prose-lg max-w-none p-6">
            <h1>{{ $article->title }}</h1>
            <div class="font-bold">{!! $article->description !!}</div>
            {!! $content !!}
        </div>
    </article>
</x-sidebar-layout>
