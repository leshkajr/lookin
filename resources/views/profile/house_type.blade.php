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
            <div class="house_type_text">@lang('categories.header')</div>
            <div class="d-flex flex-wrap">
                @foreach($categoriesListing as $category)
                    <div class="house_block">
                        <div style="margin-left: 25px;">
                            <div class="image_type_house" >
                                <img style="width: 50px; height: 50px;" src="{{ asset($category->iconPath) }}" />
                            </div>
                            <div class="text_house_hed" >@lang('categories.'.$category->nameCategoryListing)</div>
                        </div>
                    </div>
                @endforeach
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
