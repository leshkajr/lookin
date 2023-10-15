@extends('layouts.master-create-listing')
@section('title', Lang::get('create-listing.listing_located'))
@section('header')
    <header class="main-header">
        @include('layouts.header-create-listing')
    </header>
@stop
@section('content')
    <main>
     <div class="location_container">
         <form method="post" action="{{ route("create-listing.information") }}" id="form">
             @csrf
             <input type="hidden" name="listingId" id="listingId" value="{{ $listingId }}"/>

             <div class="text-header">@lang('create-listing.listing_located')</div>
             <div class="location-text-description">Вашу адресу буде повідомлено гостям лише після бронювання.</div>
             <div style="margin-bottom: 20px;">
                 <div class="select_address">
                     <form method="get" id="form_country">
                         <div class="d-flex flex-column text_chouse" style="width: 100%; margin-top: 9px;">
                             <div style="font-size: 15px; color: var(--text-color-light)" >Країна/регіон</div>
                             <select id="countryId" class="sel_location" type="submit"
                                     onchange="uploadCities(document.getElementById('countryId').value)" required>
                                 <option>Виберіть</option>
                                 @foreach($countries as $value)
                                     <option value="{{$value->id}}"
                                             @if($value->id === $choose_country_id) selected @endif>{{$value->name}}</option>
                                 @endforeach
                             </select>
                         </div>
                     </form>
                 </div>
                 <div class="select_address">
                     <div class="d-flex flex-column text_chouse" style="width: 100%; margin-top: 9px;">
                         <div style="font-size: 15px; color: var(--text-color-light)" >Місто/село</div>
                         <select id="cityId" class="sel_location" name="city" disabled required>
                             <option>Виберіть</option>
                         </select>
                     </div>
                 </div>
                 <div class="select_address">
                     <input type="text" class="input_adress" id="post_index" maxlength="5" placeholder="Поштовий індекс">
                 </div>
                 <div class="select_address">
                     <input type="text" class="input_adress" id="firstLine" placeholder="Адреса" required>
                 </div>
                 <div class="select_address">
                     <input type="text" class="input_adress" id="secondLine" placeholder="Номер мешкання" required>
                 </div>
             </div>

             <div class="footer-start">
                 <div class="footer-start-progress_container">
                     <div class="footer-start-progress" style="width: 50%;"></div>
                 </div>
                 <div class="button-start_next-container w-100">
                     <button type="button" class="button button-start_next" id="buttonNext"
                             onclick="clickButtonNext('location',
                             document.getElementById('countryId').value + ';' + document.getElementById('cityId').value  + ';' +
                             document.getElementById('post_index').value + ';' + document.getElementById('firstLine').value  + ';' +
                             document.getElementById('secondLine').value
                             )"
                     >@lang('main.next')</button>
                 </div>
             </div>
         </form>
     </div>
    </main>

    <style>
        .footer-start-progress{
            animation: progress-bar 1s ease;
        }
        @keyframes progress-bar {
            from{
                width: 40%;
            }
            to{
                width: 50%;
            }
        }
    </style>

@stop

@section('footer')
@stop

@section('dialogs_windows')
    <div class="dialogs_windows">
        @include('layouts.dialog-window-language')
        @include('layouts.dialog-window-currency')
    </div>
@stop
