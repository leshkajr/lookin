@extends('layouts.master')
@section('title', 'Search for new experiences')
@section('header')
    <header class="main-header">
        @include('layouts.header-2')
    </header>
@stop
@section('content')
    <main class="d-flex flex-row" style="margin-top: 5%;margin-left: 10%">
        <div>
            <div class="retangle_div1 d-flex flex-row justify-content-center align-items-center">
               <img class="photo_profils"
                    @if($user->profilePhoto === null) src="{{ asset("images/upload_file.png") }}"
                    @else src="{{ asset("storage/images/photos/".$user->profilePhoto) }}"
                    @endif
                    id="imageProfile" />
{{--               <img class="photo_profils" src="{{ asset('storage/images/photos/Tq80tfh1v4LZf2fQOAcNWvhFgnVM6qCtEPZpTxt8.jpg') }}" id="imageProfile" >--}}
            </div>
            <form enctype="multipart/form-data" style="margin: 0; padding:0;">
                <input type="file" id="fileInputImage" style="display: none" accept="image" name="files[]" size=1>
                <label for="fileInputImage" class="button" style="margin-left: 11%; margin-top: -10px;" >@lang('personal_data.add_photo')</label>
            </form>
        </div>
        <div class="d-flex flex-column" style="margin-left: 13%;padding-top: 2%;width: 70%">
            <div style="font-size: 24px;font-weight: 600">@lang('profils.profiles')</div>
            <div style="margin-top: 2%;font-size: 16px; width: 65%; margin-bottom: 4%">@lang('profils.information')</div>
            <div class="personal_block">
                <form>
                    <div class="personal_text_header">@lang('profils.School')</div>
                    <div class="personal_text_description">@lang('profils.Education')</div>
                    <div class="personal_divs" style="padding-left: 2%;padding-top: 1%;padding-bottom: 1%;">
                        <input type="text" placeholder="@lang('profils.where did you study')" class="input_text">
                    </div>
                    <div class="div_button" style="margin-top: 4%;padding-left: 1%;margin-bottom: 3%">
                        <button style="font-size: 20px;font-weight: 500" >@lang('personal_data.Cancel')</button>
                        <button class="button button_right" >@lang('verification.edit')</button>
                    </div>
                </form>
            </div>
            <div class="personal_block">
                <form>
                    <div class="personal_text_header">@lang('profils.My profession')</div>
                    <div class="personal_text_description">@lang('profils.Tell')</div>
                    <div class="personal_divs" style="padding-left: 2%;padding-top: 1%;padding-bottom: 1%;">
                        <input type="text" placeholder="@lang('profils.Whats your job')" class="input_text" style="font-size: 20px;font-weight: 200">
                    </div>
                    <div class="div_button" style="margin-top: 4%;padding-left: 1%;margin-bottom: 3%">
                        <button style="font-size: 20px;font-weight: 500" >@lang('personal_data.Cancel')</button>
                        <button class="button button_right" >@lang('verification.edit')</button>
                    </div>
                </form>
            </div>
            <div class="personal_block">

                    <div class="personal_text_header">@lang('profils.you speak')</div>
                       <div class="d-flex flex-wrap grid-container" id="div_languages">
                           <div class="div_languages" id="launges">
                               <div class="languages_text">Українська</div>
                           </div>
                           <div class="div_languages">
                               <div class="languages_text" >Англійська</div>
                           </div>

                       </div>
                @include('layouts.selection-leng')
                <div class="div_button" style="margin-top: 4%;padding-left: 1%;margin-bottom: 3%">
                    <button style="font-size: 20px;font-weight: 500" id="clean" >Скасувати</button>
                    <button class="button button_right" id="button_lang" >Редагувати</button>
                </div>


            </div>

            <div class="personal_block">
                <form>
                    <div class="personal_text_header">@lang('profils.when you were born')</div>
                    <div class="personal_divs" style="padding-left: 2%;padding-top: 1%;padding-bottom: 1%;">
                        <input type="text" placeholder="@lang('profils.when you were born')" class="input_text" style="font-size: 20px;font-weight: 200">
                    </div>
                    <div class="div_button" style="margin-top: 4%;padding-left: 1%;margin-bottom: 3%">
                        <button style="font-size: 20px;font-weight: 500" >@lang('personal_data.Cancel')</button>
                        <button class="button button_right" >@lang('verification.edit')</button>
                    </div>
                </form>
            </div>
            <div class="personal_block">
                <form>
                    <div class="personal_text_header">@lang('profils.The greatest admiration')</div>
                    <div class="personal_text_description">@lang('profils.Tell us what youre upset')</div>
                    <div class="personal_divs" style="padding-left: 2%;padding-top: 1%;padding-bottom: 1%;">
                        <input type="text" placeholder="@lang('profils.The greatest admiration')" class="input_text" style="font-size: 20px;font-weight: 200">
                    </div>
                    <div class="div_button" style="margin-top: 4%;padding-left: 1%;margin-bottom: 3%">
                        <button style="font-size: 20px;font-weight: 500" >@lang('personal_data.Cancel')</button>
                        <button class="button button_right" >@lang('verification.edit')</button>
                    </div>
                </form>
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

@section('scripts')

    <script src="{{ URL::asset('js/loadImage.js')}}"></script>
@stop
