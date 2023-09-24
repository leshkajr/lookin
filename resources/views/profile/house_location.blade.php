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
         <div class="location-text-description">Вашу адресу буде повідомлено гостям лише після бронювання..</div>
         <div class="adres_bloks">
             <svg width="28" height="33" viewBox="0 0 28 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                 <path d="M25.7273 13.8636C25.7273 23.0909 13.8636 31 13.8636 31C13.8636 31 2 23.0909 2 13.8636C2 10.7172 3.24992 7.69964 5.47478 5.47478C7.69964 3.24992 10.7172 2 13.8636 2C17.0101 2 20.0276 3.24992 22.2525 5.47478C24.4774 7.69964 25.7273 10.7172 25.7273 13.8636Z" stroke="#8B8B8B" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                 <path d="M13.8637 17.8183C16.0478 17.8183 17.8183 16.0478 17.8183 13.8637C17.8183 11.6797 16.0478 9.90918 13.8637 9.90918C11.6797 9.90918 9.90918 11.6797 9.90918 13.8637C9.90918 16.0478 11.6797 17.8183 13.8637 17.8183Z" stroke="#8B8B8B" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
             </svg>
             <div class="text_adress">Введіть свою адресу</div>
             <select class="select_location"></select>
         </div>
         <div class="text-header" style="margin-top: 2%">Підтвердьте свою адресу</div>
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
