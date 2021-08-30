@component('mail::message')
# Jobb jegyek 10 lépésben

Kedves {{ $order->billing_name }}!

Köszönöm a rendelésed, hamarosan küldöm a számlát egy külön e-mailben. A könyvet a következő linken tudod letölteni:

@component('mail::button', ['url' => 'https://drive.google.com/file/d/1w6COiSTFBDliDFvxKNJzxRR0iWmEFjq-/view?usp=sharing'])
    Könyv letöltése
@endcomponent

Ez egy tömörített ZIP fájl, ami tartalmazza a könyvet és az ajándék Jelvény tervezőt illetve Kérdőív játékosítót. Ha esetleg nem tudod letölteni vagy kitömöríteni, írj egy e-mailt erről a címről, és elküldöm külön. (A jelvény tervező kicsit lassan nyílik meg, mert nagy felbontású, ahhoz kis türelem kell)

Nagyon sokat dolgoztam rajta, remélem hasznos lesz, és nem bánod meg, hogy megvetted.

**Számlázási adataid:**<br>
{{ $order->billing_name }}<br>
{{ $order->email }}<br>
{{ $order->billing_city }}<br>
{{ $order->billing_address }}<br>
{{ $order->billing_zip }}<br>
@if (!is_null($order->billing_tax_number))
{{ $order->billing_tax_number }}<br>
@endif
Fizetett összeg: {{ config('pandaegyetem.price') }} Ft

Pandasztikus napot!<br>
Gergő
@endcomponent
