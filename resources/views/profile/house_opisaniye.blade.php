@extends('layouts.master')
@section('title', 'Search for new experiences')
@section('header')
    <header class="main-header">
        @include('layouts.header-2')
    </header>
@stop
@section('content')
    <main style="display: flex; justify-content: center; align-items: center;">
        <div class="house_photo_container">
            <div class="text-header">@lang('photo_house.Create_description')</div>
            <div class="location-text-description" style="margin-top: 2%">@lang('photo_house.property_special')</div>
            <div class="div_photo_house" style="height: 300px; width: 100%;">
               <textarea id="textarea">

               </textarea>

            </div>
           <div style="margin-top: 2%" class="d-flex flex-row">
               <span id="textcounter">0</span>
               <div>/500</div>
           </div>

            <div class="div_button">
                <button class="button_back">@lang('main.back')</button>
                <button class="button button_house" id="next">@lang('main.next')</button>

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
