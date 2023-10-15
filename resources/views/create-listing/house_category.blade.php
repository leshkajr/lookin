@extends('layouts.master-create-listing')
@section('title', Lang::get('categories.header'))
@section('header')
    <header class="main-header">
        @include('layouts.header-create-listing')
    </header>
@stop
@section('content')
    <main class="d-flex flex-column align-items-center" style="padding-bottom: 1%;">
        <div class="house_container">
            <form method="post" action="{{ route("create-listing.type") }}">
                @csrf
                <input type="hidden" name="categoryId" id="categoryId"/>
                <input type="hidden" name="listingId" id="listingId"/>
                <div class="house_type_text">@lang('categories.header')</div>
                <div class="d-flex flex-wrap">
                    @foreach($categoriesListing as $category)
                        <div class="house_block" onclick="chooseCategory({{ $category->id }},this);">
                            <div style="margin-left: 25px;">
                                <div class="image_type_house" >
                                    <img style="width: 45px; height: 45px;" src="{{ asset($category->iconPath) }}" />
                                </div>
                                <div class="text_house_hed" >@lang('categories.'.$category->nameCategoryListing)</div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="footer-start">
                    <div class="footer-start-progress_container">
                        <div class="footer-start-progress" style="width: 10%;"></div>
                    </div>
                    <div class="button-start_next-container w-100">
                        <button type="submit" class="button button-start_next"
                                id="buttonNext" disabled>@lang('main.next')</button>
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
                width: 0;
            }
            to{
                width: 10%;
            }
        }
    </style>

@stop

@section('footer')
{{--    @include('layouts.footer')--}}
@stop

@section('dialogs_windows')
    <div class="dialogs_windows">
        @include('layouts.dialog-window-language')
        @include('layouts.dialog-window-currency')
    </div>
@stop
