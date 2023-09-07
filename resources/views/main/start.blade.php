@extends('layouts.master')
@section('title', 'Look`in - ') {{-- добавить придумать --}}
@section('header')
    <header class="main-header">
        @include('layouts.header-without-anything')
    </header>
@endsection

@section('content')
    <main style="padding: 0 10%; margin-top: -15px;">
        <div class="d-flex flex-column">
            <div class="d-flex justify-content-end mb-1">
                <div class="text-welcome_your_guests"><a href="#">@lang('start.welcome_your_guests')</a></div>
            </div>
            <div class="d-flex flex-column">
                <div class="d-flex justify-content-end">
                    <div class="start-large-img"><img src="{{ asset("images/start-large-photos/photo10.jpg") }}"/></div>
                </div>
                <div class="d-flex justify-content-start">
                    <div class="start-large-block d-flex flex-column">
                        <div style="font-size: 28px; font-weight: 500; line-height: 33px; margin-bottom: 10px;">Україна: @lang("start.accommodation_for_recreation")</div>
                        <div style="font-size: 15px; font-weight: 300; margin-bottom: 12px;">@lang('start.find_and_book_unique_rooms')</div>
                        <div class="start-table-block mb-3">
                            <div class="start-table-label">
                                <div>@lang('start.location')</div>
                                <x-clear-input required value="Україна" class="start-table-input"/>
                            </div>
                            <div style="width: 100%;margin: 5px 0; background-color: var(--hr); height: 1px;"></div>
                            <div class="row">
                                <div class="col" style="width: 49%">
                                    <div class="start-table-label">
                                        <div>@lang('start.arrival')</div>
                                        <x-clear-input required value="Додайте дату" class="start-table-input"/>
                                    </div>
                                </div>
                                <div class="col" style="width: 2%">
                                    <div style="height: 90%;margin-top:1px; background-color: var(--hr); width: 1px;"></div>
                                </div>
                                <div class="col" style="width: 49%">
                                    <div class="start-table-label">
                                        <div>@lang('start.departure')</div>
                                        <x-clear-input required value="Додайте дату" class="start-table-input"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <x-primary-button style="width: 100%; padding: 10px 0;">
                                <div class="d-flex justify-content-center align-items-center gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 21 21" fill="none">
                                        <path d="M9 17C13.4183 17 17 13.4183 17 9C17 4.58172 13.4183 1 9 1C4.58172 1 1 4.58172 1 9C1 13.4183 4.58172 17 9 17Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M20 20L15 15" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                    @lang('start.search')
                                </div>

                            </x-primary-button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </main>
@endsection
