@extends('layouts.master-create-listing')
@section('title', 'Become a host')
@section('header')
    <header class="main-header">
        @include('layouts.header-2')
    </header>
@stop
@section('content')
    <main class="d-flex flex-column align-items-center" style="padding: 1.5% 4% 0 6%;">
        <div class="house_start_container">
            <form method="post" action="{{ route("create-listing.category") }}"
            class="d-flex flex-row w-100" style="height: 450px">
                @csrf
                <div style="width: 50%; height: 100%; padding-right: 150px;"
                     class="d-flex flex-column justify-content-center align-items-start">
                    <div style="font-size: 50px; font-weight: 600; margin-top: -50px;">
                        @lang("create-listing.renting_a_house_on_lookin")</div>
                    <div style="margin-top: 12px; font-size: 33px;">
                        <button class="button button-pulser" type="submit" style="padding: 8px 32px;font-weight: 600">@lang('create-listing.start')</button></div>
                </div>
                <div style="width: 50%; height: 100%">
                    <div class="house_start_value">
                        <div class="house_start_value_number">1</div>
                        <div class="house_start_value_text">
                            <div class="house_start_value_title">@lang('create-listing.tell_us_about_housing')</div>
                            <div class="house_start_value_description">@lang('create-listing.share_basic_information')</div>
                        </div>
                        <div class="house_start_value_img">
                            <img style="width: 120px; height: 120px;"
                                src="https://a0.muscache.com/4ea/air/v2/pictures/da2e1a40-a92b-449e-8575-d8208cc5d409.jpg"/>
                        </div>
                    </div>
                    <hr style="margin-bottom: 35px;"/>
                    <div class="house_start_value">
                        <div class="house_start_value_number">2</div>
                        <div class="house_start_value_text">
                            <div class="house_start_value_title">@lang('create-listing.a_bright_noticeable_page')</div>
                            <div class="house_start_value_description">@lang('create-listing.add_5_photos')
                            </div>
                        </div>
                        <div class="house_start_value_img">
                            <img style="width: 110px; height: 110px;"
                                 src="https://a0.muscache.com/4ea/air/v2/pictures/bfc0bc89-58cb-4525-a26e-7b23b750ee00.jpg"/>
                        </div>
                    </div>
                    <hr style="margin-bottom: 35px;"/>
                    <div class="house_start_value">
                        <div class="house_start_value_number">3</div>
                        <div class="house_start_value_text">
                            <div class="house_start_value_title">@lang('create-listing.complete_place_the_ad')</div>
                            <div class="house_start_value_description">@lang('create-listing.you_need_to_specify')
                            </div>
                        </div>
                        <div class="house_start_value_img">
                            <img style="width: 100px; height: 100px; margin-left: 5px;"
                                 src="https://a0.muscache.com/4ea/air/v2/pictures/c0634c73-9109-4710-8968-3e927df1191c.jpg"/>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </main>
@stop

@section('footer')
    @include('layouts.footer')
@stop

@section('dialogs_windows')
    <div class="dialogs_windows">
        @include('layouts.dialog-window-language')
        @include('layouts.dialog-window-currency')
    </div>
@stop
