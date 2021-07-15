@props(['withCaption' => true, 'name', 'title'])

<figure {{ $attributes->merge(['class' => ""]) }}>
    <picture>
        <source type="image/webp" srcset="{{ asset("images/$name.webp") }}">
        <img src="{{ asset("images/$name.png") }}" alt="{{ $title }}" class="mx-auto" loading="lazy" />
    </picture>
    @if ($withCaption)
        <figcaption class="text-center">{{ $title }}</figcaption>
    @endif
</figure>
