@extends('layouts.master')
@section('title', 'Search for new experiences')
@section('header')
    <header class="main-header">
        @include('layouts.header-2')
    </header>
@stop
@section('content')
<main>
    <div class="d-flex flex-column" style="margin-left: 17%;margin-top: 5%">
     <div class="text-header">Зазначте основні відомості про своє помешкання</div>
        <div class="location-text-description">Докладнішу інформацію, як-от тип ліжок, ви додасте згодом.</div>
        <div class="counter_info">
            <div class="text_information">Гості</div>
            <div style="margin-right: 7%">
                <button id="decrement_guests" style="font-size: 30px;padding-right: 10px">-</button>
                <span id="count_guests" style="font-size: 24px">0</span>
                <button id="increment_guests" style="font-size: 30px;padding-left: 10px">+</button>
            </div>
        </div>
        <div class="counter_info">
            <div class="text_information">Спальні</div>
            <div style="margin-right: 7%">
                <button id="decrement" style="font-size: 30px;padding-right: 10px">-</button>
                <span id="count" style="font-size: 24px">0</span>
                <button id="increment" style="font-size: 30px;padding-left: 10px">+</button>
            </div>
        </div>
        <div class="counter_info">
            <div class="text_information">Ліжка</div>
            <div style="margin-right: 7%">
                <button id="decrement" style="font-size: 30px;padding-right: 10px">-</button>
                <span id="count" style="font-size: 24px">0</span>
                <button id="increment" style="font-size: 30px;padding-left: 10px">+</button>
            </div>
        </div>
        <div class="counter_info">
            <div class="text_information">Ванні кімнати</div>
            <div style="margin-right: 7%">
                <button id="decrement" style="font-size: 30px;padding-right: 10px">-</button>
                <span id="count" style="font-size: 24px">0</span>
                <button id="increment" style="font-size: 30px;padding-left: 10px">+</button>
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
