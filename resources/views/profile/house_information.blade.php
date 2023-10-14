@extends('layouts.master')
@section('title', 'Search for new experiences')
@section('header')
    <header class="main-header">
        @include('layouts.header-2')
    </header>
@stop
@section('content')
<main>
    <div class="d-flex flex-column" style="margin-left: 17%;margin-top: 5%">
     <div class="text-header">@lang('information.accommodation')</div>
        <div class="location-text-description">@lang('information.more_details')</div>
        <div class="counter_info">
            <div class="text_information">@lang('information.guests')</div>
            <div style="margin-right: 7%">
                <button id="decrement_guests" style="font-size: 30px;padding-right: 10px">-</button>
                <span id="count_guests" style="font-size: 21px">0</span>
                <button id="increment_guests" style="font-size: 30px;padding-left: 10px">+</button>
            </div>
        </div>
        <div class="counter_info">
            <div class="text_information">@lang('information.Bedrooms')</div>
            <div style="margin-right: 7%">
                <button id="decrement_bedrooms" style="font-size: 30px;padding-right: 10px">-</button>
                <span id="count_bedrooms" style="font-size: 21px">0</span>
                <button id="increment_bedrooms" style="font-size: 30px;padding-left: 10px">+</button>
            </div>
        </div>
        <div class="counter_info">
            <div class="text_information">@lang('information.Beds')</div>
            <div style="margin-right: 7%">
                <button id="decrement_beds" style="font-size: 30px;padding-right: 10px">-</button>
                <span id="count_beds" style="font-size: 21px">0</span>
                <button id="increment_beds" style="font-size: 30px;padding-left: 10px">+</button>
            </div>
        </div>
        <div class="counter_info">
            <div class="text_information">@lang('information.Bathrooms')</div>
            <div style="margin-right: 7%">
                <button id="decrement_bathrooms" style="font-size: 30px;padding-right: 10px">-</button>
                <span id="count_bathrooms" style="font-size: 21px">0</span>
                <button id="increment_bathrooms" style="font-size: 30px;padding-left: 10px">+</button>
            </div>
        </div>
        <button class="button" style="width: 15%;margin-top: 5%;margin-left: 60%;height: 50px">@lang('main.next')</button>
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

