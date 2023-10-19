@extends('layouts.master-create-listing')
@section('title', Lang::get('categories.header'))
@section('header')
    <header class="main-header">
        @include('layouts.header-create-listing')
    </header>
@stop
@section('content')
    <main class="d-flex flex-column align-items-center">
        <div class="house_container">
        <form method="post" action="{{ route("create-listing.photos") }}" id="form">
            @csrf
            <input type="hidden" name="listingId" id="listingId" value="{{ $listingId }}"/>
            <div>
                <div class="text-header" style="margin-left: 1%">@lang('categories.header')</div>
                <div  style="font-size: 16px;margin-left: 1%;margin-bottom: 2%">Після публікації оголошення можна додати більше зручностей.</div>
            </div>
            <div class="check_form">
                @foreach($essentials["values"] as $value)
                    <label class="checkbox-label" onclick="chooseAmenities({{ $value->id }})">
                        <input type="checkbox" class="real_checkbox">
                        <span class="custom_checkbox"></span>
                        @lang('amenities.'.$value->nameAmenity)
                    </label>
                @endforeach
            </div>
            <div class="check_form-header" style="margin-left: 1%">@lang('amenities_categories.features')</div>
            <div class="check_form">
                @foreach($features["values"] as $value)
                    <label class="checkbox-label" onclick="chooseAmenities({{ $value->id }})">
                        <input type="checkbox" class="real_checkbox">
                        <span class="custom_checkbox"></span>
                        @lang('amenities.'.$value->nameAmenity)
                    </label>
                @endforeach
            </div>
            <div class="check_form-header" style="margin-left: 1%">@lang('amenities_categories.location')</div>
            <div class="check_form">
                @foreach($location["values"] as $value)
                    <label class="checkbox-label" onclick="chooseAmenities({{ $value->id }})">
                        <input type="checkbox" class="real_checkbox">
                        <span class="custom_checkbox"></span>
                        @lang('amenities.'.$value->nameAmenity)
                    </label>
                @endforeach
            </div>
            <div class="check_form-header" style="margin-left: 1%">@lang('amenities_categories.safety')</div>
            <div class="check_form">
                @foreach($safety["values"] as $value)
                    <label class="checkbox-label" onclick="chooseAmenities({{ $value->id }})">
                        <input type="checkbox" class="real_checkbox">
                        <span class="custom_checkbox"></span>
                        @lang('amenities.'.$value->nameAmenity)
                    </label>
                @endforeach
            </div>

            <div class="footer-start">
                <div class="footer-start-progress_container">
                    <div class="footer-start-progress" style="width: 70%;"></div>
                </div>
                <div class="button-start_next-container w-100">
                    <button type="button" class="button button-start_next" id="buttonNext"
                            onclick="clickButtonNext('amenities',amenities)"
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
                width: 60%;
            }
            to{
                width: 70%;
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
