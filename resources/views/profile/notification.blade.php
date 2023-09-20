@extends('layouts.master')
@section('title', 'Search for new experiences')
@section('header')
    <header class="main-header">
        @include('layouts.header-2')
    </header>
@stop
@section('content')
<main>
    <div class="message-container d-flex flex-column">
        <div class="text-header">Повідомлення</div>
        <div class="d-flex flex-column justify-content-center align-items-center">
            <div class="messages-block">
                <div class="message-text-header">Розмістіть свій будинок, готель або інше помешкання на Look’ in та заробляйте.</div>
            </div>
            <div class="messages-block">
                <div class="message-text-header">Скільки можна заощаджити завдяки сизоним пропозиціям?</div>
                <div class="message-text-description">  Сезонні пропозиції можна забронювати з 15 березня до 28 вересня 2023 року (включно).</div>
            </div>
            <div class="messages-block">
                <div class="message-text-header">Що робити, якщо гість завдав шкоди моєму помешканню?</div>
                <div class="message-text-description">Власники помешкань можуть стягувати з гостей страхову заставу, щоб за необхідності частково відшкодувати збитки. Завдяки цьому гість буде дбайливо ставитися до вашого майна. Якщо щось піде не так, про це можна повідомити нашій команді за допомогою функції "Повідомити про неналежну поведінку гостя".</div>
            </div>
        </div>
    </div>
</main>


@stop

@section('footer')
    @include('layouts.footer-upper')
    @include('layouts.footer')
@stop

@section('dialogs_windows')
    <div class="dialogs_windows">
        @include('layouts.dialog-window-language')
        @include('layouts.dialog-window-currency')
    </div>
@stop
