<x-public-layout>
    <div class="min-h-screen bg-white">
        <x-public-navigation />

        <main class="pt-8">
            <div class="bg-gray-100">
                <div class="relative bg-white">
                    <div class="max-w-7xl mx-auto relative">
                        <div class="relative z-10 pb-8 bg-white sm:pb-16 md:pb-20 lg:w-1/2 lg:pb-28 xl:pb-32">
                            <div class="mt-10 mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                                <div class="text-center lg:text-left">
                                    <h1 class="text-4xl font-extrabold text-gray-900 sm:text-5xl md:text-6xl leading-tight">
                                        <span class="block">Maxold ki</span>
                                        <span class="block text-yellow-600">a sulis éveid!</span>
                                    </h1>
                                    <p class="mt-3 text-base text-gray-500 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
                                        Cikkek középiskolásoknak és egyetemistáknak tanulási technikákról, egyetemi és kollégiumi életről, illetve spórolásról és pénzszerzésről.
                                    </p>
                                    <div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-start">
                                        <div class="rounded-md shadow">
                                            <a href="{{ route('jobb-jegyek') }}" class="w-full flex items-center justify-center px-8 py-3 border border-transparent bg-green-700 hover:bg-green-800 text-base font-medium rounded-md text-white md:py-4 md:text-lg md:px-10">
                                                Olvasd el könyvünket
                                            </a>
                                        </div>
                                        <div class="mt-3 sm:mt-0 sm:ml-3">
                                            <a href="/#cikkek" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-yellow-700 bg-yellow-100 hover:bg-yellow-50 hover:border-yellow-700 md:py-4 md:text-lg md:px-10">
                                                Népszerű cikkeink
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
                            <img src="{{ asset('images/egyetem.svg') }}" class="mx-auto" alt="Élet az egyetemen és a kollégiumban" width="640" height="361" />
                        </div>
                    </div>
                </div>
                <section class="bg-gray-100 max-w-7xl mx-auto">
                    <div class="flex flex-col h-full py-16 md:flex-row-reverse">
                        <div class="flex-1 mb-6 mx-6">
                            <div class="text-center md:text-left">
                                <h2 id="problema" class="text-base text-yellow-600 font-semibold tracking-wide uppercase">Tanulás</h2>
                                <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                                    Jobb jegyek, kevesebb tanulással?
                                </p>
                                <p class="mt-2 text-xl text-gray-800 italic">
                                    Lehetséges!
                                </p>
                                <div class="mt-4 text-xl text-gray-800 text-left space-y-4">
                                    <p>Nem a magyar a legjobb oktatási rendszer a világon. Bár vannak lelkes pedagógusok, akik próbálnak újítani, a kezük nekik is meg van kötve.</p>
                                    <p>Rengeteg a magolni való, az évszámok, nevek, helyszínek, sokszor jogosan felmerül bennünk a kérdés, hogy <em>Ennek az egésznek mi értelme?</em></p>
                                    <p>Ráadásul a tanulás nem áll meg az információ megszerzésével: hiába tudsz valamit, ha számonkérés során leblokkol az agyad, vagy felelet / előadás során lámpalázad van.</p>
                                    <p>Könyvünk és az oldal cikkeinek egy része arról szól, <x-a href="{{ route('articles.public_show', 'hatekony-tanulas-muveszete-hogyan-mukodik-az-agy') }}">hogyan működik az agy tanulás közben</x-a>, <x-a href="{{ route('articles.public_show', 'hatekony-tanulas-muveszete-tanulasi-technikak') }}">hogyan lehet hatékonyabban tanulni</x-a>, és <x-a href="{{ route('articles.public_show', 'a-halogatas-legyozese-surgos-es-fontos') }}">hogyan lehet legyőzni a halogatást</x-a>.</p>
                                </div>
                                <a href="{{ route('jobb-jegyek') }}" class="btn bg-yellow-600 mt-8 text-xl">Jobb jegyek 10 lépésben</a>
                            </div>
                        </div>
                        <div class="flex flex-1">
                            <a class="mx-auto" href="{{ route('jobb-jegyek') }}">
                                <picture>
                                    <source type="image/webp" media="(min-width:640px)" srcset="{{ asset('images/jobb-jegyek-10-lepesben-borito-sidebar.webp') }}">
                                    <img class="w-full" src="{{ asset('images/jobb-jegyek-10-lepesben-borito-sidebar.png') }}" width="1200" height="713" loading="lazy"  alt="Jobb jegyek 10 lépésben: Hackeld meg az agyad!">
                                </picture>
                            </a>
                        </div>
                    </div>
                </section>

                <section class="bg-white">
                    <div class="flex flex-col max-w-7xl mx-auto h-full py-16 md:flex-row">
                        <div class="flex-1 mb-6 mx-6">
                            <div class="text-center md:text-left">
                                <h2 id="megoldas" class="text-base text-yellow-600 font-semibold tracking-wide uppercase">Pénz</h2>
                                <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                                    Gazdálkodj okosan diákként!
                                </p>
                                <p class="mt-2 text-xl text-gray-800 italic">
                                    Spórolás, diákmunka, diákhitel
                                </p>
                                <div class="mt-4 text-xl text-gray-800 text-left space-y-4">
                                    <p><b>Egyetem</b>: <em>barátok, buli, rendezvények, tudás, élmények, játékok, nevetés…</em> és még sorolhatnánk a jó dolgokat. Hogy néz ki mindez pénzügyi szempontból?</p>

                                    <p><b>Egyetem</b>: <em>diákhitel, rezsi, koli díj, buszjegy, tandíj, tankönyvek, teleonfszámla, gyorskaja.</em> Ezek már nem hangzanak olyan jól, pedig ugyanúgy hozzátartozik.</p>

                                    <p>Munkával és <x-a href="{{ route('categories.penz') }}">pénzügyekkel</x-a> kapcsolatos cikkeinkben saját tapasztalatainkat írtuk le, és összeszedtük azokat az oldalakat, amik hasznosak lehetnek neked akár középiskolásként, akár egyetemistaként.</p>

                                    <p>Készítettünk továbbá egy alkalmazást, amivel egyszerűen oszthatod be a meglevő pénzed:</p>

                                </div>
                                <a href="{{ route('beosztom.diak') }}" class="btn bg-green-700 mt-8 text-xl">Beosztom.hu</a>
                            </div>
                        </div>
                        <div class="flex flex-1">
                            <img src="{{ asset('images/megoldas.svg') }}" class="w-full h-auto" loading="lazy" width="253" height="150" alt="A megoldás ha beosztom a pénzt" />
                        </div>
                    </div>
                </section>

                <section class="bg-gray-100 max-w-7xl mx-auto">
                    <div class="flex flex-col h-full py-16 md:flex-row-reverse">
                        <div class="flex-1 mb-6 mx-6">
                            <div class="text-center md:text-left">
                                <h2 id="kinek" class="text-base text-yellow-600 font-semibold tracking-wide uppercase">Élet a kollégiumban</h2>
                                <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                                    A legszebb évek, érezd jól magad!
                                </p>
                                <p class="mt-2 text-xl text-gray-800 italic">
                                    Ezt is meg kell tanulni
                                </p>
                                <div class="mt-4 text-xl text-gray-800 text-left space-y-4">
                                    <p>A kollégium teljesen átformálja az embert: sokkal önállóbb leszel, nyíltabb, közvetlenebb, kezdeményezőbb, bevállalósabb, talpraesettebb, és még sorolhatnánk. </p>
                                    <p>Az eleje nehéz lehet, főleg ha elfog a honvágy, velünk is ez volt. Szerencsére szüleink "erőltették" a koleszt, mi pedig nagyon hálásak vagyunk ezért!</p>
                                    <p>Elmondjuk, hogy miket érdemes magaddal vinni beköltözéskor, és miket nem, hogy milyen egy szoba szépség verseny, vagy hogy mi az a senior, és miért jó bevállalni a programok szervezését.</p>
                                </div>
                                <a href="{{ route('categories.kollegium') }}" class="btn bg-yellow-600 mt-8 text-xl">Cikkek a kollégiumról</a>
                            </div>
                        </div>
                        <div class="flex flex-1">
                            <img src="{{ asset('images/kollegium.svg') }}" class="w-full" loading="lazy" width="240" height="150" alt="Beosztom.hu célközönsége széles körű" />
                        </div>
                    </div>
                </section>

                <!-- This example requires Tailwind CSS v2.0+ -->
                <div class="py-12 bg-white">
                    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                        <div class="lg:text-center">
                            <h2 id="ar" class="text-base text-yellow-600 font-semibold tracking-wide uppercase">Ár: 1.990 Ft</h2>
                            <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                                Jobb jegyek 10 lépésben
                            </p>
                            <p class="mt-4 max-w-2xl text-xl text-gray-500 lg:mx-auto">
                                Hackeld meg az agyad!
                            </p>
                        </div>

                        <div class="mt-10">
                            <dl class="space-y-10 md:space-y-0 md:grid md:grid-cols-2 md:gap-x-8 md:gap-y-10">
                                <div class="relative">
                                    <dt>
                                        <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-yellow-500 text-white">
                                            <!-- Heroicon name: outline/globe-alt -->
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                            </svg>
                                        </div>
                                        <p class="ml-16 text-lg leading-6 font-medium text-gray-900">És ... ez működik?</p>
                                    </dt>
                                    <dd class="mt-2 ml-16 text-base text-gray-500">
                                        Megpróbáltuk a tapasztalatainkat élvezhetően olvasmányos formában átadni, valószínűleg mindenki talál majd benne számára hasznos, és teljesen triviális dolgokat is. Tanulni nyilván nem fog helyetted :)
                                    </dd>
                                </div>

                                <div class="relative">
                                    <dt>
                                        <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-yellow-500 text-white">
                                            <!-- Heroicon name: outline/scale -->
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 015.636 5.636m12.728 12.728L5.636 5.636" />
                                            </svg>
                                        </div>
                                        <p class="ml-16 text-lg leading-6 font-medium text-gray-900">Akkor ez egy könyv?</p>
                                    </dt>
                                    <dd class="mt-2 ml-16 text-base text-gray-500">
                                        Ez egy 90 oldalas pdf formátumú e-book, nem fizikai könyv. Előnye, hogy ha a tartalma frissül, az új verziót elküldjük annak is, aki korábban vásárolta meg.
                                    </dd>
                                </div>

                                <div class="relative">
                                    <dt>
                                        <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-yellow-500 text-white">
                                            <!-- Heroicon name: outline/lightning-bolt -->
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg>
                                        </div>
                                        <p class="ml-16 text-lg leading-6 font-medium text-gray-900">Miért írtátok?</p>
                                    </dt>
                                    <dd class="mt-2 ml-16 text-base text-gray-500">
                                        A középiskola, az egyetem és a kollégiumi évek életünk legjobb részei voltak. Nekünk sikerült megtalálni az aranyközéputat a tanulás és a szórakozás között. Szeretnénk, ha ez minél több embernek sikerülne.
                                    </dd>
                                </div>

                                <div class="relative">
                                    <dt>
                                        <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-yellow-500 text-white">
                                            <!-- Heroicon name: outline/annotation -->
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg>
                                        </div>
                                        <p class="ml-16 text-lg leading-6 font-medium text-gray-900">1.990 Ft nem sok?</p>
                                    </dt>
                                    <dd class="mt-2 ml-16 text-base text-gray-500">
                                        Ha nem engedheted meg magadnak, tegyél egy próbát a <x-a href="https://beosztom.hu" target="_blank" rel="noopener">beosztom.hu</x-a> alkalmazásunkkal, amit fél évig ingyen tudsz használni, hátha segít megspórolni a könyv árát.
                                    </dd>
                                </div>
                            </dl>
                        </div>
                    </div>
                </div>

                <section class="bg-yellow-600">
                    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
                        <div class="lg:text-center">
                            <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-white sm:text-4xl">
                                Olvass bele!
                            </p>
                            <p class="mt-4 max-w-2xl text-xl text-white lg:mx-auto">
                                Nem árulunk zsákba-pandát, vess egy pillantást az első néhány oldalra!
                            </p>
                        </div>
                        <div class="mt-10">
                            <div class="mt-5 sm:mt-8 sm:flex sm:justify-center">
                                <div class="rounded-md shadow">
                                    <a href="{{ asset('files/jobb_jegyek_10_lepesben-1-9.pdf') }}" target="_blank" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-bold rounded-md text-yellow-600 bg-gray-100 hover:bg-white hover:shadow-lg md:py-4 md:text-lg md:px-10">
                                        Belenézek!
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="py-12 bg-gray-100">
                    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                        <div class="lg:text-center">
                            <h2 id="cikkek" class="text-base text-yellow-600 font-semibold tracking-wide uppercase">Cikkek</h2>
                            <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                                Ha van időd, ezeket érdemes elolvasni
                            </p>
                            <p class="mt-4 text-xl text-gray-800 italic max-w-2xl lg:mx-auto">
                                Ne a mestereket kövesd, hanem azokat, akiket a mesterek követtek
                            </p>
                        </div>

                        <div class="flex flex-wrap mt-10">
                            <div class="xl:w-1/3 lg:w-1/3 w-full p-4">
                                <a href="{{ route('articles.public_show', '60-dolog-ami-nelkul-ne-koltozz-koliba') }}">
                                    <div class="bg-white rounded-md p-8 shadow-md h-full">
                                        <h3 class="text-xl text-gray-800 tracking-wide font-semibold leading-tight  mb-3">60 dolog ami nélkül ne költözz koliba</h3>
                                        <p class="text-lg text-gray-800">Még a felsősök is otthon hagynak néhány dolgot kollégiumi beköltözésnél, így összeszedtünk egy csomagtartónyi cuccot, amire lehet, hogy nem gondoltál.</p>
                                    </div>
                                </a>
                            </div>

                            <div class="xl:w-1/3 lg:w-1/3 w-full p-4">
                                <a href="{{ route('articles.public_show', '32-tanacs-ha-elsos-vagy-az-egyetemen') }}">
                                    <div class="bg-white rounded-md p-8 shadow-md h-full">
                                        <h3 class="text-xl text-gray-800 tracking-wide font-semibold leading-tight  mb-3">32 tanács, ha elsős vagy az egyetemen</h3>
                                        <p class="text-lg text-gray-800">Ha valaki tanácsokkal látott volna el már az elején, biztosan sokkal könnyebben vettem volna az akadályokat. Éppen ezért megosztom veled azt a 30+ dolgot, amit elsősként megtanultam az egyetemen (vagy legalábbis jó lett volna, ha valaki elmondja).</p>
                                    </div>
                                </a>
                            </div>

                            <div class="xl:w-1/3 lg:w-1/3 w-full p-4">
                                <a href="{{ route('articles.public_show', 'hatekony-tanulas-muveszete-hogyan-mukodik-az-agy') }}">
                                    <div class="bg-white rounded-md p-8 shadow-md h-full">
                                        <h3 class="text-xl text-gray-800 tracking-wide font-semibold leading-tight  mb-3">Hatékony tanulás művészete</h3>
                                        <p class="text-lg text-gray-800">Ha tudod, hogy egy definíció megtanulása rendkívül fontos, vajon miért nem elég csupán egyszer elolvasni? Mitől függ, hogy egy új információ megragad-e az elmédben, vagy másnapra köddé foszlik? (L)ássunk az agyad mélyére!</p>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="text-center mt-10">
                            <div class="text-gray-800 text-lg">Ha a spórolás érdekel, <x-a target="_blank" href="https://beosztom.hu" class="group" rel="noopener">nézd meg beosztom.hu oldalunkat<svg width="1em" height="1em" viewBox="0 0 18 18" class="inline-block ml-1 -mt-0.5 transition-transform transform group-hover:translate-x-1" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                                    </svg></x-a></div>
                        </div>
                    </div>
                </section>
            </div>
        </main>

        <x-footer />
    </div>
</x-public-layout>
