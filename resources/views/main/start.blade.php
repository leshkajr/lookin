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
                            <div style="width: 100%; background-color: var(--hr); height: 1px;"></div>
                            <div class="row">
                                <div class="col" style="width: 49%">
                                    <div class="start-table-label">
                                        <div>@lang('start.arrival')</div>
                                        <x-clear-input required value="{{ Lang::get('start.add_date') }}" class="start-table-input"/>
                                    </div>
                                </div>
                                <div class="col" style="width: 2%">
                                    <div style="height: 86%;margin-top:4px; background-color: var(--hr); width: 1px;"></div>
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
                        <div class="d-flex flex-row mt-4 start-listing-header ms-1">
                            <div class="start-listing-header-title" style="font-size: 18px;">@lang('listing_type.'.$type->nameType)</div>
                        </div>
                        <div class="start-listing-description mt-2 ms-1" style="height: auto; font-size: 16px;">
                            @lang('listing_type.'.$type->descriptionType)
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            <div class="d-flex flex-column" style="margin:3% 0">
                <div style="font-weight: 500; font-size: 25px;">@lang('start.accommodation_amenities')</div>
                <div class="d-flex flex-fow gap-3 mt-3" style="display: flex">
                    <div class="start-amenities-block">
                        <div class="mb-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50" fill="none">
                                <g clip-path="url(#clip0_206_644)">
                                    <path d="M20.6352 33.7453C20.4757 33.7513 20.3167 33.7237 20.1685 33.6644C20.0203 33.6051 19.8861 33.5155 19.7747 33.4011L9.13643 22.6846C8.82628 22.3921 8.57919 22.0393 8.4103 21.6479C8.24141 21.2564 8.1543 20.8346 8.1543 20.4083C8.1543 19.982 8.24141 19.5602 8.4103 19.1687C8.57919 18.7773 8.82628 18.4245 9.13643 18.132C9.43993 17.8286 9.80124 17.5892 10.199 17.428C10.5967 17.2667 11.0227 17.1869 11.4518 17.1934C12.3137 17.2067 13.1394 17.5415 13.7672 18.132L24.4994 28.8486C24.6137 28.96 24.7034 29.0941 24.7626 29.2423C24.8219 29.3905 24.8495 29.5495 24.8436 29.709C24.8505 29.8686 24.8234 30.0279 24.7641 30.1763C24.7047 30.3246 24.6145 30.4587 24.4994 30.5695L21.6521 33.495C21.3249 33.6208 20.9833 33.7049 20.6352 33.7453ZM11.3736 18.2259C10.7993 18.2387 10.247 18.4486 9.80913 18.8204C9.60458 19.0134 9.44164 19.2462 9.33026 19.5045C9.21889 19.7627 9.16144 20.041 9.16144 20.3223C9.16144 20.6035 9.21889 20.8818 9.33026 21.1401C9.44164 21.3983 9.60458 21.6311 9.80913 21.8241L20.5257 32.5407H20.6978L23.6233 29.6308V29.4587L12.9068 18.9143C12.7108 18.7021 12.4739 18.5318 12.2105 18.4135C11.947 18.2952 11.6623 18.2314 11.3736 18.2259Z" fill="#7D7D80" stroke="#7D7D80" stroke-width="0.5" stroke-miterlimit="10"/>
                                    <path d="M33.589 42.913C33.5219 42.9149 33.4553 42.9002 33.3952 42.8702C33.3352 42.8402 33.2835 42.7958 33.2448 42.7409L22.2936 31.7897C22.2145 31.6843 22.1761 31.5538 22.1855 31.4223C22.1948 31.2908 22.2512 31.1672 22.3444 31.074C22.4376 30.9808 22.5614 30.9243 22.6928 30.915C22.8243 30.9056 22.9547 30.944 23.0602 31.0231L34.0114 41.9743C34.0964 42.084 34.1425 42.2188 34.1425 42.3576C34.1425 42.4963 34.0964 42.6312 34.0114 42.7409C33.8898 42.8374 33.7433 42.8971 33.589 42.913Z" fill="#7D7D80" stroke="#7D7D80" stroke-width="0.5" stroke-miterlimit="10"/>
                                    <path d="M30.8355 45.6665C30.7694 45.6628 30.7048 45.6456 30.6456 45.616C30.5864 45.5864 30.5339 45.545 30.4913 45.4943L25.0157 40.0031C24.4522 39.4545 24.0887 38.733 23.9832 37.9537C23.935 37.5799 23.9719 37.2 24.0911 36.8424C24.2103 36.4848 24.4087 36.1588 24.6715 35.8886L26.8931 33.6515C27.5108 33.173 28.2853 32.9429 29.0641 33.0066C29.8428 33.0703 30.5696 33.4231 31.1015 33.9956L36.5927 39.4868C36.6964 39.5906 36.7547 39.7313 36.7547 39.878C36.7547 40.0247 36.6964 40.1653 36.5927 40.2691C36.4889 40.3728 36.3482 40.4311 36.2015 40.4311C36.0548 40.4311 35.9142 40.3728 35.8104 40.2691L30.3192 34.7779C30.1701 34.5767 29.982 34.4077 29.7661 34.281C29.5502 34.1543 29.3109 34.0724 29.0626 34.0403C28.8143 34.0081 28.5621 34.0264 28.321 34.094C28.08 34.1616 27.855 34.2771 27.6596 34.4337L25.4381 36.6552C25.2896 36.8144 25.1809 37.0067 25.1211 37.2161C25.0612 37.4255 25.0519 37.6461 25.0939 37.8598C25.1883 38.4139 25.4568 38.9236 25.8605 39.3148L31.3518 44.806C31.4368 44.9157 31.4829 45.0505 31.4829 45.1893C31.4829 45.3281 31.4368 45.4629 31.3518 45.5726C31.1891 45.643 31.0125 45.6751 30.8355 45.6665Z" fill="#7D7D80" stroke="#7D7D80" stroke-width="0.5" stroke-miterlimit="10"/>
                                    <path d="M41.1295 34.1677C40.681 34.1798 40.235 34.0952 39.822 33.9198C39.409 33.7443 39.0386 33.4821 38.7359 33.1508L27.7847 22.1997C27.6997 22.09 27.6536 21.9551 27.6536 21.8164C27.6536 21.6776 27.6997 21.5427 27.7847 21.433L27.9568 21.261C27.6126 21.261 27.3623 21.3548 27.0181 21.3548C24.2708 21.3124 21.6512 20.188 19.7277 18.2259C17.846 16.4266 16.7262 13.974 16.5988 11.3736C16.529 10.1382 16.7232 8.90216 17.1683 7.74763C17.6134 6.5931 18.2992 5.54658 19.1802 4.67773C19.2899 4.59274 19.4247 4.54663 19.5635 4.54663C19.7023 4.54663 19.8371 4.59274 19.9468 4.67773L43.5544 28.4262C43.8803 28.7452 44.1393 29.1261 44.3161 29.5466C44.4928 29.967 44.5839 30.4185 44.5839 30.8745C44.5839 31.3306 44.4928 31.7821 44.3161 32.2026C44.1393 32.623 43.8803 33.0039 43.5544 33.3229C42.8524 33.8475 42.0055 34.1426 41.1295 34.1677ZM28.8642 21.8242L39.5025 32.4625C39.9623 32.9108 40.5812 33.1583 41.2234 33.1508C41.8539 33.1236 42.4559 32.8806 42.9286 32.4625C43.151 32.2441 43.3276 31.9835 43.4481 31.6961C43.5686 31.4087 43.6307 31.1002 43.6307 30.7885C43.6307 30.4768 43.5686 30.1683 43.4481 29.8809C43.3276 29.5935 43.151 29.3329 42.9286 29.1145L19.4618 5.78848C18.1494 7.3081 17.4717 9.27421 17.5688 11.2797C17.6905 13.6048 18.6718 15.8016 20.3222 17.4437C21.1688 18.3132 22.1806 19.0047 23.2983 19.4776C24.4159 19.9504 25.6168 20.1951 26.8304 20.1972C27.6467 20.2112 28.46 20.095 29.2397 19.853C29.2948 19.8278 29.3546 19.8142 29.4152 19.8133C29.4758 19.8124 29.536 19.824 29.5919 19.8476C29.6477 19.8711 29.6981 19.906 29.7398 19.95C29.7815 19.994 29.8137 20.0462 29.8342 20.1033C29.8903 20.2093 29.9197 20.3275 29.9197 20.4475C29.9197 20.5675 29.8903 20.6856 29.8342 20.7917L28.8642 21.8242Z" fill="#7D7D80" stroke="#7D7D80" stroke-width="0.5" stroke-miterlimit="10"/>
                                    <path d="M25.0157 49.6089C19.3261 49.6058 13.8136 47.63 9.41733 44.0183C5.0211 40.4065 2.01314 35.3822 0.905969 29.8014C-0.201202 24.2205 0.660875 18.4284 3.34537 13.4119C6.02987 8.39544 10.3707 4.46492 15.6282 2.29005C20.8857 0.115174 26.7347 -0.169506 32.1786 1.48452C37.6224 3.13855 42.3244 6.62898 45.4834 11.3611C48.6424 16.0931 50.0629 21.7741 49.5029 27.4361C48.9429 33.0981 46.4371 38.3907 42.4124 42.4124C40.1331 44.7033 37.4217 46.5191 34.4354 47.7544C31.4491 48.9897 28.2474 49.6201 25.0157 49.6089ZM25.0157 1.32979C20.3364 1.28659 15.7511 2.6433 11.8487 5.2257C7.94633 7.80809 4.90512 11.4982 3.11572 15.822C1.32633 20.1458 0.870451 24.9059 1.8067 29.4908C2.74294 34.0756 5.02855 38.2758 8.36988 41.5519C12.7939 45.9592 18.7712 48.4535 25.0157 48.4981C28.1101 48.5029 31.1744 47.8911 34.0297 46.6984C36.885 45.5058 39.4742 43.7563 41.6458 41.5519C46.0559 37.1299 48.5508 31.1512 48.592 24.9061C48.5551 18.6647 46.0593 12.6894 41.6458 8.27593C37.2324 3.86249 31.2571 1.36673 25.0157 1.32979Z" fill="#7D7D80" stroke="#7D7D80" stroke-width="0.5" stroke-miterlimit="10"/>
                                    <path d="M21.4017 43.8674C17.6215 43.1469 14.1507 41.2914 11.4518 38.5482C11.3727 38.4428 11.3343 38.3123 11.3437 38.1809C11.353 38.0494 11.4094 37.9257 11.5026 37.8325C11.5958 37.7393 11.7196 37.6828 11.851 37.6735C11.9825 37.6642 12.1129 37.7026 12.2184 37.7816C14.7784 40.3397 18.0492 42.0678 21.6051 42.741C21.8711 42.8348 22.1214 43.0851 22.0431 43.3511C22.0138 43.4987 21.9335 43.6314 21.8162 43.7257C21.699 43.8201 21.5522 43.8703 21.4017 43.8674Z" fill="#7D7D80" stroke="#7D7D80" stroke-width="0.5" stroke-miterlimit="10"/>
                                    <path d="M43.0225 20.2753C42.9012 20.2743 42.7838 20.2319 42.6899 20.1551C42.596 20.0783 42.5312 19.9717 42.5062 19.8529C41.6087 16.8993 39.9966 14.2125 37.8128 12.0306C36.1563 10.3427 34.1794 9.00275 31.9979 8.08933C29.8164 7.17591 27.4744 6.70747 25.1095 6.7115C24.9778 6.70036 24.8545 6.64196 24.7625 6.54707C24.6705 6.45219 24.616 6.32719 24.6089 6.1952C24.616 6.06322 24.6705 5.93827 24.7625 5.84338C24.8545 5.7485 24.9778 5.69009 25.1095 5.67896C30.165 5.7439 34.9964 7.77522 38.5795 11.3423C40.8965 13.6523 42.5824 16.5179 43.4762 19.6652C43.5089 19.8 43.4922 19.942 43.429 20.0654C43.3658 20.1889 43.2605 20.2856 43.132 20.3379L43.0225 20.2753Z" fill="#7D7D80" stroke="#7D7D80" stroke-width="0.5" stroke-miterlimit="10"/>
                                </g>
                                <defs>
                                    <clipPath id="clip0_206_644">
                                        <rect width="50" height="50" fill="white"/>
                                    </clipPath>
                                </defs>
                            </svg>
                        </div>
                        <div class="start-amenities-text">Кухня</div>
                    </div>

                    <div class="start-amenities-block">
                        <div class="mb-1">
                            <img src="{{ asset('images/amenities-svg/swimming-pool.svg') }}" />
                        </div>
                        <div class="start-amenities-text">Кухня</div>
                    </div>

                    <div class="start-amenities-block">
                        <div class="mb-1">
                            <img src="{{ asset('images/amenities-svg/swimming-pool.svg') }}" />
                        </div>
                        <div class="start-amenities-text">Кухня</div>
                    </div>

                    <div class="start-amenities-block">
                        <div class="mb-1">
                            <img src="{{ asset('images/amenities-svg/swimming-pool.svg') }}" />
                        </div>
                        <div class="start-amenities-text">Кухня</div>
                    </div>

                    <div class="start-amenities-block">
                        <div class="mb-1">
                            <img src="{{ asset('images/amenities-svg/swimming-pool.svg') }}" />
                        </div>
                        <div class="start-amenities-text">Кухня</div>
                    </div>
                </div>
            </div>


            <div class="d-flex flex-column" style="margin:3% 0">
                <div style="font-weight: 500; font-size: 25px;">Україна: @lang('start.other_great_vacation_accommodations')</div>

                <div class="d-flex flex-wrap align-items-center justify-content-left listings mt-3">
                    <div class="listing-block">
                        <img class="listing-img"
                             src="https://a0.muscache.com/im/pictures/prohost-api/Hosting-807997252988813015/original/24968789-974c-46c7-abd5-357796bb11d5.jpeg?im_w=1200"/>
                        <div class="listing-like">
                            <button>
                                <svg xmlns="http://www.w3.org/2000/svg" width="26" height="27" viewBox="0 0 33 28" fill="none">
                                    <path
                                        d="M16.641 27.7833C15.4432 26.6033 14.2689 25.453 13.1025 24.2962C9.77867 20.9963 6.4449 17.707 3.14466 14.3844C2.0032 13.2376 1.1414 11.886 0.808948 10.2886C0.351651 8.09243 0.920953 6.08125 2.17941 4.26639C4.62356 0.740473 9.21579 -0.408468 13.2366 1.46501C14.5093 2.05748 15.6158 2.87735 16.631 3.89565C16.7487 3.78407 16.8579 3.6838 16.9656 3.57999C18.5672 2.06172 20.4271 1.05401 22.6343 0.684686C27.3999 -0.121056 32.0371 3.35613 32.5636 8.10514C32.8183 10.408 31.9765 12.3076 30.509 13.984C29.7242 14.8809 28.841 15.6923 27.9942 16.534C24.294 20.2075 20.5918 23.8815 16.8878 27.5559C16.8136 27.6266 16.7344 27.6972 16.641 27.7833ZM16.6788 24.6105C16.7965 24.4693 16.8793 24.3513 16.9798 24.2518C20.6178 20.6484 24.2562 17.0453 27.895 13.4424C28.6659 12.6709 29.3118 11.7863 29.8098 10.8197C30.1123 10.2427 30.337 9.63824 30.3328 8.97091C30.3049 4.92384 26.302 1.94873 22.3818 3.08779C20.4056 3.6612 18.7876 4.82003 17.3651 6.26556C17.119 6.51484 16.8935 6.7846 16.6353 7.0706C16.4426 6.85875 16.2786 6.67514 16.1131 6.49366C14.9001 5.14382 13.3996 4.07728 11.7199 3.37096C8.42248 1.98899 4.74983 3.467 3.40648 6.71681C3.03765 7.6087 2.82077 8.54085 2.98985 9.50689C3.24596 10.9673 4.06567 12.1331 5.09441 13.1557C8.84268 16.8833 12.6 20.6025 16.3663 24.3132C16.4455 24.3986 16.5332 24.4749 16.6788 24.6105Z"
                                        fill="white" fill-opacity="0.8"/>
                                    <path class="fill" opacity="0.5"
                                          d="M16.6765 25.3093C16.5357 25.1706 16.4463 25.0925 16.3646 25.0094C12.6569 21.2043 8.95026 17.3992 5.24483 13.594C4.22965 12.5479 3.42074 11.3543 3.168 9.8609C3.00115 8.87253 3.21517 7.91884 3.57914 7.00633C4.90479 3.68286 8.52903 2.16923 11.783 3.58315C13.4406 4.30579 14.9213 5.39698 16.1182 6.77802C16.2816 6.9637 16.4435 7.15083 16.6336 7.3683C16.8884 7.07569 17.1109 6.7997 17.3538 6.54466C18.7576 5.06716 20.3543 3.88154 22.3044 3.29343C26.1764 2.12805 30.1231 5.17192 30.1506 9.31253C30.1548 9.99529 29.933 10.613 29.6345 11.204C29.1434 12.1918 28.5068 13.0959 27.7471 13.8845C24.1562 17.5716 20.5657 21.258 16.9757 24.9437C16.8743 25.0441 16.7927 25.1648 16.6765 25.3093Z"
                                          fill="black" fill-opacity="0.7"/>
                                </svg>
                            </button>
                        </div>
                        <div class="m-2 mt-3">
                            <div class="row">
                                <div class="col listing-localization">Bernati, Latvia</div>
                                <div class="col text-end">
                                    <svg style="margin-top: -3px;" xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                         viewBox="0 0 13 13" fill="none">
                                        <path
                                            d="M6.5 0.43103L8.21927 4.59138L12.6819 4.95146L9.28184 7.88278L10.3206 12.2657L6.5 9.91697L2.6794 12.2657L3.71816 7.88278L0.318133 4.95146L4.78073 4.59138L6.5 0.43103Z"
                                            fill="#636060"/>
                                    </svg>
                                    <span style="margin-left: 5px;">5,0</span>
                                </div>
                            </div>
                            <div class="listing-category">Beach</div>
                            <div class="listing-date">11-16 sept.</div>
                            <div class="listing-price-block"><span class="listing-price">100$</span> for night</div>
                        </div>
                    </div>

                    <div class="listing-block">
                        <img class="listing-img"
                             src="https://a0.muscache.com/im/pictures/8ce68d61-709d-4897-9b80-c691e7db2bd8.jpg?im_w=720"/>
                        <div class="m-2 mt-3">
                            <div class="row">
                                <div class="col listing-localization">Bernati, Latvia</div>
                                <div class="col text-end">
                                    <svg style="margin-top: -3px;" xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                         viewBox="0 0 13 13" fill="none">
                                        <path
                                            d="M6.5 0.43103L8.21927 4.59138L12.6819 4.95146L9.28184 7.88278L10.3206 12.2657L6.5 9.91697L2.6794 12.2657L3.71816 7.88278L0.318133 4.95146L4.78073 4.59138L6.5 0.43103Z"
                                            fill="#636060"/>
                                    </svg>
                                    <span style="margin-left: 5px;">5,0</span>
                                </div>
                            </div>
                            <div class="listing-category">Beach</div>
                            <div class="listing-date">11-16 sept.</div>
                            <div class="listing-price-block"><span class="listing-price">100$</span> for night</div>
                        </div>
                    </div>

                    <div class="listing-block">
                        <img class="listing-img"
                             src="https://a0.muscache.com/im/pictures/miso/Hosting-782583043344736922/original/5a43c686-6c35-44c7-8504-177aa003191e.jpeg?im_w=720"/>
                        <div class="m-2 mt-3">
                            <div class="row">
                                <div class="col listing-localization">Bernati, Latvia</div>
                                <div class="col text-end">
                                    <svg style="margin-top: -3px;" xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                         viewBox="0 0 13 13" fill="none">
                                        <path
                                            d="M6.5 0.43103L8.21927 4.59138L12.6819 4.95146L9.28184 7.88278L10.3206 12.2657L6.5 9.91697L2.6794 12.2657L3.71816 7.88278L0.318133 4.95146L4.78073 4.59138L6.5 0.43103Z"
                                            fill="#636060"/>
                                    </svg>
                                    <span style="margin-left: 5px;">5,0</span>
                                </div>
                            </div>
                            <div class="listing-category">Beach</div>
                            <div class="listing-date">11-16 sept.</div>
                            <div class="listing-price-block"><span class="listing-price">100$</span> for night</div>
                        </div>
                    </div>

                    <div class="listing-block">
                        <img class="listing-img"
                             src="https://a0.muscache.com/im/pictures/dfa46b83-bb39-4ce8-87e8-1b6370c62540.jpg?im_w=720"/>
                        <div class="m-2 mt-3">
                            <div class="row">
                                <div class="col listing-localization">Bernati, Latvia</div>
                                <div class="col text-end">
                                    <svg style="margin-top: -3px;" xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                         viewBox="0 0 13 13" fill="none">
                                        <path
                                            d="M6.5 0.43103L8.21927 4.59138L12.6819 4.95146L9.28184 7.88278L10.3206 12.2657L6.5 9.91697L2.6794 12.2657L3.71816 7.88278L0.318133 4.95146L4.78073 4.59138L6.5 0.43103Z"
                                            fill="#636060"/>
                                    </svg>
                                    <span style="margin-left: 5px;">5,0</span>
                                </div>
                            </div>
                            <div class="listing-category">Beach</div>
                            <div class="listing-date">11-16 sept.</div>
                            <div class="listing-price-block"><span class="listing-price">100$</span> for night</div>
                        </div>
                    </div>

                    <div class="listing-block">
                        <img class="listing-img"
                             src="https://a0.muscache.com/im/pictures/miso/Hosting-554211241906940281/original/6b0519fe-aa71-4f65-90e1-2ee245e18770.jpeg?im_w=720"/>
                        <div class="m-2 mt-3">
                            <div class="row">
                                <div class="col listing-localization">Bernati, Latvia</div>
                                <div class="col text-end">
                                    <svg style="margin-top: -3px;" xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                         viewBox="0 0 13 13" fill="none">
                                        <path
                                            d="M6.5 0.43103L8.21927 4.59138L12.6819 4.95146L9.28184 7.88278L10.3206 12.2657L6.5 9.91697L2.6794 12.2657L3.71816 7.88278L0.318133 4.95146L4.78073 4.59138L6.5 0.43103Z"
                                            fill="#636060"/>
                                    </svg>
                                    <span style="margin-left: 5px;">5,0</span>
                                </div>
                            </div>
                            <div class="listing-category">Beach</div>
                            <div class="listing-date">11-16 sept.</div>
                            <div class="listing-price-block"><span class="listing-price">100$</span> for night</div>
                        </div>
                    </div>

                    <div class="listing-block">
                        <img class="listing-img"
                             src="https://a0.muscache.com/im/pictures/miso/Hosting-554211241906940281/original/6b0519fe-aa71-4f65-90e1-2ee245e18770.jpeg?im_w=720"/>
                        <div class="m-2 mt-3">
                            <div class="row">
                                <div class="col listing-localization">Bernati, Latvia</div>
                                <div class="col text-end">
                                    <svg style="margin-top: -3px;" xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                         viewBox="0 0 13 13" fill="none">
                                        <path
                                            d="M6.5 0.43103L8.21927 4.59138L12.6819 4.95146L9.28184 7.88278L10.3206 12.2657L6.5 9.91697L2.6794 12.2657L3.71816 7.88278L0.318133 4.95146L4.78073 4.59138L6.5 0.43103Z"
                                            fill="#636060"/>
                                    </svg>
                                    <span style="margin-left: 5px;">5,0</span>
                                </div>
                            </div>
                            <div class="listing-category">Beach</div>
                            <div class="listing-date">11-16 sept.</div>
                            <div class="listing-price-block"><span class="listing-price">100$</span> for night</div>
                        </div>
                    </div>

                    <div class="listing-block">
                        <img class="listing-img"
                             src="https://a0.muscache.com/im/pictures/miso/Hosting-554211241906940281/original/6b0519fe-aa71-4f65-90e1-2ee245e18770.jpeg?im_w=720"/>
                        <div class="m-2 mt-3">
                            <div class="row">
                                <div class="col listing-localization">Bernati, Latvia</div>
                                <div class="col text-end">
                                    <svg style="margin-top: -3px;" xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                         viewBox="0 0 13 13" fill="none">
                                        <path
                                            d="M6.5 0.43103L8.21927 4.59138L12.6819 4.95146L9.28184 7.88278L10.3206 12.2657L6.5 9.91697L2.6794 12.2657L3.71816 7.88278L0.318133 4.95146L4.78073 4.59138L6.5 0.43103Z"
                                            fill="#636060"/>
                                    </svg>
                                    <span style="margin-left: 5px;">5,0</span>
                                </div>
                            </div>
                            <div class="listing-category">Beach</div>
                            <div class="listing-date">11-16 sept.</div>
                            <div class="listing-price-block"><span class="listing-price">100$</span> for night</div>
                        </div>
                    </div>

                    <div class="listing-block">
                        <img class="listing-img"
                             src="https://a0.muscache.com/im/pictures/miso/Hosting-554211241906940281/original/6b0519fe-aa71-4f65-90e1-2ee245e18770.jpeg?im_w=720"/>
                        <div class="m-2 mt-3">
                            <div class="row">
                                <div class="col listing-localization">Bernati, Latvia</div>
                                <div class="col text-end">
                                    <svg style="margin-top: -3px;" xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                         viewBox="0 0 13 13" fill="none">
                                        <path
                                            d="M6.5 0.43103L8.21927 4.59138L12.6819 4.95146L9.28184 7.88278L10.3206 12.2657L6.5 9.91697L2.6794 12.2657L3.71816 7.88278L0.318133 4.95146L4.78073 4.59138L6.5 0.43103Z"
                                            fill="#636060"/>
                                    </svg>
                                    <span style="margin-left: 5px;">5,0</span>
                                </div>
                            </div>
                            <div class="listing-category">Beach</div>
                            <div class="listing-date">11-16 sept.</div>
                            <div class="listing-price-block"><span class="listing-price">100$</span> for night</div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </main>
@endsection

@section('dialogs_windows')
    @include('layouts.dialog-window-language')
@endsection
