@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @empty($flashcards)
            Карточек в базе нет! :(
            @endempty
            @isset($flashcards)
            @foreach($flashcards as $flashcard)
            <p> {{ $flashcard->word }} -> {{ $flashcard->reading }} -> {{ $flashcard->translate }}</p>
            @endforeach
            @endisset
        </div>
    </div>
</div>
@endsection