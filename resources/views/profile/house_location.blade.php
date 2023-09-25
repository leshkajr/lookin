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
          <div class="select_adress">
              <div class="d-flex flex-column text_chouse">
                  <div style="font-size: 15px;" >Країна/регіон</div>
                  <div style="font-size: 20px;margin-top: 5%">Україна</div>
              </div>
              <select class="sel_location" style="margin-left: 72%"></select>
          </div>
         <div class="select_adress">
             <div class="d-flex flex-column text_chouse">
                 <div style="font-size: 15px;" >Місто/село</div>
                 <div style="font-size: 20px;margin-top: 5%">Київ</div>
             </div>
             <select class="sel_location" style="margin-left: 75%"></select>
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
         <button class="button_house" style="margin-top: 50px; margin-right: 150px">next</button>
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
