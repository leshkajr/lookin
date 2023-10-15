@extends('layouts.master-create-listing')
@section('title', Lang::get('create-listing.what_type_of_accommodation'))
@section('header')
    <header class="main-header">
        @include('layouts.header-create-listing')
    </header>
@stop
@section('content')
  <main class="d-flex flex-column align-items-center">
      <div class="type_container">
          <form method="post" action="{{ route("create-listing.name") }}">
              @csrf
              <input type="hidden" name="categoryId" id="categoryId" value="{{ $_POST['categoryId'] }}"/>
              <input type="hidden" name="typeId" id="typeId"/>
              <input type="hidden" name="listingId" id="listingId"/>

              <div class="text-header" style="margin-bottom: 3%">@lang('create-listing.what_type_of_accommodation')</div>
              <div>
                  @foreach($typesListing as $type)
                      <div class="house_block1" onclick="chooseType({{ $type->id }},this)">
                          <div class="img_categoris">
                              <img style="width: 60px; height: 60px;" src="{{ asset('images/types-listings-svg/'.$type->nameType.'.svg') }}"/>
                          </div>
                          <div class="message-text-header" style="color: #8B8B8B;font-size: 28px">@lang('listing_type.'.$type->nameType)</div>
                          <div class="message-text-description">@lang('listing_type.'.$type->descriptionType)</div>
                      </div>
                  @endforeach
              </div>
              <div class="footer-start">
                  <div class="footer-start-progress_container">
                      <div class="footer-start-progress" style="width: 20%;"></div>
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
              width: 10%;
          }
          to{
              width: 20%;
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

