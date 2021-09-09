@extends ('templates.common')

@section('content')
    <div class="container">
        @foreach ($movieList as $movie)
        <div class="item">
            <div class="itemContent"
                style="background-image: url({{ $movie->cover }});
                        background-size: cover;
                        background-position: center;">

                <div class="layer"></div>
                <div class="itemInfo">
                    <div class="titles">
                        <h3>{{ $movie->title }}</h3>
                        <h5>{{ $movie->original_title }}</h5>
                    </div>
                    <h4 class="date">{{ $movie->date }}</h4>
                    <h4>Vote: {{ $movie->vote }}/10</h4>
                </div>
            </div>
        </div>
        @endforeach
    </div>
@endsection