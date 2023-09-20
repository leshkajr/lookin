@extends('layouts.master')
@section('title', 'Search for new experiences')
@section('header')
    <header class="main-header">
        @include('layouts.header')
    </header>
@stop
@section('content')
  <main>
      <div class="house_container1">
          <div class="house_type_text">Який тип помешкання ви пропонуєте гостям?</div>
            <div class="house_type1">
             <div class="type_text">Ціле помешкання</div>
                <div class="type_text1">Усе помешкання в повному позпорядженні гостей.</div>
            </div>
          <div class="house_type1">
              <div>Ціле помешкання</div>
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

