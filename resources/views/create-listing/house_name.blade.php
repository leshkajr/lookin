@extends('layouts.master-create-listing')
@section('title', Lang::get('create-listing.add_the_name'))
@section('header')
    <header class="main-header">
        @include('layouts.header-create-listing')
    </header>
@stop
@section('content')
    <main style="display: flex; justify-content: center; align-items: center;">
        <div class="house_photo_container">
            <form method="post" action="{{ route("create-listing.description") }}">
                @csrf
                <input type="hidden" name="categoryId" id="categoryId" value="{{ $_POST['categoryId'] }}"/>
                <input type="hidden" name="typeId" id="typeId" value="{{ $_POST['typeId'] }}"/>
                <input type="hidden" name="listingId" id="listingId"/>

                <div class="text-header">@lang('create-listing.add_the_name')</div>
                <div class="location-text-description" style="margin-top: 2%">@lang('create-listing.concise_names')</div>
                <div class="div_photo_house" style="width: 100%; padding: 20px 25px;">
                    <textarea id="textarea" style="height: 70px;" maxlength="32" minlength="3" name="title"
                    required></textarea>
                </div>
                <div style="margin-top: 2%" class="d-flex flex-row">
                    <span id="textcounter">0</span>
                    <div>/32</div>
                </div>

                <div class="footer-start">
                    <div class="footer-start-progress_container">
                        <div class="footer-start-progress" style="width: 30%;"></div>
                    </div>
                    <div class="button-start_next-container w-100">
                        <button class="button button-start_next"
                                id="buttonNext">@lang('main.next')</button>
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
                width: 20%;
            }
            to{
                width: 30%;
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
