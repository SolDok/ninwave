@include("header")
<h2>Добро пожаловать!</h2>
<p>Цель данного проекта - помощь в изучении японского языка.</p>
<a href="{{ route('login') }}">Вход</a>
<a href="{{ route('register') }}">Регистрация</a>
<Ul>
    <li>
        <a href="">Учить карточки</a>
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

@include("footer")