@extends('layouts.master')
@section('title', 'Search for new experiences')
@section('header')
    <header class="main-header">
        @include('layouts.header')
        @include('layouts.header-categories')
    </header>
@stop
@section('content')

@stop

@section('footer')
    @include('layouts.footer')
@stop

@section('dialogs_windows')
    <div class="dialogs_windows">
        @include('layouts.dialog-window-language')
        @include('layouts.dialog-window-currency')
        @include('layouts.dialog-window-filters')
    </div>
@stop
