@extends('layouts.master')
@section('title', 'Search for new experiences')
@section('header')
    <header class="main-header">
        @include('layouts.header-2')
    </header>
@stop
@section('content')
    <main class="d-flex flex-row" style="margin-top: 5%;margin-left: 10%">
        <div>
            <div class="retangle_div1 d-flex flex-row justify-content-center align-items-center">
               <img class="photo_profils" src="{{ asset('images/start-large-photos/photo1.jpg') }}">
            </div>
             <button class="button" style="margin-left: 8%; margin-top: -10px;" >Додати фото</button>
        </div>
        <div class="d-flex flex-column" style="margin-left: 13%;padding-top: 2%;width: 70%">
            <div style="font-size: 24px;font-weight: 600">Ваш профіль</div>
            <div style="margin-top: 3%;font-size: 14px; width: 65%; margin-bottom: 4%">Інформацію, яку ви надаєте, буде використано на Look'in,
                щоб інші гості та господарі мали змогу познайомитися з вами.</div>
            <div class="personal_block">
                <form>
                    <div class="personal_text_header">Навчальний заклад</div>
                    <div class="personal_text_description">Навчання вдома, у середній школі чи професійному ліцеї. Назвіть заклад, де ви навчалися.</div>
                    <div class="personal_divs" style="padding-left: 2%;padding-top: 1%;padding-bottom: 1%;">
                        <input type="text" placeholder="Де ви навчалися?" class="input_text">
                    </div>
                  <div class="d-flex justify-content-end">
                      <button class="button button_profils">Зберегти</button>
                  </div>
                </form>
            </div>
            <div class="personal_block">
                <form>
                    <div class="personal_text_header">Моя професія</div>
                    <div class="personal_text_description">Розкажіть про свою професію. Якщо у вас немає професії в традиційному сенсі, розкажіть про своє життєве покликання..</div>
                    <div class="personal_divs" style="padding-left: 2%;padding-top: 1%;padding-bottom: 1%;">
                        <input type="text" placeholder="Ким ви працюєте?" class="input_text" style="font-size: 20px;font-weight: 200">
                    </div>
                    <div class="d-flex justify-content-end">
                        <button class="button button_profils">Зберегти</button>
                    </div>
                </form>
            </div>
            <div class="personal_block">
                <form>
                    <div class="personal_text_header">Мови, якими ви володієте</div>
                       <div class="d-flex flex-row ">
                           <div class="div_languages">
                               <div class="languages_text">Українська</div>
                           </div>
                           <div class="div_languages" style="margin-left: 2%" >
                               <div class="languages_text" >Англійська</div>
                           </div>
                       </div>
                    <div class="d-flex justify-content-end">
                        <button class="button button_profils">Зберегти</button>
                    </div>
                </form>
            </div>
            <div class="personal_block">
                <form>
                    <div class="personal_text_header">Десятиліття, коли ви народилися</div>
                    <div class="personal_divs" style="padding-left: 2%;padding-top: 1%;padding-bottom: 1%;">
                        <input type="text" placeholder="Показати десятиліття мого народження" class="input_text" style="font-size: 20px;font-weight: 200">
                    </div>
                    <div class="d-flex justify-content-end">
                        <button class="button button_profils">Зберегти</button>
                    </div>
                </form>
            </div>
            <div class="personal_block">
                <form>
                    <div class="personal_text_header">Найбільше захоплення</div>
                    <div class="personal_text_description">Розкажіть, на чому ви схиблені (у хорошому сенсі). Наприклад: випікання фокачі з розмарином.</div>
                    <div class="personal_divs" style="padding-left: 2%;padding-top: 1%;padding-bottom: 1%;">
                        <input type="text" placeholder="Чим ви захоплюєтесь?" class="input_text" style="font-size: 20px;font-weight: 200">
                    </div>
                    <div class="d-flex justify-content-end">
                        <button class="button button_profils">Зберегти</button>
                    </div>
                </form>
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
