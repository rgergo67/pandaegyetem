<x-prose-layout>
    <x-seo title="Sikertelen fizetés" />

    <h3>A fizetés nem sikerült</h3>

    <p>Az előbb indított {{ $payment->total }} Ft-os fizetésed félbe szakadt. Ha úgy gondolod, hogy mégis megtörtént, akkor lépj kapcsolatba velünk a {{ config('mail.reply_to.address') }} email címen, hogy utána tudjunk nézni.</p>
</x-prose-layout>

