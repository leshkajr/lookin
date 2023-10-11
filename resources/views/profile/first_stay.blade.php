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
            <div class="text-header">Зазначте, кого ви готові прийняти для першого перебування</div>
            <div class="location-text-description" style="margin-top: 2%">Після першого гостя будь-хто може бронювати ваше помешкання.</div>
            <div style="font-weight: 500"><a href="#" style="text-decoration: underline">Докладніше</a></div>
            <div class="first_counter">
              <form>
                  <div class="div_first">
                      <label class="lable_radio" for="radio1">
                          <input type="radio" class="radiobutton" name="first_stay" id="radio1">
                          <span class="radioFace"></span>
                          <div class="radio_text">
                              <div style=";margin-left: 10px;font-size: 28px;font-weight:600">Будь-який гість з Look`in</div>
                              <div style="margin-left: 10px;margin-top: 2%">Якщо ви готові прийняти будь-якого учасника спільноти Look`in ,ви швидше отримаєте бронювання.</div>
                          </div>

                      </label>

                  </div>
                  <div class="div_first" style="margin-top: 2%">
                      <label class="lable_radio" for="radio2">
                          <input type="radio" class="radiobutton" name="first_stay" id="radio2">
                          <span class="radioFace"></span>
                          <div class="radio_text">
                              <div style=";margin-left: 10px;font-size: 28px;font-weight:600">Досвідченій гість</div>
                              <div style="margin-left: 10px;margin-top: 2%">Перше бронювання може зробити лише гість із високим рейтингом на Look`in, який може дати поради, як стати чудовим господарем.</div>
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
