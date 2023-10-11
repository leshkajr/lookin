@extends('layouts.master')
@section('title', 'Search for new experiences')
@section('header')
    <header class="main-header">
        @include('layouts.header-2')
    </header>
@stop
@section('content')
    <main >
        <div class="house_photo_container" style="margin-left: 17%">
            <div class="text-header">Додайте назву вашого помешкання (будинку)</div>
            <div class="location-text-description" style="margin-top: 2%">Лаконічні назви – найкращі. Зауважте: назву можна будь-коли змінити.</div>
            <div class="div_photo_house" style="height: 300px">
               <textarea id="textarea">

               </textarea>

            </div>
            <div style="margin-top: 2%" class="d-flex flex-row">
                <span id="textcounter">0</span>
                <div>/32</div>
            </div>

            <div class="div_button">
                <button class="button_back" style="margin-right: 20%">@lang('main.back')</button>
                <button class="button button_house" id="next"style="margin-left: 120%">@lang('main.next')</button>

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
