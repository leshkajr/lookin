@extends('layouts.master')
@section('title', 'Search for new experiences')
@section('header')
    <header class="main-header">
        @include('layouts.header-2')
    </header>
@stop
@section('content')
    <main style="padding: 0 7% 3% 7%;">
        <div class="listing-header d-flex flex-column">
            <div class="listing-header-title">{{ $listing['title'] }}</div>
            <div class="listing-header-under_title d-flex flex-row justify-content-left align-items-center"
            style="width: 100%;">
                <div class="d-flex flex-row justify-content-left align-items-center"
                     style="width: 70%">
                    @if($listing["diffDay"] <= 3 )
                        <div class="d-flex flex-row justify-content-center align-items-center"
                        style="margin-right: 5px;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="16" viewBox="0 0 25 23" fill="none"
                            style="margin-right: 5px; margin-top: -3px;">
                                <path d="M12.5 0L16.5851 6.87733L24.3882 8.63729L19.1098 14.6477L19.8473 22.6127L12.5 19.45L5.15268 22.6127L5.89016 14.6477L0.611794 8.63729L8.41489 6.87733L12.5 0Z" fill="#7D7D80"/>
                            </svg>
                            @lang('listing.new')
                        </div>
                        <div style="margin-right: 5px;">.</div>
                    @endif
                        @if($listing["countReviews"] > 0 )
                            <div class="d-flex flex-row justify-content-center align-items-center underline"
                                 style="margin-right: 5px;">
                                <div style="margin-right: 3px;">{{ $listing["countReviews"] }}</div>
                            @if($listing["countReviews"] === 1)
                                    @lang('listing.review')
                                @elseif($listing["countReviews"] > 1 && $listing["countReviews"] < 5)
                                    @lang('listing.reviews2-4')
                                @else
                                    @lang('listing.reviews')
                                @endif
                            </div>
                            <div style="margin-right: 5px;">.</div>
                        @endif
                    <div class="d-flex flex-row justify-content-center align-items-center"
                    style="font-weight: 600;">
                        <a class="link-route underline"
                            href="{{ route('main.search',['cityId'=>$listing["city"]["id"]]) }}">
                            {{ $listing["country"]["name"] }}, {{ $listing["city"]["name"] }}
                        </a>
                    </div>
                </div>


                <div class="d-flex flex-row justify-content-end align-items-center"
                     style="width: 30%; font-weight: 600;">
                    <div class="d-flex flex-row justify-content-left align-items-center link-route"
                    style="margin-right: 20px; cursor: pointer;"
                    onclick="copyToClipboard('{{ __('listing.copied_the_link') }}', '{{ __('listing.share_with_friends') }}');">
                        <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 24 24" fill="none"
                        style="margin-right: 5px;">
                            <path d="M21 15V19C21 19.5304 20.7893 20.0391 20.4142 20.4142C20.0391 20.7893 19.5304 21 19 21H5C4.46957 21 3.96086 20.7893 3.58579 20.4142C3.21071 20.0391 3 19.5304 3 19V15" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M7 10L12 15L17 10" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M12 15V3" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <div class="underline">@lang('listing.share')</div>
                    </div>

                    <div class="d-flex flex-row justify-content-left align-items-center link-route"
                    style="cursor: pointer">
                        @if($listing['isLike'] === true)
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                                 style="margin-right: 5px;">
                                <path d="M20.84 4.61012C20.3292 4.09912 19.7228 3.69376 19.0554 3.4172C18.3879 3.14064 17.6725 2.99829 16.95 2.99829C16.2275 2.99829 15.5121 3.14064 14.8446 3.4172C14.1772 3.69376 13.5708 4.09912 13.06 4.61012L12 5.67012L10.94 4.61012C9.9083 3.57842 8.50903 2.99883 7.05 2.99883C5.59096 2.99883 4.19169 3.57842 3.16 4.61012C2.1283 5.64181 1.54871 7.04108 1.54871 8.50012C1.54871 9.95915 2.1283 11.3584 3.16 12.3901L4.22 13.4501L12 21.2301L19.78 13.4501L20.84 12.3901C21.351 11.8794 21.7563 11.2729 22.0329 10.6055C22.3095 9.93801 22.4518 9.2226 22.4518 8.50012C22.4518 7.77763 22.3095 7.06222 22.0329 6.39476C21.7563 5.7273 21.351 5.12087 20.84 4.61012Z" fill="#8B8B8B"/>
                            </svg>
                        @else
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 33 28" fill="none"
                                 style="margin-right: 5px;">
                                <path d="M16.641 27.7833C15.4432 26.6033 14.2689 25.453 13.1025 24.2962C9.77867 20.9963 6.4449 17.707 3.14466 14.3844C2.0032 13.2376 1.1414 11.886 0.808948 10.2886C0.351651 8.09243 0.920953 6.08125 2.17941 4.26639C4.62356 0.740473 9.21579 -0.408468 13.2366 1.46501C14.5093 2.05748 15.6158 2.87735 16.631 3.89565C16.7487 3.78407 16.8579 3.6838 16.9656 3.57999C18.5672 2.06172 20.4271 1.05401 22.6343 0.684686C27.3999 -0.121056 32.0371 3.35613 32.5636 8.10514C32.8183 10.408 31.9765 12.3076 30.509 13.984C29.7242 14.8809 28.841 15.6923 27.9942 16.534C24.294 20.2075 20.5918 23.8815 16.8878 27.5559C16.8136 27.6266 16.7344 27.6972 16.641 27.7833ZM16.6788 24.6105C16.7965 24.4693 16.8793 24.3513 16.9798 24.2518C20.6178 20.6484 24.2562 17.0453 27.895 13.4424C28.6659 12.6709 29.3118 11.7863 29.8098 10.8197C30.1123 10.2427 30.337 9.63824 30.3328 8.97091C30.3049 4.92384 26.302 1.94873 22.3818 3.08779C20.4056 3.6612 18.7876 4.82003 17.3651 6.26556C17.119 6.51484 16.8935 6.7846 16.6353 7.0706C16.4426 6.85875 16.2786 6.67514 16.1131 6.49366C14.9001 5.14382 13.3996 4.07728 11.7199 3.37096C8.42248 1.98899 4.74983 3.467 3.40648 6.71681C3.03765 7.6087 2.82077 8.54085 2.98985 9.50689C3.24596 10.9673 4.06567 12.1331 5.09441 13.1557C8.84268 16.8833 12.6 20.6025 16.3663 24.3132C16.4455 24.3986 16.5332 24.4749 16.6788 24.6105Z" fill="white" fill-opacity="0.8"/>
                                <path opacity="0.5" d="M16.6765 25.3093C16.5357 25.1706 16.4463 25.0925 16.3646 25.0094C12.6569 21.2043 8.95026 17.3992 5.24483 13.594C4.22965 12.5479 3.42074 11.3543 3.168 9.8609C3.00115 8.87253 3.21517 7.91884 3.57914 7.00633C4.90479 3.68286 8.52903 2.16923 11.783 3.58315C13.4406 4.30579 14.9213 5.39698 16.1182 6.77802C16.2816 6.9637 16.4435 7.15083 16.6336 7.3683C16.8884 7.07569 17.1109 6.7997 17.3538 6.54466C18.7576 5.06716 20.3543 3.88154 22.3044 3.29343C26.1764 2.12805 30.1231 5.17192 30.1506 9.31253C30.1548 9.99529 29.933 10.613 29.6345 11.204C29.1434 12.1918 28.5068 13.0959 27.7471 13.8845C24.1562 17.5716 20.5657 21.258 16.9757 24.9437C16.8743 25.0441 16.7927 25.1648 16.6765 25.3093Z" fill="black" fill-opacity="0.7"/>
                            </svg>
                        @endif
                        <div class="link-route underline">@lang('listing.save')</div>
                    </div>
                </div>
            </div>

            <div class="listing-photos row" style="width: 100%; height: 500px; margin-top: 50px;">
                <div class="col">
                    <div class="listing-photo">
                        <img class="listing-photo-img" src="{{ asset($listing['photos'][0]['path']) }}"/>
                    </div>
                </div>
                <div class="col" style="padding-left: 20px;">
                    <div class="row">
                        <div class="col">
                            <div class="listing-photo listing-photo-img-sm">
                                <img class="listing-photo-img" src="{{ asset($listing['photos'][1]['path']) }}"/>
                            </div>
                        </div>
                        <div class="col" style="margin-left: 15px;">
                            <div class="listing-photo listing-photo-img-sm">
                                <img class="listing-photo-img" src="{{ asset($listing['photos'][2]['path']) }}"/>
                            </div>
                        </div>
                    </div>

                    <div class="row" style="margin-top: 15px;">
                        <div class="col">
                            <div class="listing-photo listing-photo-img-sm">
                                <img class="listing-photo-img" src="{{ asset($listing['photos'][3]['path']) }}"/>
                            </div>
                        </div>
                        <div class="col" style="margin-left: 15px;">
                            <div class="listing-photo listing-photo-img-sm">
                                <img class="listing-photo-img" src="{{ asset($listing['photos'][4]['path']) }}"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="d-flex flex-row align-items-start">
                <div class="d-flex flex-column" style="width: 60%; padding: 30px 20px 20px 0;">
                    <div class="d-flex flex-row align-items-end justify-content-start" style="width: 100%">
                        <div class="d-flex flex-row align-items-center"
                             style="font-size: 21px; font-weight: 600; width: 85%">
                            <div>@lang('listing_type.'.$listing['type']->nameType)</div>
                            <div style="white-space: pre;">@lang('listing.host'){{ ucfirst($listing['user']->name) }}</div>
                        </div>
                        <div class="d-flex flex-row align-items-center justify-content-end" style="width: 15%;">
                            <div class="listing-host-img">
                                <img src="https://a0.muscache.com/im/pictures/user/349e298e-7c0c-402b-b38f-9569673f4f03.jpg?im_w=240"/>
                            </div>
                        </div>
                    </div>

                    <div style="width: 100%; height: 1px; margin-top: 20px; margin-bottom: 20px;
                     background-color: var(--text-color-light-light);"></div>

                    <div class="row w-100">
                        <div class="col-1">
                            <div class="d-flex justify-content-center align-items-center">
                                <img class="mb-2" style="width: 40px;"
                                     src="{{ asset('images/types-listings-svg/'.$listing['type']->nameType.'.svg') }}"/>
                            </div>
                        </div>
                        <div class="col">
                            <div style="font-weight: 600;">@lang('listing_type.'.$listing['type']->nameType)</div>
                            <div style="font-weight: 400;">@lang('listing_type.'.$listing['type']->descriptionType)</div>
                        </div>
                    </div>

                    <div style="width: 100%; height: 2px; margin-top: 20px; margin-bottom: 20px;
                     background-color: var(--text-color-light-light);"></div>

                    <div>
                        <div style="font-weight: 400;">{{ $listing['description'] }}</div>
                    </div>

                    <div style="width: 100%; height: 2px; margin-top: 20px; margin-bottom: 10px;
                     background-color: var(--text-color-light-light);"></div>


                    <div class="d-flex flex-column filters-checkboxes-blocks" style="height: auto">
                        @foreach($categoriesAmenities as $categoryAmenity)
                            @php($isCategory = false)
                            @foreach($listing['amenities'] as $amenity)
                                @if($categoryAmenity->id === $amenity->categoryAmenityId)
                                    @php($isCategory = true)
                                    @break
                                @endif
                            @endforeach
                            @if($isCategory === true)
                            <div style="margin: 5px 5px 5px 0;">
                                <div class="filters-checkboxes-header-text">@lang('amenities_categories.'.$categoryAmenity->nameCategoryAmenity)</div>
                                <div class="d-flex flex-row flex-wrap filters-checkbox-blocks w-100">
                                    @foreach($listing['amenities'] as $amenity)
                                        @if($amenity->categoryAmenityId === $categoryAmenity->id)
                                            <div class="d-flex flex-row justify-content-left align-items-center">
                                                <label style="padding-left: 0;"
                                                    class="container-checkbox">@lang('amenities.'.$amenity->nameAmenity)
                                                </label>
                                            </div>
                                        @endif

                                    @endforeach
                                </div>
                            </div>
                            @endif
                        @endforeach
                    </div>

                    <div style="width: 100%; height: 2px; margin-top: 20px; margin-bottom: 10px;
                     background-color: var(--text-color-light-light);"></div>

                    <div class="d-flex flex-row justify-content-start align-items-center"
                         style="font-weight: 500;">
                        <div>
                            {{ $listing["country"]["name"] }}, {{ $listing["city"]["name"] }}
                        </div>
                        <div class="night" id="night" style="margin-left: 4px;">
                            : 7 night
                        </div>
                    </div>

                    <div class="calendar-container">
                        <div class="d-flex flex-row justify-content-center align-items-center">
                            <button id="prevMonth">
                                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="currentColor" class="bi bi-chevron-left" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
                                </svg>
                            </button>
                            <div id="currentMonth" style="margin: 0 10px;">
                            </div>
                            <button id="nextMonth">
                                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                                </svg>
                            </button>
                        </div>
                        <div class="calendar" id="calendar"></div>
                    </div>

                    <div style="width: 100%; height: 2px; margin-top: 20px; margin-bottom: 10px;
                     background-color: var(--text-color-light-light);"></div>

                </div>
                <div class="d-flex flex-column justify-content-center align-items-right"
                     style="width: 40%; padding-left: 80px; padding-top: 35px;">
                    <div class="listing-reservation-container">
                        <div class="listing-reservation-price">$175 @lang('listing.night')</div>

                        <div class="start-table-block mb-3">
                            <div class="row">
                                <div class="col" style="width: 49%">
                                    <div class="start-table-label"
                                    style="padding: 20px 25px;">
                                        <div>@lang('start.arrival')</div>
                                        <input id="dateArrivalInput" type="date" required />
{{--                                        <x-clear-input required value="{{ Lang::get('start.add_date') }}" class="start-table-input"/>--}}
                                    </div>
                                </div>
                                <div style="width: 1px">
                                    <div style="height: 86%;margin-top:4px; background-color: var(--hr); width: 1px;"></div>
                                </div>
                                <div class="col" style="width: 49%">
                                    <div class="start-table-label"
                                         style="padding: 20px 25px;">
                                        <div>@lang('start.departure')</div>
                                        <input id="dateDepartureInput" type="date" required />
                                    </div>
                                </div>
                            </div>
                            <div style="width: 100%; background-color: var(--hr); height: 1px;"></div>
                            <div class="start-table-label"
                                 style="padding: 20px 25px;">
                                <div>@lang('listing.guests')</div>
                                <div class="d-flex flex-row gap-1" style="width: 50%">
                                    <x-clear-input required value="{{ $listing['guests'] }}" class="start-table-input"
                                                   type="number" id="inp_counter_guests" style="width: 6%;"
                                                   readonly/>
                                    <div style="font-weight: 300; margin-top: -1px;">
                                        @if((int)$listing['guests'] === 1)
                                            @lang('listing.guest')
                                        @elseif((int)$listing['guests'] >= 2 && (int)$listing['guests'] <= 4)
                                            @lang('listing.guest2-4')
                                        @else
                                            @lang('listing.guest5')
                                        @endif
                                    </div>
                                </div>

                                <div class="counter-container d-flex flex-row gap-2">
                                    <button onclick="number_counter('inp_counter_guests','plus')"
                                            @if($listing['guests'] >= 9) disabled @endif>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                            <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                                        </svg>
                                    </button>
                                    <button onclick="number_counter('inp_counter_guests','minus')"
                                    @if($listing['guests'] <= 1) disabled @endif>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" class="bi bi-dash-circle" viewBox="0 0 16 16">
                                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                            <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z"/>
                                        </svg>
                                    </button>
                                </div>
                            </div>

                        </div>
                        <div>
                            <x-primary-button style="width: 100%; padding: 20px 0; margin-top: 10px;">
                                <div class="d-flex justify-content-center align-items-center gap-2"
                                style="font-size: 19px;">
                                    @lang('listing.book_now')
                                </div>
                            </x-primary-button>
                        </div>

                        <div class="text-center mt-4 mb-3" style="color: var(--text-color);">
                            @lang('listing.dont_pay_yet')
                        </div>
                        <div class="additional_information d-flex flex-column align-items-center mb-1">
                            <div class="d-flex flex-row w-100">
                                <div class="d-flex flex-row align-items-start" style="width: 70%">
                                    ${{ $listing['priceForNight'] }} x {{ $listing['daysReservation'] }} @lang('listing.nights')
                                </div>
                                <div class="d-flex flex-row justify-content-end" style="width: 30%">
                                    ${{ $listing['priceAllNights'] }}
                                </div>
                            </div>

                            <div class="d-flex flex-row w-100">
                                <div class="d-flex flex-row align-items-start underline" style="width: 70%"
                                onclick="openSwal('{{ Lang::get('listing.cleaning_fee') }}','{{ Lang::get('listing.d_price_cleaning') }}');">
                                    @lang('listing.cleaning_fee')
                                </div>
                                <div class="d-flex flex-row justify-content-end" style="width: 30%">
                                    ${{ $listing['priceCleaning'] }}
                                </div>
                            </div>

                            <div class="d-flex flex-row w-100">
                                <div class="d-flex flex-row align-items-start underline" style="width: 70%"
                                     onclick="openSwal('{{ Lang::get('listing.look_in_service_fee') }}','{{ Lang::get('listing.d_price_service') }}');">
                                    @lang('listing.look_in_service_fee')
                                </div>
                                <div class="d-flex flex-row justify-content-end" style="width: 30%">
                                    ${{ $listing['priceServiceLookin'] }}
                                </div>
                            </div>

                            <div class="d-flex flex-row w-100 mt-2" style="font-weight: 600;">
                                <div class="d-flex flex-row align-items-start" style="width: 70%;"
                                     onclick="openSwal('{{ Lang::get('listing.look_in_service_fee') }}','{{ Lang::get('listing.d_price_service') }}');">
                                    @lang('listing.total_price')
                                </div>
                                <div class="d-flex flex-row justify-content-end" style="width: 30%">
                                    ${{ $listing['totalPrice'] }}
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-3 d-flex flex-row gap-2 justify-content-center align-items-center"
                    style="font-weight: 600; font-size: 15px;">
                        <svg width="15" height="15" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <rect id="finish 1" width="17" height="17" fill="url(#pattern0)"/>
                            <defs>
                                <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                                    <use xlink:href="#image0_173_24" transform="scale(0.00195312)"/>
                                </pattern>
                                <image id="image0_173_24" data-name="finish.png" width="512" height="512" xlink:href="data:image/png;base64,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"/>
                            </defs>
                        </svg>
                        <div class="underline">
                            @lang('listing.complain')
                        </div>
                    </div>
                </div>
            </div>


            <div class="d-flex flex-row align-items-center gap-3">
                <svg style="margin-top: -2px;"
                     xmlns="http://www.w3.org/2000/svg" width="25" height="22" viewBox="0 0 29 27" fill="none">
                    <path d="M14.5 0L19.2387 7.97771L28.2903 10.0193L22.1674 16.9913L23.0229 26.2307L14.5 22.562L5.97711 26.2307L6.83258 16.9913L0.709681 10.0193L9.76128 7.97771L14.5 0Z" fill="#7D7D80"/>
                </svg>
                <div class="d-flex flex-row align-items-center gap-1"
                     style="font-weight: 600;">
                    <div>4,89</div>
                    <div>.</div>
                    <div>18 @lang('listing.reviews')</div>
                </div>
            </div>

            <div class="d-flex flex-row flex-wrap align-items-center">
                <div class="d-flex flex-column align-items-start"
                     style="width: 50%; padding: 5px 10px; margin-top: 10px;">
                    <div class="d-flex flex-row" style="width: 100%;">
                        <div style="width: 85px;">
                            <div class="listing-review-img-container">
                                <img class="listing-review-img" src="https://a0.muscache.com/im/pictures/user/c5f89e86-3ce6-4fec-abd1-dd69f44a90fb.jpg?im_w=240" />
                            </div>
                        </div>
                        <div>
                            <div class="listing-review-name">Marek</div>
                            <div class="listing-review-date">march 18</div>
                        </div>
                    </div>
                    <div class="listing-review-text">Чудовий відпочинок у тихому місці посеред природи. Котедж добре обладнаний, чистий, а також є можливість</div>
                </div>

                <div class="d-flex flex-column align-items-start"
                     style="width: 50%; padding: 5px 10px; margin-top: 10px;">
                    <div class="d-flex flex-row" style="width: 100%;">
                        <div style="width: 85px;">
                            <div class="listing-review-img-container">
                                <img class="listing-review-img" src="https://a0.muscache.com/im/pictures/user/c5f89e86-3ce6-4fec-abd1-dd69f44a90fb.jpg?im_w=240" />
                            </div>
                        </div>
                        <div>
                            <div class="listing-review-name">Marek</div>
                            <div class="listing-review-date">march 18</div>
                        </div>
                    </div>
                    <div class="listing-review-text">Чудовий відпочинок у тихому місці посеред природи. Котедж добре обладнаний, чистий, а також є можливість</div>
                </div>

                <div class="d-flex flex-column align-items-start"
                     style="width: 50%; padding: 5px 10px; margin-top: 10px;">
                    <div class="d-flex flex-row" style="width: 100%;">
                        <div style="width: 85px;">
                            <div class="listing-review-img-container">
                                <img class="listing-review-img" src="https://a0.muscache.com/im/pictures/user/c5f89e86-3ce6-4fec-abd1-dd69f44a90fb.jpg?im_w=240" />
                            </div>
                        </div>
                        <div>
                            <div class="listing-review-name">Marek</div>
                            <div class="listing-review-date">march 18</div>
                        </div>
                    </div>
                    <div class="listing-review-text">Чудовий відпочинок у тихому місці посеред природи. Котедж добре обладнаний, чистий, а також є можливість</div>
                </div>

                <div class="d-flex flex-column align-items-start"
                     style="width: 50%; padding: 5px 10px; margin-top: 10px;">
                    <div class="d-flex flex-row" style="width: 100%;">
                        <div style="width: 85px;">
                            <div class="listing-review-img-container">
                                <img class="listing-review-img" src="https://a0.muscache.com/im/pictures/user/c5f89e86-3ce6-4fec-abd1-dd69f44a90fb.jpg?im_w=240" />
                            </div>
                        </div>
                        <div>
                            <div class="listing-review-name">Marek</div>
                            <div class="listing-review-date">march 18</div>
                        </div>
                    </div>
                    <div class="listing-review-text">Чудовий відпочинок у тихому місці посеред природи. Котедж добре обладнаний, чистий, а також є можливість</div>
                </div>
            </div>
        </div>

    </main>

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

@section('scripts')
    <script>
        startCalendar('{{ __('listing.nights') }}');
    </script>
@stop
