@extends('layouts.master-create-listing')
@section('title', Lang::get('information.accommodation'))
@section('header')
    <header class="main-header">
        @include('layouts.header-create-listing')
    </header>
@stop
@section('content')
<main>
    <div class="d-flex flex-column" style="margin-left: 17%;margin-top: 4%">
        <form method="post" action="{{ route("create-listing.amenities") }}" id="form">
            @csrf
            <input type="hidden" name="listingId" id="listingId" value="{{ $listingId }}"/>

            <div class="text-header">@lang('information.accommodation')</div>

            <div class="location-text-description">@lang('information.more_details')</div>
            <div class="counter_info">
                <div class="text_information">@lang('information.guests')</div>
                <div style="margin-right: 7%">
                    <button type="button" style="font-size: 30px;padding-right: 10px" onclick="inc_disc_input('count_guests','minus')">-</button>
                    <input type="number" id="count_guests" class="clear-input" value="0"/>
                    <button type="button" style="font-size: 30px;padding-left: 10px" onclick="inc_disc_input('count_guests','plus')">+</button>
                </div>
            </div>
            <div class="counter_info">
                <div class="text_information">@lang('information.Bedrooms')</div>
                <div style="margin-right: 7%">
                    <button type="button" style="font-size: 30px;padding-right: 10px" onclick="inc_disc_input('count_bedrooms','minus')">-</button>
                    <input type="number" id="count_bedrooms" class="clear-input" value="0"/>
                    <button type="button" style="font-size: 30px;padding-left: 10px" onclick="inc_disc_input('count_bedrooms','plus')">+</button>
                </div>
            </div>
            <div class="counter_info">
                <div class="text_information">@lang('information.Beds')</div>
                <div style="margin-right: 7%">
                    <button type="button" style="font-size: 30px;padding-right: 10px" onclick="inc_disc_input('count_beds','minus')">-</button>
                    <input type="number" id="count_beds" class="clear-input" value="0"/>
                    <button type="button" style="font-size: 30px;padding-left: 10px" onclick="inc_disc_input('count_beds','plus')">+</button>
                </div>
            </div>
            <div class="counter_info">
                <div class="text_information">@lang('information.Bathrooms')</div>
                <div style="margin-right: 7%">
                    <button type="button" style="font-size: 30px;padding-right: 10px" onclick="inc_disc_input('count_bathrooms','minus')">-</button>
                    <input type="number" id="count_bathrooms" class="clear-input" value="0"/>
                    <button type="button" style="font-size: 30px;padding-left: 10px" onclick="inc_disc_input('count_bathrooms','plus')">+</button>
                </div>
            </div>

            <div class="footer-start">
                <div class="footer-start-progress_container">
                    <div class="footer-start-progress" style="width: 60%;"></div>
                </div>
                <div class="button-start_next-container w-100">
                    <button type="button" class="button button-start_next" id="buttonNext"
                            onclick="clickButtonNext('information',
                             document.getElementById('count_guests').value + ';' + document.getElementById('count_bedrooms').value  + ';' +
                             document.getElementById('count_beds').value + ';' + document.getElementById('count_bathrooms').value
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
            width: 50%;
        }
        to{
            width: 60%;
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

