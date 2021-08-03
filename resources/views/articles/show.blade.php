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
        <hr>
        <div class="text-lg max-w-none p-6">
            <h2 class="text-4xl font-bold mb-4">Legyen több pénzed, mint a szüleidnek!</h2>
            <p class="mb-10">Minél fiatalabban kezdesz el odafigyelni a pénzügyeidre, annál nagyobb az esély rá, hogy sikerülni fog.</p>
            <a href="{{ route('beosztom.diak') }}?utm_source=website&utm_medium=banner&utm_campaign=legyentobb&utm_id=beosztom&utm_term=legyentobb&utm_content=below_article" target="_blank" class="bg-green-700 text-white text-xl p-4 text-center my-2 rounded-md bg-green-800 block" rel="noopener">
                Beosztom.hu
            </a>
        </div>
    </article>
</x-sidebar-layout>
