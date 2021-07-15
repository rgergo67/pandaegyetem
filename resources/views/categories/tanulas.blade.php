<x-sidebar-layout>
    <img src="/images/cikkek/category-tanulas.jpg" alt="Tanulás az egyetemen és a kollégiumban" class="w-full" />
    <h1 class="text-4xl border-b-4 p-4 my-4 w-full border-gray-600">Tanulás</h1>
    <div class="text-left space-y-2 mb-8">
        <p><strong>Jobb jegyek</strong>et szeretnél elérni, ráadásul <strong>kevesebb tanulás</strong>sal? Lehetséges!</p>
        <p>Mutatunk rengeteg technikát, tippet és trükköt, melyet mi magunk is rendszeresen használunk, ráadásul 2016 szeptember 30-ig ingyen megszerezheted&nbsp;könyvünket: <x-a href="{{ route('jobb-jegyek') }}"><strong>Jobb jegyek 10 lépésben: Hackeld meg az agyad!</strong></x-a> címmel!</p>
    </div>

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
