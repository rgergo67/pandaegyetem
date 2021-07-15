<x-sidebar-layout>
    <img src="/images/cikkek/category-penzugyek.jpg" alt="Tanulj meg bánni a pénzzel diákként" class="w-full" />
    <h1 class="text-4xl border-b-4 p-4 my-4 w-full border-gray-600">Tanulj meg bánni a pénzzel diákként</h1>
    <div class="text-left space-y-2 mb-8">
        <p><strong>Egyetem:</strong> <em>barátok, buli, rendezvények, tudás, élmények, játékok, nevetés...</em> és még sorolhatnánk a jó dolgokat. De mutatunk valami mást.</p>
        <p><strong>Szintén egyetem:</strong> <em>diákhitel, rezsi, koli díj, buszjegy, tandíj, tankönyvek, telefonszámla, spórolás...</em></p>
        <p>A Panda Egyetem pénzügyes részlege megmutatja, hogyan tanulj meg bánni a pénzzel az egyetemen, hogy a második helyett az első verzióval foglalkozhass!</p>
    </div>

    <article class="mb-16 bg-white shadow-md overflow-hidden sm:rounded-lg">
        <a href="https://beosztom.hu/tanuld-meg-beosztani-a-penzed-diakkent" target="_blank" rel="noopener">
            <img src="/images/cikkek/beosztom_hu_header.png" alt="Tanuld meg beosztani a pénzed diákként" class="w-full" />
        </a>
        <div class="prose lg:prose-lg max-w-none p-6">
            <h2 class="pb-4"><a href="https://beosztom.hu/tanuld-meg-beosztani-a-penzed-diakkent" rel="noopener" target="_blank">Tanuld meg beosztani a pénzed diákként</a></h2>
            <p>Diákként egyre több kiadásod lesz az évek során: buszjegy, koli díj, rezsi, kaja, tankönyvek, diákhitel. Ezek egy részére szüleid adnak pénzt, a maradékot diákmunkából kell majd kipótolnod. A <x-a href="https://beosztom.hu" rel="noopener" target="_blank">Beosztom.hu</x-a> ennek a pénznek a beosztásában segítünk. </p>
        </div>
        <a class="block w-full bg-yellow-600 text-2xl text-white p-4" href="https://beosztom.hu/tanuld-meg-beosztani-a-penzed-diakkent" rel="noopener" target="_blank">Olvasd el a teljes cikket...</a>
    </article>

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
