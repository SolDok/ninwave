@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="row">
                <div class="col-sm-8"></div>
                <div class="col-sm-4 text-end">
                    <a href="" class="text-decoration-none">{{ __('New flashcard') }}</a>
                </div>
                <form action="{{ route('flashcards.store') }}" method="post">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="word" name="word" aria-label="word">
                        <input type="text" class="form-control" placeholder="reading" name="reading" aria-label="reading">
                        <input type="text" class="form-control" placeholder="translate" name="translate" aria-label="translate">
                        <button class="btn btn-outline-secondary" type="submit">{{ __('Add')}}</button>
                    </div>
                </form>
            </div>
            <div class="row">
                @empty($flashcards)
                Карточек в базе нет! :(
                @endempty
                @isset($flashcards)
                @foreach($flashcards as $flashcard)
                <div class="card m-1" style="width: 18rem;">
                    @empty($flashcards->img_path)
                    <!-- <img src="..." class="card-img-top" alt="..."> -->
                    @endempty
                    <div class="card-body">
                        <p class="card-text">{{ $flashcard->word }}</p>
                        <p class="card-text">{{ $flashcard->reading }} </p>
                        <p class="card-text">{{ $flashcard->translate }}</p>
                    </div>
                </div>
                @endforeach
                @endisset
            </div>
        </div>
    </div>
</div>
@endsection