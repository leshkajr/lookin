@extends('layouts.master')
@section('title', 'Search for new experiences')
@section('header')
    <header class="main-header">
        @include('layouts.header-2')
    </header>
@stop
@section('content')
    <main>
    <div class="verification_container" style="margin-top: 7%">
    <div class="d-flex flex-row">
     <div class="div_information" style="padding: 4% 0;">
         <div class="retangle_div">
             <div class="text_reg">O</div>
         </div>
         <div class="text_info">Ольга</div>
         <div class="text_info1">@lang('verification.Guest')</div>
     </div>
     </div>
        <div class="div_information" style="margin-top: 6%;">
            <div style="font-size: 18px;margin-left: 10%;font-weight: 600">@lang('verification.Verified')</div>
            <div class="informati" style="margin-top: 3%">
                <form style="margin: 0;">
                    <input class="input_text" style="margin-left: 5%;margin-top: 2%;margin-bottom: 2%" type="email" placeholder="Shishova123@gmail.com">
                </form>
            </div>
        </div>
        <div class="div_information" style="margin-top: 4%">
            <div style="font-size: 18px;margin-left: 10%;font-weight: 600">@lang('verification.verification')</div>
            <div style="width: 80%;margin-left: 10%;font-size: 14px;margin-top: 3%">@lang('verification.Before booking')</div>
            <div class="informati" style="margin-top: 3%">
                <button style=" all: unset;margin-top: 2%;margin-bottom: 2%;margin-left: 35%;font-weight: 600">@lang('verification.Verification')</button>
            </div>
        </div>
        <div class="div_information" style="margin-top: 4%">
            <div style="font-size: 18px;margin-left: 10%;font-weight: 600">@lang('verification.your_profile')</div>
            <div style="width: 80%;margin-left: 10%;font-size: 14px;margin-top: 3%">@lang('verification.Lookin_profile')</div>
            <div style="width: 65%;margin-left: 10%;font-size: 14px;margin-top: 3%">@lang('verification.Create_profile') </div>
            <button class="button " style="margin-left: 30%;margin-top: 3%">@lang('verification.Create')</button>
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
