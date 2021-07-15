<x-sidebar-layout>
    <img src="/images/cikkek/category-kollegium.jpg" alt="Élet az egyetemen és a kollégiumban" class="w-full" />
    <h1 class="text-4xl border-b-4 p-4 my-4 w-full border-gray-600">Élet az egyetemen és a kollégiumban</h1>
    <p class="mb-8">Gyötör a <strong>honvágy</strong>, de le szeretnéd gyűrni? Ki akarod&nbsp;használni a kollégiumban rejlő <strong>kapcsolatépítés</strong>i lehetőségeket? Ki szeretnél tűnni a tömegből, hogy <strong>siker</strong>es lehess?</p>

    @foreach ($articles as $article)
        <article class="mb-16 bg-white shadow-md overflow-hidden sm:rounded-lg">
            <a href="{{ route('articles.public_show', $article->slug) }}">
                <img src="/images/cikkek/{{ $article->header_image }}" alt="{{ $article->title }}" class="w-full" />
            </a>
            <div class="prose lg:prose-lg max-w-none p-6">
                <h2 class="pb-4"><a href="{{ route('articles.public_show', $article->slug) }}">{{ $article->title }}</a></h2>
                {!! $article->description !!}
            </div>
            <a class="block w-full bg-yellow-600 text-2xl text-white p-4" href="{{ route('articles.public_show', $article->slug) }}">Olvasd el a teljes cikket...</a>
        </article>
    @endforeach
</x-sidebar-layout>
