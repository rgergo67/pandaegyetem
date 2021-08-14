<x-prose-layout>
    <x-seo title="Sikeres fizetés" />

    <h3>Köszönjük!</h3>

    <p>A fizetés sikeres volt, a könyvet a lenti gombra kattintva tudod letölteni, de automatikus e-mailben is elküldjük nemsokára. Ha valami probléma merül fel, a {{ config('mail.reply_to.address') }} címen tudod ezt jelezni, és megpróbáljuk minél hamarabb orvosolni.</p>

    <a class="btn bg-green-700" id="olvass-bele" target="_blank" href="https://drive.google.com/file/d/1w6COiSTFBDliDFvxKNJzxRR0iWmEFjq-/view?usp=sharing">Könyv letöltése</a>

    <p>Ez egy tömörített ZIP fájl, ami tartalmazza a könyvet és az ajándék Jelvény tervezőt illetve Kérdőív játékosítót. Ha esetleg nem tudod letölteni vagy kitömöríteni, írj egy e-mailt és elküldjük külön. (A jelvény tervező kicsit lassan nyílik meg, mert nagy felbontású, ahhoz kis türelem kell)</p>

    <p>Ha még nem tetted, érdemes lehet megnézned a <x-a href="{{ route('beosztom.diak') }}">beosztom.hu</x-a> oldalunkat, ami spórolásban lehet segítségedre.</p>

    <p>Legyen szép napod!</p>
</x-prose-layout>

