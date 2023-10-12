@extends('layouts.master')
@section('title', $location['country']->name.", ".$location['city']->name)
@section('header')
    <header class="main-header">
        @include('layouts.header-2')
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
                        <div style="font-size: 28px; font-weight: 500; line-height: 33px; margin-bottom: 10px;">{{ $location['country']->name }}: @lang("start.accommodation_for_recreation")</div>
                        <div style="font-size: 15px; font-weight: 300; margin-bottom: 12px;">@lang('start.find_and_book_unique_rooms')</div>
                        <div class="start-table-block mb-3">
                            <div class="start-table-label">
                                <div>@lang('start.location')</div>
{{--                                <x-clear-input required value="Україна" class="start-table-input"/>--}}
                                <input type="text" class="clear-input"
                                       style=" font-size: 15px;"
                                       placeholder="{{ Lang::get('main.entry_region') }}"
                                       onkeyup="showLocation(this.value, '@lang('start.not_found')');"
                                       id="input-location-search" autocomplete="off"/>
                                    <div class="cities-countries-values" id="cities_countries_list">
                                        {{--                                    <div class="value d-flex flex-row align-items-center">--}}
                                        {{--                                        <div class="icon-location">--}}
                                        {{--                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">--}}
                                        {{--                                                <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>--}}
                                        {{--                                            </svg>--}}
                                        {{--                                        </div>--}}
                                        {{--                                        <div class="ms-3">Kryvyi Rih, Ukraine</div>--}}
                                        {{--                                    </div>                              --}}
                                    </div>
                            </div>
                            <div style="width: 100%; background-color: var(--hr); height: 1px;"></div>
                            <div class="row">
                                <div class="col" style="width: 49%">
                                    <div class="start-table-label">
                                        <div>@lang('start.arrival')</div>
                                        <input id="dateArrivalInput" type="date" required onchange="chooseDate('arrival',this)"/>
{{--                                        <x-clear-input required value="{{ Lang::get('start.add_date') }}" class="start-table-input"/>--}}
                                    </div>
                                </div>
                                <div style="width: 1px">
                                    <div style="height: 86%;margin-top:4px; background-color: var(--hr); width: 1px;"></div>
                                </div>
                                <div class="col" style="width: 49%">
                                    <div class="start-table-label">
                                        <div>@lang('start.departure')</div>
{{--                                        <x-clear-input required value="{{ Lang::get('start.add_date') }}" class="start-table-input"/>--}}
                                        <input id="dateDepartureInput" type="date" required onchange="chooseDate('departure',this)"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <x-primary-button style="width: 100%; padding: 10px 0;" onclick="buttonRedirect();">
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
                <div style="font-weight: 500; font-size: 25px;">@lang('start.the_best_place') {{ $location['city']->name }}</div>
                <div style="font-weight: 300; font-size: 15px; margin-top: 5px;">@lang('start.guests_agree')</div>
                <div class="d-flex flex-row gap-5 start-listings" style="margin-top: 1.5%;">
                    <div class="start-listing">
                        <div class="start-listing-img"><img src="{{ asset('images/start-large-photos/photo1.jpg') }}"/></div>
                        <div class="d-flex flex-row mt-4 start-listing-header">
                            <div class="start-listing-header-title">Country house in {{ $location['city']->name }}</div>
                            <div class="d-flex flex-row justify-content-end flex-nowrap" style="width: 100%;">
                                <div class="d-flex flex-row justify-content-end flex-nowrap gap-1" style="width: 100%;">
                                    <svg style="margin-top: 3px;" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 21 19" fill="none"><path d="M10.5 0L13.9315 5.77696L20.4861 7.25532L16.0523 12.304L16.6717 18.9947L10.5 16.338L4.32825 18.9947L4.94773 12.304L0.513906 7.25532L7.06851 5.77696L10.5 0Z" fill="#7D7D80"/></svg>
                                    <div>5(10)</div>
                                </div>
                            </div>
                        </div>
                        <div class="start-listing-description mt-2">
                            Our modern home is located directly
                            in the middle of the Carpathian Mountains.⠀there is everything you need here
                            to spend time in complete solitude and silence.
                            Light the fireplace, wrap yourself in a blanket and under the crunch
                            firewood, drinking hot tea, watching as the
                            a snowball creeps through the mountains. What are they like here
                            incredible dawns, words are impossible
                            pass it on!⠀In our house completely
                            safe, and only 3 km away from us
                            it is located in Slavske (Lviv region).
                            These parts have everything you need for
                            have a good rest.
                        </div>
                        <div class="start-listing-price mt-2"><b>$121</b> @lang("start.for_night")</div>
                    </div>
                    <div class="start-listing">
                        <div class="start-listing-img"><img src="{{ asset('images/start-large-photos/photo3.jpg') }}"/></div>
                        <div class="d-flex flex-row mt-4 start-listing-header">
                            <div class="start-listing-header-title">House in {{ $location['city']->name }}</div>
                            <div class="d-flex flex-row justify-content-end flex-nowrap" style="width: 100%;">
                                <div class="d-flex flex-row justify-content-end flex-nowrap gap-1" style="width: 100%;">
                                    <svg style="margin-top: 3px;" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 21 19" fill="none"><path d="M10.5 0L13.9315 5.77696L20.4861 7.25532L16.0523 12.304L16.6717 18.9947L10.5 16.338L4.32825 18.9947L4.94773 12.304L0.513906 7.25532L7.06851 5.77696L10.5 0Z" fill="#7D7D80"/></svg>
                                    <div>4.9(69)</div>
                                </div>
                            </div>
                        </div>
                        <div class="start-listing-description mt-2">
                            Cozy interior, large panoramic showcase,
                            a fireplace and many other pleasant little things will add
                            comfort of your holiday.House
                            designed for 2 people.The House has: - a bedroom
                            with a double bed, seating area
                            with armchair, fireplace and panoramic display case,-
                            entrance hall with spacious wardrobes and mini-
                            kitchen with refrigerator and sink,-
                            dressing room with shower and toilet.Also near
                            the House has a spacious outdoor terrace for
                            relax with a view of picturesque ponds.
                        </div>
                        <div class="start-listing-price mt-2"><b>$101</b> @lang("start.for_night")</div>
                    </div>
                    <div class="start-listing">
                        <div class="start-listing-img"><img src="{{ asset('images/start-large-photos/photo4.jpg') }}"/></div>
                        <div class="d-flex flex-row mt-4 start-listing-header">
                            <div class="start-listing-header-title">Country house in {{ $location['city']->name }}</div>
                            <div class="d-flex flex-row justify-content-end flex-nowrap gap-1" style="width: 100%;">
                                <svg style="margin-top: 3px;" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 21 19" fill="none"><path d="M10.5 0L13.9315 5.77696L20.4861 7.25532L16.0523 12.304L16.6717 18.9947L10.5 16.338L4.32825 18.9947L4.94773 12.304L0.513906 7.25532L7.06851 5.77696L10.5 0Z" fill="#7D7D80"/></svg>
                                <div>4.93(89)</div>
                            </div>
                        </div>
                        <div class="start-listing-description mt-2">
                            The house is located on a wild beach.
                            3 meters from your bed cherishes or abounds
                            the sea. You can watch it without getting up
                            out of bed. Just like moon walks,
                            unforgettable sea sunrises and sunsets
                            the sun.Discover a new swimming experience
                            in the icy winter sea!Thanks to the availability of
                            baths, it is very simple and convenient for everyone!
                            Two-storey house, built
                            directly on the coastal protection in 2
                            meters from the water. 3 rooms, 2 bathrooms,
                            sauna. Kitchen with natural stone. Own zone
                            Beach / Terrace on the water with stairs to the sea.
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
                <div class="d-flex flex-fow mt-3" style="display: flex; gap: 2.5rem">
                    @foreach($amenities as $amenity)
                        @if($amenity->iconPath !== null)
                            <div class="start-amenities-block">
                                <div class="mb-1">
                                    <img src="{{ asset($amenity->iconPath) }}" />
                                </div>
                                <div class="start-amenities-text">@lang('amenities.'.$amenity->nameAmenity)</div>
                            </div>
                        @endif
                    @endforeach

                </div>
            </div>


            <div class="d-flex flex-column" style="margin:1.5% 0 3% 0">
                <div style="font-weight: 500; font-size: 25px;">{{ $location['country']->name }}: @lang('start.other_great_vacation_accommodations')</div>

                <div class="d-flex flex-wrap align-items-center justify-content-left listings mt-3">
                    <div class="listing-block">
                        <img class="listing-img"
                             src="{{ asset('images/listing-photos/listing1_1.png') }}"
                             onclick="window.location.href = 'http://127.0.0.1:8000/rooms?arrivalDate=1695247200000&departureDate=1695938400000&guests=1'"/>
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
                                <div class="col listing-localization">Warsaw, Poland</div>
                                <div class="col text-end">
                                    <svg style="margin-top: -3px;" xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                         viewBox="0 0 13 13" fill="none">
                                        <path
                                            d="M6.5 0.43103L8.21927 4.59138L12.6819 4.95146L9.28184 7.88278L10.3206 12.2657L6.5 9.91697L2.6794 12.2657L3.71816 7.88278L0.318133 4.95146L4.78073 4.59138L6.5 0.43103Z"
                                            fill="#636060"/>
                                    </svg>
                                    <span style="margin-left: 5px;">4,8</span>
                                </div>
                            </div>
                            <div class="listing-category">Lake</div>
                            <div class="listing-date">11-16 sept.</div>
                            <div class="listing-price-block"><span class="listing-price">50$</span> for night</div>
                        </div>
                    </div>

                    <div class="listing-block">
                        <img class="listing-img"
                             src="https://a0.muscache.com/im/pictures/8ce68d61-709d-4897-9b80-c691e7db2bd8.jpg?im_w=720"/>
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
                                <div class="col listing-localization">Warsaw, Poland</div>
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
                            <div class="listing-category">Iceland</div>
                            <div class="listing-date">11-16 sept.</div>
                            <div class="listing-price-block"><span class="listing-price">80$</span> for night</div>
                        </div>
                    </div>

                    <div class="listing-block">
                        <img class="listing-img"
                             src="https://a0.muscache.com/im/pictures/miso/Hosting-782583043344736922/original/5a43c686-6c35-44c7-8504-177aa003191e.jpeg?im_w=720"/>
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
                                <div class="col listing-localization">Warsaw, Poland</div>
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
                            <div class="listing-price-block"><span class="listing-price">130$</span> for night</div>
                        </div>
                    </div>

                    <div class="listing-block">
                        <img class="listing-img"
                             src="https://a0.muscache.com/im/pictures/dfa46b83-bb39-4ce8-87e8-1b6370c62540.jpg?im_w=720"/>
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
                                <div class="col listing-localization">Warsaw, Poland</div>
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
                            <div class="listing-category">Forest</div>
                            <div class="listing-date">11-16 sept.</div>
                            <div class="listing-price-block"><span class="listing-price">67$</span> for night</div>
                        </div>
                    </div>

                    <div class="listing-block">
                        <img class="listing-img"
                             src="https://a0.muscache.com/im/pictures/miso/Hosting-554211241906940281/original/6b0519fe-aa71-4f65-90e1-2ee245e18770.jpeg?im_w=720"/>
                        <div class="m-2 mt-3">
                            <div class="row">
                                <div class="col listing-localization">Warsaw, Poland</div>
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
                            <div class="listing-price-block"><span class="listing-price">90$</span> for night</div>
                        </div>
                    </div>

                    <div class="listing-block">
                        <img class="listing-img"
                             src="https://a0.muscache.com/im/pictures/miso/Hosting-554211241906940281/original/6b0519fe-aa71-4f65-90e1-2ee245e18770.jpeg?im_w=720"/>
                        <div class="m-2 mt-3">
                            <div class="row">
                                <div class="col listing-localization">Warsaw, Poland</div>
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
                            <div class="listing-price-block"><span class="listing-price">150$</span> for night</div>
                        </div>
                    </div>

                    <div class="listing-block">
                        <img class="listing-img"
                             src="https://a0.muscache.com/im/pictures/miso/Hosting-554211241906940281/original/6b0519fe-aa71-4f65-90e1-2ee245e18770.jpeg?im_w=720"/>
                        <div class="m-2 mt-3">
                            <div class="row">
                                <div class="col listing-localization">Warsaw, Poland</div>
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
                            <div class="listing-price-block"><span class="listing-price">640$</span> for night</div>
                        </div>
                    </div>

                    <div class="listing-block">
                        <img class="listing-img"
                             src="https://a0.muscache.com/im/pictures/miso/Hosting-554211241906940281/original/6b0519fe-aa71-4f65-90e1-2ee245e18770.jpeg?im_w=720"/>
                        <div class="m-2 mt-3">
                            <div class="row">
                                <div class="col listing-localization">Warsaw, Poland</div>
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
                            <div class="listing-category">Lake</div>
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

@section('scripts')
    <script type="text/javascript" src="{{ URL::asset('js/createPhotoForStart.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/searchStartPage.js') }}"></script>
    <script type="text/javascript">
        chooseLocation({{ $location['city']->id }},'{{ $location['city']->name }}','{{ $location['country']->name }}','city',1,'{{ route('main') }}');
    </script>
@stop
