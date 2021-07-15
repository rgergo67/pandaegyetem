<x-public-layout>
    <h2>New</h2>
    <form action="{{ route('articles.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        @include('articles._form')
    </form>
</x-public-layout>
