@extends('layouts.master-create-listing')
@section('title', Lang::get('photo_house.Create_description'))
@section('header')
    <header class="main-header">
        @include('layouts.header-create-listing')
    </header>
@stop
@section('content')
    <main style="display: flex; justify-content: center; align-items: center;">
        <div class="house_photo_container">
            <form method="post" action="{{ route("create-listing.location") }}" id="form">
                @csrf
                <input type="hidden" name="listingId" id="listingId" value="{{ $listingId }}"/>

                <div class="text-header">@lang('photo_house.Create_description')</div>
                <div class="location-text-description" style="margin-top: 2%">@lang('photo_house.property_special')</div>
                <div class="div_photo_house" style="width: 100%; padding: 20px 25px;">
                    <textarea id="textarea" style="height: 230px;" maxlength="1500" minlength="32" name="description"
                              required></textarea>
                </div>
                <div style="margin-top: 2%; margin-bottom: 10%" class="d-flex flex-row">
                    <span id="textcounter">0</span>
                    <div>/1500</div>
                </div>

                <div class="footer-start">
                    <div class="footer-start-progress_container">
                        <div class="footer-start-progress" style="width: 40%;"></div>
                    </div>
                    <div class="button-start_next-container w-100">
                        <button type="button" class="button button-start_next" id="buttonNext"
                                onclick="clickButtonNext('description',document.getElementById('textarea').value)"
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
                width: 30%;
            }
            to{
                width: 40%;
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
