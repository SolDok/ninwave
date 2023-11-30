@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2>Добро пожаловать!</h2>
            <p>Цель данного проекта - помощь в изучении японского языка.</p>
            <Ul>
                <li>
                    <a href="{{ route('flashcards') }}">Учить карточки</a>
                </li>
                <li>
                    <a href="">Учить фразы</a>
                </li>
                <li>
                    <a href="">Повторение изученного материала</a>
                </li>
                <li>
                    <a href="">Грамматика</a>
                </li>
            </Ul>
        </div>
    </div>
</div>
@endsection