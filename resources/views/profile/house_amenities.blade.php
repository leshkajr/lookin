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
           <div>
               <div class="text-header" style="margin-left: 1%">@lang('categories.header')</div>
               <div  style="font-size: 16px;margin-left: 1%;margin-bottom: 3%">Після публікації оголошення можна додати більше зручностей.</div>

           </div>
            <form >
                 <div class="check_form">
                     @foreach($essentials as $value)
                         <label class="checkbox-label">
                             <input type="checkbox" class="real_checkbox">
                             <span class="custom_checkbox"></span>
                             @lang('amenities.'.$value->nameAmenity);
                         </label>
                     @endforeach
                 </div>
                 <div class="text-header" style="margin-left: 1%">@lang('amenities_categories.features')</div>
                <div class="check_form">
                    @foreach($features as $features)
                        <label class="checkbox-label">
                            <input type="checkbox" class="real_checkbox">
                            <span class="custom_checkbox"></span>
                            @lang('amenities.'.$features->nameAmenity);
                        </label>
                    @endforeach
                </div>
                <div class="text-header" style="margin-left: 1%">@lang('amenities_categories.location')</div>
                <div class="check_form">
                    @foreach($location as $locations)
                        <label class="checkbox-label">
                            <input type="checkbox" class="real_checkbox">
                            <span class="custom_checkbox"></span>
                            @lang('amenities.'.$locations->nameAmenity);
                        </label>
                    @endforeach
                </div>
                <div class="text-header" style="margin-left: 1%">@lang('amenities_categories.safety')</div>
                <div class="check_form">
                    @foreach($safety as $safetys)
                        <label class="checkbox-label">
                            <input type="checkbox" class="real_checkbox">
                            <span class="custom_checkbox"></span>
                            @lang('amenities.'.$safetys->nameAmenity);
                        </label>
                    @endforeach
                </div>
                <div class="div_button">
                    <button class="button_back">@lang('main.back')</button>
                    <button class="button button_house">@lang('main.next')</button>
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
