<div class="m-fade" tabindex="-1" id="dialog-window-search">
    <div class="m-search d-flex flex-column justify-content-center align-items-center"
         onclick="closeSearch(event,'dialog-window-search');">
        @include('layouts.header-for-search')
        <div class="m-search-container">
            <div class="m-search-header">
                <div class="d-flex flex-row gap-4 w-100">
                    <div class="m-s-h-container" id="m-s-h-container-where"
                         onclick="openSearch('where','dialog-window-search')">
                        <div class="m-s-h-c-header">@lang('main.where')</div>
                        <div class="m-s-h-c-description"
                             id="main-where-description">
                            <div>@lang('main.search_directions')</div>
                            <div></div>
                            <button onclick="removeChoose('location');">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                                    <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                                </svg>
                            </button>
                        </div>
                    </div>

                    <div class="m-s-h-container" id="m-s-h-container-when-arrival"
                         onclick="openSearch('when','dialog-window-search')">
                        <div class="m-s-h-c-header">@lang('main.arrival')</div>
                        <div class="m-s-h-c-description"
                             id="main-when-arrival-description">
                            <div>@lang('main.add_date')</div>
                            <div></div>
                            <button onclick="removeChoose('date-arrival');">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                                    <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                                </svg>
                            </button>
                        </div>
                    </div>

                    <div class="m-s-h-container" id="m-s-h-container-when-departure"
                         onclick="openSearch('when-departure','dialog-window-search')">
                        <div class="m-s-h-c-header">@lang('main.departure')</div>
                        <div class="m-s-h-c-description"
                             id="main-when-departure-description">
                            <div>@lang('main.add_date')</div>
                            <div></div>
                            <button onclick="removeChoose('date-departure');">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                                    <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                                </svg>
                            </button>
                        </div>
                    </div>

                    <div class="m-s-h-container" id="m-s-h-container-guests"
                         onclick="openSearch('guests','dialog-window-search')">
                        <div class="m-s-h-c-header">@lang('main.who')</div>
                        <div class="m-s-h-c-description"
                             id="main-guests-description">
                            <div>@lang('main.add_guests')</div>
                            <div></div>
                            <button onclick="removeChoose('guests');">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                                    <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                                </svg>
                            </button>
                        </div>
                    </div>

                    <div class="d-flex justify-content-end align-items-center" style="width: 20%;">
                        <button class="button button-wide" onclick="buttonSearch();"
                        style="padding: 15px 50px; font-size: 19px;  border-radius: 12px;">
                            @lang('main.search')</button>
                    </div>
                </div>
            </div>

            <div class="m-s-body d-flex flex-column justify-content-center align-items-center">
                <div class="m-s-b-where flex-row" id="m-s-b-where">
                    <div style="width: 39%;">
                        <div class="m-s-b-header-text" style="margin-left: 15px;">
                            @lang('main.recent_searches')
                        </div>
                        <div class="m-s-b-recent-blocks">
                            <div class="recent-block d-flex flex-row w-100">
                                <div style="width: 25%">
                                    <div class="icon-clock">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="42" height="42" viewBox="0 0 42 42" fill="none">
                                            <path d="M21 41C32.0457 41 41 32.0457 41 21C41 9.9543 32.0457 1 21 1C9.9543 1 1 9.9543 1 21C1 32.0457 9.9543 41 21 41Z" stroke="#6B6B6B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M21 9V21L29 25" stroke="#6B6B6B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </div>
                                </div>
                                <div style="width: 75%; padding-left: 15px; padding-top: 10px;" class="d-flex flex-column">
                                    <div class="gap-2"
                                    style="color: var(--text-color-2);">
                                        Kryvyy Rih
                                        <svg style="margin: 0 3px;" xmlns="http://www.w3.org/2000/svg" width="5" height="5" viewBox="0 0 5 5" fill="none">
                                            <circle cx="2.5" cy="2.5" r="2.5" fill="#8B8B8B"/>
                                        </svg>
                                        @lang('main.options_apartments')
                                    </div>
                                    <div class="d-flex flex-row justify-content-start align-items-center mt-2 gap-2"
                                    style="font-size: 14px; font-weight: 300;">
                                        <div>@lang('main.whenever')</div>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="4" height="4" viewBox="0 0 4 4" fill="none">
                                            <circle cx="1.75" cy="1.75" r="1.75" fill="#8B8B8B"/>
                                        </svg>
                                        <div>1</div>
                                        <div>
                                            @lang('listing.guest')
{{--                                            @if((int)$listing['guests'] === 1)--}}
{{--                                                @lang('listing.guest')--}}
{{--                                            @elseif((int)$listing['guests'] >= 2 && (int)$listing['guests'] <= 4)--}}
{{--                                                @lang('listing.guest2-4')--}}
{{--                                            @else--}}
{{--                                                @lang('listing.guest5')--}}
{{--                                            @endif--}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="m-s-body-hr">

                    </div>
                    <div style="width: 59%; margin-left: 30px; margin-right: 10px;">
                        <div class="m-s-b-header-text">
                            @lang('main.search_by_region')
                        </div>
                        <div>
                            <input type="text" class="input"
                                   style=" font-size: 15px;"
                                   placeholder="{{ Lang::get('main.entry_region') }}"
                                   onkeyup="showLocation(this.value, 'Not found');"
                                   id="input-location-search"/>

                            <div class="m-s-b-values" id="cities_countries_list">
{{--                                <div class="value d-flex flex-row align-items-center">--}}
{{--                                    <div class="icon-location">--}}
{{--                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">--}}
{{--                                            <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>--}}
{{--                                        </svg>--}}
{{--                                    </div>--}}
{{--                                    <div class="ms-3">Kryvyi Rih, Ukraine</div>--}}
{{--                                </div>--}}
                            </div>
                        </div>
                    </div>


                </div>


                <div class="m-s-b-when" id="m-s-b-when">
                    <div class="calendar-container-main">
                        <div class="d-flex flex-row justify-content-center" style="column-gap: 60px;">
                            <div class="d-flex flex-column">
                                <div class="d-flex flex-row" style="width: 100%;">
                                    <button id="prevMonth-main" style="float: left; margin-left: 10px;">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="currentColor" class="bi bi-chevron-left" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
                                        </svg>
                                    </button>
                                    <div id="currentMonth-main-1" class="currentMonth">
                                    </div>
                                </div>
                                <div class="calendar calendar-main" id="calendar-main-1"></div>
                            </div>
                            <div class="d-flex flex-column">
                                <div class="d-flex flex-row" style="width: 100%">
                                    <div id="currentMonth-main-2" class="currentMonth">
                                    </div>
                                    <button id="nextMonth-main" style="float: right; margin-right: 10px;">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                                        </svg>
                                    </button>
                                </div>
                                <div class="calendar calendar-main" id="calendar-main-2">
                                </div>
                            </div>


                        </div>
                    </div>
                </div>

                <div class="m-s-b-guests-container" id="m-s-b-guests">
                    <div class="m-s-b-guests">
                        <div class="m-s-b-g-counters w-100">
                            <div class="m-s-b-g-counter d-flex flex-row w-100" style="margin-top: 0;" id="counter_guests">
                                <div style="width: 60%">
                                    <div class="m-s-b-g-c-header">@lang('main.guests')</div>
                                    <div class="m-s-b-g-c-description">@lang('main.any_age')</div>
                                </div>
                                <div style="width: 40%" class="d-flex align-items-center justify-content-end">
                                    <div class="m-s-b-g-counter-container d-flex flex-row gap-3">
                                        <button onclick="number_counter('main_search_counter_guests','minus','guests')">
                                            <div>-</div>
                                        </button>
                                        <div class="m-s-b-g-c-number" id="main_search_counter_guests">0</div>
                                        <button onclick="number_counter('main_search_counter_guests','plus','guests')">
                                            <div>+</div>
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <div class="m-s-b-g-counter d-flex flex-row w-100" id="counter_guests">
                                <div style="width: 60%">
                                    <div class="m-s-b-g-c-header">@lang('main.pets')</div>
                                    <div class="m-s-b-g-c-description">@lang('main.traveling_with_animal')</div>
                                </div>
                                <div style="width: 40%" class="d-flex align-items-center justify-content-end">
                                    <div class="m-s-b-g-counter-container d-flex flex-row gap-3">
                                        <button onclick="number_counter('main_search_counter_animals','minus','animals')">
                                            <div>-</div>
                                        </button>
                                        <div class="m-s-b-g-c-number" id="main_search_counter_animals">0</div>
                                        <button onclick="number_counter('main_search_counter_animals','plus','animals')">
                                            <div>+</div>
                                        </button>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>








            </div>
        </div>
    </div>
</div>
