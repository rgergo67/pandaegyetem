<footer class="bg-white pt-12 pb-8 lg:px-5 border-yellow-600 border-t-2">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-wrap text-center xl:text-left">
            <div class="xl:w-1/4 lg:w-1/2 w-full md:block hidden xl:mb-0 mb-4 xl:mx-auto">
                <img src="{{ asset('images/panda-egyetem-mobile-logo.png') }}" class="block h-10 w-auto fill-current text-gray-600" width="230px" height="41px" alt="Panda Egyetem logó" />
            </div>

            <div class="xl:w-1/4 lg:w-1/2 w-full xl:mb-0 mb-4">
                <h4 class="text-xl text-gray-800 font-modlr tracking-wide font-semibold leading-tight mb-3">Információk</h4>
                <ul>
                    <li><a class="hover:text-primary py-1 block" href="{{ route('aszf') }}">ÁSZF</a></li>
                    <li><a class="hover:text-primary py-1 block" href="{{ route('credit') }}">Források</a></li>
                </ul>
            </div>

            <div class="xl:w-1/4 lg:w-1/2 w-full xl:mb-0 mb-4">
                <h4 class="text-xl text-gray-800 font-modlr tracking-wide font-semibold leading-tight mb-3">Navigáció</h4>
                <ul>
                    <li><a href="{{ route('categories.tanulas') }}" class="hover:text-primary py-1 block">Tanulás</a></li>
                    <li><a href="{{ route('categories.penz') }}" class="hover:text-primary py-1 block">Pénz</a></li>
                    <li><a href="{{ route('categories.kollegium') }}" class="hover:text-primary py-1 block">Kollégium</a></li>
                    <li><a href="https://beosztom.hu" class="hover:text-primary py-1 block">Spórolás: Beosztom.hu</a></li>
                </ul>
            </div>

            <div class="xl:w-1/4 lg:w-1/2 w-full  xl:mb-0 mb-4">
                <h4 class="text-xl text-gray-800 font-modlr tracking-wide font-semibold leading-tight mb-3">Fizetés</h4>
                <img class="block mx-auto w-max w-100" alt="Barion fizetés" src="{{ asset('images/barion.png') }}" loading="lazy" width="400" height="42">
                <a class="hover:text-primary py-1 block" href="/barion">Mi az a Barion?</a>
            </div>
        </div>
    </div>

    <div class="text-center pt-8 pb-2  xl:px-0 px-5">
        <p class="text-gray-500">Copyright © <a href="https://67developer.hu" class="hover:text-primary font-semibold">Ratting Gergely</a>. {{ date('Y') }} • Minden jog fenntartva</p>
    </div>
</footer>
