<x-public-layout>
    <a href="{{ route('articles.create') }}">New</a>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($articles as $article)
                <tr>
                    <td>{{ $article->id }}</td>
                    <td>{{ $article->title }}</td>
                    <td>
                        <a href="{{ route('articles.destroy', $article->id) }}">Delete</a>
                        <a href="{{ route('articles.edit', $article->id) }}">Edit</a>
                        <a href="{{ route('articles.show', $article->id) }}">Show</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</x-public-layout>
