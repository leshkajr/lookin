@extends('layouts.master')
@section('title', 'Ukraine') {{-- добавить придумать --}}
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
                                        <x-clear-input required value="{{ Lang::get('start.add_date') }}" class="start-table-input"/>
                                    </div>
                                </div>
                                <div class="col" style="width: 2%">
                                    <div style="height: 90%;margin-top:1px; background-color: var(--hr); width: 1px;"></div>
                                </div>
                                <div class="col" style="width: 49%">
                                    <div class="start-table-label">
                                        <div>@lang('start.departure')</div>
                                        <x-clear-input required value="{{ Lang::get('start.add_date') }}" class="start-table-input"/>
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

            <div class="d-flex flex-column" style="margin-top: 4%">
                <div style="font-weight: 500; font-size: 25px;">@lang('start.the_best_place') Україні</div>
                <div style="font-weight: 300; font-size: 15px; margin-top: 5px;">@lang('start.guests_agree')</div>
                <div class="d-flex flex-row gap-5 start-listings" style="margin-top: 1.5%;">
                    <div class="start-listing">
                        <div class="start-listing-img"><img src="{{ asset('images/start-large-photos/photo1.jpg') }}"/></div>
                        <div class="d-flex flex-row mt-4 start-listing-header">
                            <div class="start-listing-header-title">Заміський будинок у місті Slavske</div>
                            <div class="d-flex flex-row justify-content-end flex-nowrap" style="width: 100%;">
                                <div class="d-flex flex-row justify-content-end flex-nowrap gap-1" style="width: 100%;">
                                    <svg style="margin-top: 3px;" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 21 19" fill="none"><path d="M10.5 0L13.9315 5.77696L20.4861 7.25532L16.0523 12.304L16.6717 18.9947L10.5 16.338L4.32825 18.9947L4.94773 12.304L0.513906 7.25532L7.06851 5.77696L10.5 0Z" fill="#7D7D80"/></svg>
                                    <div>5(10)</div>
                                </div>
                            </div>
                        </div>
                        <div class="start-listing-description mt-2">
                            To ye house <br>
                            Наш сучасний будинок знаходиться прямо
                            посеред карпатських гір.⠀Тут є все необхідне
                            щоб провести час у повній самоті та тиші.
                            Розтопити камін, укутатися в плед і під хрускіт
                            дров, пити гарячий чай, спостерігаючи, як за
                            вікном по горах стелиться сніжок. А які тут
                            неймовірні світанки, словами неможливо
                            передати!⠀В нашому будинку повністю
                            безпечно, та й всього за 3 км від нас
                            знаходиться у Славське (Львівська область).
                            У цих краях є все необхідне для
                            повноцінного відпочинку.
                        </div>
                        <div class="start-listing-price mt-2"><b>$121</b> @lang("start.for_night")</div>
                    </div>
                    <div class="start-listing">
                        <div class="start-listing-img"><img src="{{ asset('images/start-large-photos/photo3.jpg') }}"/></div>
                        <div class="d-flex flex-row mt-4 start-listing-header">
                            <div class="start-listing-header-title">Будинок у місті Vysloboky</div>
                            <div class="d-flex flex-row justify-content-end flex-nowrap" style="width: 100%;">
                                <div class="d-flex flex-row justify-content-end flex-nowrap gap-1" style="width: 100%;">
                                    <svg style="margin-top: 3px;" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 21 19" fill="none"><path d="M10.5 0L13.9315 5.77696L20.4861 7.25532L16.0523 12.304L16.6717 18.9947L10.5 16.338L4.32825 18.9947L4.94773 12.304L0.513906 7.25532L7.06851 5.77696L10.5 0Z" fill="#7D7D80"/></svg>
                                    <div>4.9(69)</div>
                                </div>
                            </div>
                        </div>
                        <div class="start-listing-description mt-2">
                            Затишний інтер'єр, велика панорамна вітрина,
                            камін і ще багато приємних дрібниць додадуть
                            комфорту Вашому відпочинку.Будинок
                            розрахований на 2 осіб.В будинку є:-спальня
                            з двоспальним ліжком, відпочинковою зоною
                            з кріслом, каміном та панорамною вітриною,-
                            передпокій з просторими шафами та міні-
                            кухнею з холодильником та мийкою,-
                            вбиральня з душем і туалетом.Також біля
                            будинку є простора зовнішня тераса для
                            відпочинку з виглядомна мальовничі ставки.
                        </div>
                        <div class="start-listing-price mt-2"><b>$101</b> @lang("start.for_night")</div>
                    </div>
                    <div class="start-listing">
                        <div class="start-listing-img"><img src="{{ asset('images/start-large-photos/photo4.jpg') }}"/></div>
                        <div class="d-flex flex-row mt-4 start-listing-header">
                            <div class="start-listing-header-title">Заміський будинок у місті Luzhky</div>
                            <div class="d-flex flex-row justify-content-end flex-nowrap gap-1" style="width: 100%;">
                                <svg style="margin-top: 3px;" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 21 19" fill="none"><path d="M10.5 0L13.9315 5.77696L20.4861 7.25532L16.0523 12.304L16.6717 18.9947L10.5 16.338L4.32825 18.9947L4.94773 12.304L0.513906 7.25532L7.06851 5.77696L10.5 0Z" fill="#7D7D80"/></svg>
                                <div>4.93(89)</div>
                            </div>
                        </div>
                        <div class="start-listing-description mt-2">
                            Будинок розташований на дикому березі.
                            3 метри від вашого ліжка плекає або буяє
                            море. Ви можете дивитися його, не вставаючи
                            з ліжка. Так само, як і місячні прогулянки,
                            незабутні сходи сонця на морі та заходи
                            сонця.Ознайомтеся з новим досвідом плавання
                            в крижаному зимовому морі!Завдяки наявності
                            ванни, вона дуже проста і зручна для всіх!
                            Двоповерховий будинок, побудований
                            безпосередньо на береговому захисті в 2
                            метрах від води. 3 кімнати, 2 ванні кімнати,
                            сауна. Кухня з природною скелею. Власна зона
                            пляж/тераса на воді з сходами до моря.
                        </div>
                        <div class="start-listing-price mt-2"><b>$115</b> @lang("start.for_night")</div>
                    </div>
                </div>
            </div>


            <div class="d-flex flex-column" style="margin-top: 4%">
                <div style="font-weight: 500; font-size: 25px;">@lang('start.accommodation_any_type')</div>
                <div style="font-weight: 300; font-size: 15px; margin-top: 5px;">@lang('start.find_a_accommodation')</div>
                <div class="d-flex flex-row gap-5 start-listings" style="margin-top: 1.5%;">
                    @foreach($types_listings as $type)
                    <div class="start-listing">
                        <div class="start-listing-img"><img src="{{ asset('images/types-listings-photos/'. $type->nameType .'.jpg') }}"/></div>
                        <div class="d-flex flex-row mt-4 start-listing-header">
                            <div class="start-listing-header-title">@lang('listing_type.'.$type->nameType)</div>
                        </div>
                        <div class="start-listing-description mt-2">
                            @lang('listing_type.'.$type->descriptionType)
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

        </div>
    </main>
@endsection

@section('dialogs_windows')
    @include('layouts.dialog-window-language')
@endsection
