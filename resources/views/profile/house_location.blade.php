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
             <div class="select_address">
                 <form method="get" id="form_country">
                     <div class="d-flex flex-column text_chouse" style="width: 100%;">
                         <div style="font-size: 15px; color: var(--text-color-light)" >Країна/регіон</div>
                         <select name="countryId" class="sel_location" type="submit"
                         onchange="document.getElementById('form_country').submit();">
                             <option>Виберіть</option>
                            @foreach($countries as $value)

                                <option value="{{$value->id}}"
                                @if($value->id == $choose_country_id) selected @endif>{{$value->name}}</option>
                            @endforeach
                         </select>
                     </div>
                 </form>
             </div>
             <div class="select_address">
                 <form method="get" id="form_citi">
                     <div class="d-flex flex-column text_chouse" style="width: 100%;">
                         <div style="font-size: 15px; color: var(--text-color-light)" >Місто/село</div>
                         <select class="sel_location" name="citi" @if($cities === null) disabled @endif>
                             <option>Виберіть</option>
                             @if($cities !== null)
                                @foreach($cities as $citi)
                                <option value="{{$citi->name}}">{{ $citi->name}}</option>
                                @endforeach
                             @endif
                         </select>
                     </div>
                 </form>

             </div>
             <div class="select_address">
                 <input type="text" class="input_adress" placeholder="Поштовий індекс">
             </div>
             <div class="select_address">
                 <input type="text" class="input_adress" placeholder="Адреса">
             </div>
         </div>

         <div class="container-button" style="margin-right: 10%;margin-left: 1%">
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
