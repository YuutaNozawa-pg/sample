@foreach ($articles as $location)
    {{ $location->id }}<br/>
    @foreach($location['articles'] as $article)
        {{ $article->id }}
        {{ $article->title }}
    @endforeach
@endforeach