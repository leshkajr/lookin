@extends('layouts.master')
@section('title', 'Search for new experiences')
@section('header')
    <header class="main-header">
        @include('layouts.header-2')
    </header>
@stop
@section('content')
    <main>
     <div class="location_container">
       <div class="text-header">Де розташоване ваше помешкання?</div>
         <div class="location-text-description">Вашу адресу буде повідомлено гостям лише після бронювання.</div>
         <div>
             <div class="select_adress">
                 <form method="get" id="form_country">
                     <div class="d-flex flex-column text_chouse" style="width: 100%;">
                         <div style="font-size: 15px;" >Країна/регіон</div>
                         <select name="countryId" class="sel_location" type="submit"
                         onchange="document.getElementById('form_country').submit();">
                             <option>Виберіть</option>
                             <option value="213">Україна</option>
                             <option value="165">Польща</option>
                         </select>
                     </div>
                 </form>
             </div>
             <div class="select_adress">
                 <form method="get">
                     <div class="d-flex flex-column text_chouse" style="width: 100%;">
                         <div style="font-size: 15px;" >Місто/село</div>
                         {{--                     <div style="font-size: 20px;margin-top: 5%">Київ</div>--}}
                         <select class="sel_location">
                             <option value="213" selected>Київ</option>
                         </select>
                     </div>
                 </form>

             </div>
             <div class="select_adress">
                 <div class="d-flex flex-column text_chouse">
                     <div style="font-size: 15px;" >Поштовий індекс</div>
                     <div style="font-size: 20px;margin-top: 5%">50008</div>
                 </div>
                 <select class="sel_location" style="margin-left: 68%"></select>
             </div>
             <div class="select_adress">
                 <div class="d-flex flex-column text_chouse">
                     <div style="font-size: 15px;" >Адреса</div>
                     <div style="font-size: 20px;margin-top: 5%">Героїв АТО 48</div>
                 </div>
                 <select class="sel_location"  style="margin-left: 66%"></select>
             </div>
         </div>

         <div class="container-button">
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
