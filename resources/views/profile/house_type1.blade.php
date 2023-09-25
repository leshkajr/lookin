@extends('layouts.master')
@section('title', 'Search for new experiences')
@section('header')
    <header class="main-header">
        @include('layouts.header-2')
    </header>
@stop
@section('content')
  <main class="d-flex flex-column align-items-center">
      <div class="type_container">
          <div class="text-header" style="margin-bottom: 3%">Який тип помешкання ви пропонуєте гостям?</div>
          <div>
              @foreach($typesListing as $type)
                  <div class="house_block1">
                      <div class="img_categoris">
                          <img style="width: 60px; height: 60px;" src="{{ asset('images/types-listings-svg/'.$type->nameType.'.svg') }}"/>
                      </div>
                      <div class="message-text-header" style="color: #8B8B8B;font-size: 30px">@lang('listing_type.'.$type->nameType)</div>
                      <div class="message-text-description">@lang('listing_type.'.$type->descriptionType)</div>
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

