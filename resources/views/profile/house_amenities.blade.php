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
            <form class="check_form">
                @foreach($ameniti as $value)
                    <label class="checkbox-label">
                        <input type="checkbox" class="real_checkbox">
                        <span class="custom_checkbox"></span>
                     @lang('amenities.'.$value->nameAmenity);
                    </label>
                @endforeach

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
