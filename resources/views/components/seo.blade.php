@section('seo')
    <title>{{ $title }} | Panda Egyetem</title>

    <meta name="description" content="{{ $description ?? 'Tanulj hatékonyabban, szerezd meg az álom melót, fizesd vissza a diákhitelt! Segítünk mindhárom cél elérésében.' }}">

    <meta property="og:title" content="{{ $title }} | Panda Egyetem">
    <meta property="og:description" content="{{ $description ?? 'Tanulj hatékonyabban, szerezd meg az álom melót, fizesd vissza a diákhitelt! Segítünk mindhárom cél elérésében.' }}">
@endsection
