@extends('layout.app')

@section('page-title')
    dettagli {{$movie->title}}
@endsection
{{-- rappresentazione dei dettagli del film --}}
@section('main')
<main>
    <div class="container py-4">
        <div class="row">
            <div class="col">
                <div class="card">
                    <p class="card-title">titolo: {{$movie->title}}</p>
                    <p>titolo originale: {{$movie->original_title}}</p>
                    <p>nazionalita: {{$movie->nationality}}</p>
                    <p>uscita: {{$movie->date}}</p>
                    <p>voto: {{$movie->vote}}</p>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection