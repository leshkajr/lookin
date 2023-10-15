@extends('layouts.master')
@section('title', 'Search for new experiences')
@section('header')
    <header class="main-header">
        @include('layouts.header-2')
    </header>
@stop
@section('content')
    <main class="d-flex align-items-center justify-content-center">
        <div class="house_photo_container" style="margin-top: 2%">
            <div class="text-header">Зазначте, чи потрібно ваше підтвердження на резервування вашого оголошення</div>
            <div class="location-text-description" style="margin-top: 1%; font-weight: 300">Ви зможете підтвердити резервування або відмінити.</div>
            <div style="font-weight: 500"><a href="#" style="text-decoration: underline">Докладніше</a></div>
            <div class="first_counter">
              <form>
                  <div class="div_first" style="margin-top: 1%;">
                      <label class="lable_radio" for="radio1">
                          <input type="radio" class="radiobutton" name="first_stay" id="radio1">
                          <span class="radioFace"></span>
                          <div class="radio_text">
                              <div style=";margin-left: 10px;font-size: 22px;font-weight:600">Так</div>
                              <div style="margin-left: 10px;margin-top:0.3%">Щоб зарезервувати це помешкання треба буде ваше підтвердження.</div>
                          </div>

                      </label>

                  </div>
                  <div class="div_first" style="margin-top: 2%">
                      <label class="lable_radio" for="radio2">
                          <input type="radio" class="radiobutton" name="first_stay" id="radio2">
                          <span class="radioFace"></span>
                          <div class="radio_text">
                              <div style=";margin-left: 10px;font-size: 22px;font-weight:600">Ні</div>
                              <div style="margin-left: 10px;margin-top:0.3%">Користувач зможе зарезервувати це помешкання без вашого підтвердження.</div>
                          </div>

                      </label>
                  </div>
              </form>

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
