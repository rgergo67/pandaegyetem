<x-public-layout>
    <h2>Edit: <a href="{{ route('articles.public_show', $article->slug) }}">{{ $article->title }}</a></h2>
    <form action="{{ route('articles.update', $article) }}" method="post">
        @method('PUT')
        @csrf
        @include('articles._form')
    </form>
</x-public-layout>
