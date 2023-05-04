@extends('layout.app')

@section('page-title')
    MovieDB
@endsection
{{-- rappresentazione di tutti i film --}}
@section('main')
<div class="container py-4">
    <div class="row">
        @foreach ($movies as $movie)
            <div class="col-3">
                <div class="card mb-2">
                    <p class="card-title"><a href="{{route('detail', $movie->id)}}"> titolo: {{$movie->title}}</a></p>
                    <p>titolo originale: {{$movie->original_title}}</p>
                    <p>nazionalita: {{$movie->nationality}}</p>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection