@extends('layouts.master')
@section('title', 'Search for new experiences')
@section('header')
    <header class="main-header">
        @include('layouts.header-2')
    </header>
@stop
@section('content')
    <main class="d-flex flex-column align-items-center">
        <div class="house_container">
            <div  style="font-size: 16px;margin-left: 1%;margin-bottom: 3%">Після публікації оголошення можна додати більше зручностей.</div>
            <div class="d-flex flex-row">
                    <div class="house_block">
                        <div style="margin-left: 25px;">

                            <div class="text_house_hed" style="margin-top: 33%">@lang('amenities.wifi')</div>
                        </div>
                    </div>
                <div class="house_block">
                    <div style="margin-left: 25px;">
                        <div class="image_type_house" >
                            <img style="width: 50px; height: 50px;" src="{{asset('images/amenities/tv1.png') }}" />
                        </div>
                        <div class="text_house_hed">@lang('amenities.tv')</div>
                    </div>
                </div>
                <div class="house_block">
                    <div style="margin-left: 25px;">
                        <div class="image_type_house" >
                            <img style="width: 50px; height: 50px;" src="{{asset('images/amenities/eat1.png') }}" />
                        </div>
                        <div class="text_house_hed">Кухня</div>
                    </div>
                </div>

            </div>
            <div class="d-flex flex-row">
                <div class="house_block" style="padding-top: 1%">
                    <div style="margin-left: 25px;">
                        <div class="image_type_house" >
                            <img style="width: 50px; height: 50px;" src="{{asset('images/amenities/washer1.png') }}" />
                        </div>
                        <div class="text_house_hed">@lang('amenities.washer')</div>
                    </div>
                </div>
                <div class="house_block">
                    <div style="margin-left: 25px;">
                        <div class="image_type_house" >
                            <img style="width: 50px; height: 50px;" src="{{asset('images/amenities/car1.png') }}" />
                        </div>
                        <div class="text_house_hed">@lang('amenities.free_parking')</div>
                    </div>
                </div>
                <div class="house_block">
                    <div style="margin-left: 25px;">
                        <div class="image_type_house" >
                            <img style="width: 50px; height: 50px;" src="{{asset('images/amenities/parcur1.png') }}" />
                        </div>
                        <div class="text_house_hed">@lang('amenities.plate_parking')</div>
                    </div>
                </div>

            </div>
            <div class="d-flex flex-row">
                <div class="house_block">
                    <div style="margin-left: 25px;">
                        <div class="image_type_house" >
                            <img style="width: 50px; height: 50px;" src="{{asset('images/amenities/snowflake.png') }}" />
                        </div>
                        <div class="text_house_hed">@lang('amenities.air_conditioning')</div>
                    </div>
                </div>
                <div class="house_block">
                    <div style="margin-left: 25px;">

                        <div class="text_house_hed" style="margin-top: 30%">@lang('amenities.dedicated_workspace')</div>
                    </div>
                </div>
                <div class="house_block">
                    <div style="margin-left: 25px;">

                        <div class="text_house_hed" style="margin-top: 30%">@lang('amenities.installations')</div>
                    </div>
                </div>

            </div>
            <div class="d-flex flex-row">
                <div class="house_block">
                    <div style="margin-left: 25px;">
                        <div class="image_type_house" >
                            <img style="width: 50px; height: 50px;" src="{{asset('images/amenities/swimming-pool.png') }}" />
                        </div>
                        <div class="text_house_hed">@lang('amenities.history')</div>
                    </div>
                </div>
                <div class="house_block">
                    <div style="margin-left: 25px;">
                        <div class="image_type_house" >
                            <img style="width: 50px; height: 50px;" src="{{asset('images/amenities/cool.png') }}" />
                        </div>
                        <div class="text_house_hed">@lang('amenities.On wheels')</div>
                    </div>
                </div>
                <div class="house_block">
                    <div style="margin-left: 25px;">
                        <div class="image_type_house" >
                            <img style="width: 50px; height: 50px;" src="{{asset('images/amenities/cemping.png') }}" />
                        </div>
                        <div class="text_house_hed">"@lang('amenities.Camping')</div>
                    </div>
                </div>

            </div>

            <div class="container-button">
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
