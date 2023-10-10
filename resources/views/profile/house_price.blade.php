@extends('layouts.master')
@section('title', 'Search for new experiences')
@section('header')
    <header class="main-header">
        @include('layouts.header-2')
    </header>
@stop
@section('content')
    <main class="d-flex align-items-center justify-content-center">
        <div class="house_photo_container">
            <div class="text-header">Тепер установіть ціну</div>
            <div class="location-text-description" style="margin-top: 2%">Ви зможете будь-коли її змінити.</div>
              <div class="price">
                  <input type="text" value="$" class="price_input" id="price">
              </div>
            <div class="div_price">
               <div class="div_button">
                   <div style="margin-left: 3%;margin-top: 2%;font-size: 20px">Ціна для господаря до врахування податків</div>
                   <span style="margin-right: 3%;margin-top: 2%;font-size: 20px" id="owner_price"></span>
               </div>
                <div class="div_button">
                    <div style="margin-left: 3%;margin-top: 2%;font-size: 20px">Сервісний збір із господаря</div>
                    <span style="margin-right: 3%;margin-top: 2%;font-size: 20px">$0</span>
                </div>
                <hr style="width: 95%;margin-left: 3%;font-weight: 600">
                <div class="div_button" style="margin-bottom: 2%">
                    <div style="margin-left: 3%;font-size: 20px;font-weight: 600">Вартість послуги</div>
                    <span style="margin-right: 3%;font-size: 20px" id="earnings"></span>
                </div>
            </div>
            <div class="div_button">
                <button class="button_back">@lang('main.back')</button>
                <button class="button button_house">@lang('main.next')</button>
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
