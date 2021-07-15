@component('mail::message')
# Jobb jegyek 10 lépésben

Kedves {{ $order->billing_name }}!

Köszönöm a rendelésed, mellékelve küldöm a könyvet, illetve hamarosan a számlát egy külön e-mailben.

Nagyon sokat dolgoztam rajta, remélem hasznos lesz, és nem bánod meg, hogy megvetted.

**Számlázási adataid:**<br>
{{ $order->billing_name }}<br>
{{ $order->billing_city }}<br>
{{ $order->billing_address }}<br>
{{ $order->billing_zip }}<br>
@if (!is_null($order->billing_tax_number))
{{ $order->billing_tax_number }}<br>
@endif

Pandasztikus napot!<br>
Gergő
@endcomponent
