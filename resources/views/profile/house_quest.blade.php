@extends('layouts.master')
@section('title', 'Search for new experiences')
@section('header')
    <header class="main-header">
        @include('layouts.header-2')
    </header>
@stop
@section('content')
    <main class="d-flex flex-column align-items-center">
        <div class="house_container">
            <div>
                <div class="text-header" style="margin-left: 1%">Останній крок!</div>
                <div  style="font-size: 16px;margin-left: 1%;margin-bottom: 3%;font-weight: 600">Як ви приймаєте гостей на Look`in </div>
                 <form >
                     <div class="check_form" style="" >
                             <label class="checkbox-label">
                                 <input type="checkbox" class="real_checkbox">
                                 <span class="custom_checkbox"></span>
                                 Я приймаю гостей як приватна особа
                             </label>
                     </div>
                     <div class="check_form">
                         <label class="checkbox-label">
                             <input type="checkbox" class="real_checkbox">
                             <span class="custom_checkbox"></span>
                             Я приймаю гостей як бізнес
                         </label>
                     </div>
                     <div class="text-header" style="margin-left: 1%; font-weight: 600">У вашому помешканні є якісь із цих засобів безпеки?</div>
                     <div class="check_form">
                         <label class="checkbox-label">
                             <input type="checkbox" class="real_checkbox">
                             <span class="custom_checkbox"></span>
                             Камери відеоспостереження
                         </label>
                     </div>
                     <div class="check_form">
                         <label class="checkbox-label">
                             <input type="checkbox" class="real_checkbox">
                             <span class="custom_checkbox"></span>
                             Зброя
                         </label>
                     </div>
                     <div class="check_form">
                         <label class="checkbox-label">
                             <input type="checkbox" class="real_checkbox">
                             <span class="custom_checkbox"></span>
                             Небезпечні тварини
                         </label>
                     </div>
                 </form>
                <div class="text-header" style="margin-left: 1%; font-weight: 600">Важливі моменти</div>
                <div  style="font-size: 16px;margin-left: 1%;margin-bottom: 3%; font-weight: 400;width: 80%">Обов’язково дотримуйтеся місцевого законодавства й ознайомтеся з Політикою недискримінації Look`in, а також положеннями про збори з гостей і господарів.</div>
                <div class="div_button">
                    <button class="button_back">@lang('main.back')</button>
                    <button class="button button_house">@lang('main.next')</button>
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
