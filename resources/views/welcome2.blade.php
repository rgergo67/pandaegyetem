<x-public-layout>
    <div class="flex flex-col lg:flex-row w-full">
        <x-figure name="panda-egyetem-logo-nagy" title="Panda Egyetem logo" :withCaption="false" class="lg:w-1/3" />
        <div class="lg:w-2/3 text-center text-xl space-y-4">
            <h2 class="uppercase text-4xl font-extrabold">Maxold ki az egyetemet!</h2>

            <ul class="font-semibold space-y-2">
                <li>1. Tanulj hatékonyabban!</li>
                <li>2. Szerezd meg az álom melót!</li>
                <li>3. Fizesd ki a diákhitelt!</li>
            </ul>

            <p class="italic">A Panda Egyetemet azért hoztuk létre, hogy mindhárom cél elérésében segítsünk.</p>

            <a class="btn bg-yellow-600 font-bold" href="{{ route('jobb-jegyek') }}">Kezdjük a legfontosabbal!</a>
        </div>
    </div>

    <h2 class="text-4xl my-16 w-full text-center">Így segítünk végig a középiskolán és az egyetemen:</h2>
    <div class="flex flex-col lg:flex-row lg:space-x-8">
        <div class="text-center">
            <a href="{{ route('categories.tanulas') }}">
                <x-figure name="tanulas" title="Tanulási módszerek" :withCaption="false" />
            </a>
            <h3 class="text-2xl my-4">Tanulj hatékonyan</h3>
            <p class="mb-4">Szerezz jobb jegyet, kevesebb és gyorsabb tanulással.</p>
            <a class="btn bg-green-600" href="{{ route('categories.tanulas') }}">
                Tudj meg többet!
            </a>
        </div>
        <div class="text-center">
            <a href="{{ route('categories.penz') }}">
                <x-figure name="penz" title="Spórolj" :withCaption="false" />
            </a>
            <h3 class="text-2xl my-4">Spórolj</h3>
            <p class="mb-4">Osszd be, minimalizáld a kiadásaid, törleszd a diákhiteled.</p>
            <a class="btn bg-green-600" href="{{ route('categories.penz') }}">
                Tudj meg többet!
            </a>
        </div>
        <div class="text-center">
            <a href="{{ route('categories.tanulas') }}">
                <x-figure name="tanulas" title="Tanulási módszerek" :withCaption="false" />
            </a>
            <h3 class="text-2xl my-4">Tanulj hatékonyan</h3>
            <p class="mb-4">Szerezz jobb jegyet, kevesebb és gyorsabb tanulással.</p>
            <a class="btn bg-green-600" href="{{ route('categories.tanulas') }}">
                Tudj meg többet!
            </a>
        </div>
        <div class="text-center">
            <a href="{{ route('categories.tanulas') }}">
                <x-figure name="tanulas" title="Tanulási módszerek" :withCaption="false" />
            </a>
            <h3 class="text-2xl my-4">Tanulj hatékonyan</h3>
            <p class="mb-4">Szerezz jobb jegyet, kevesebb és gyorsabb tanulással.</p>
            <a class="btn bg-green-600" href="{{ route('categories.tanulas') }}">
                Tudj meg többet!
            </a>
        </div>
    </div>
</x-public-layout>
