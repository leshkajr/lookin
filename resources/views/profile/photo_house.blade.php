@extends('layouts.master')
@section('title', 'Search for new experiences')
@section('header')
    <header class="main-header">
        @include('layouts.header-2')
    </header>
@stop
@section('content')
    <main >
        <div class="house_photo_container" style="margin-left: 20%" >
            <div class="text-header">@lang('photo_house.add_photo')</div>
            <div class="location-text-description" style="margin-top: 2%">@lang('photo_house.take_photo')</div>
            <div class="div_photo_house">
                <div class="photoCountainer">
                    <div class="photo" id="housePhoto">

                    </div>
                </div>

                <div style="margin-bottom: 3%">
                    <div class="text_photo">@lang('photo_house.Drag_photos')</div>
                    <div style="text-align: center; font-size: 20px; margin-top: 2%" >@lang('photo_house.Choose')</div>

                      <input type="file" id="fileInputs" name="photos"   style="display: none" onchange="donwloans(this)">
                      <label for="fileInputs" style="margin-left: 32%;cursor: pointer">
                          <div style="text-align: center; font-size: 20px; margin-top: 2%;font-weight: 500;text-decoration: underline" >@lang('photo_house.Download')</div>
                      </label>

                </div>
                <div id="error"></div>
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
