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

            <div class="listing-photos row mt-4" style="width: 100%; height: 500px;">
                <div class="col">
                    <div class="listing-photo">
                        <img class="listing-photo-img" src="{{ asset($listing['photos'][0]['path']) }}"/>
                    </div>
                </div>
                <div class="col" style="padding-left: 15px;">
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
                <div class="d-flex flex-column" style="width: 60%; padding: 20px 20px 20px 0;">
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
                <div class="d-flex justify-content-center align-items-center"
                     style="width: 40%; padding-left: 20px; padding-top: 25px;">
                    <div class="listing-reservation-container">
                        <div class="listing-reservation-price">$175 @lang('listing.night')</div>

                        <div class="start-table-block mb-3">
                            <div class="row">
                                <div class="col" style="width: 49%">
                                    <div class="start-table-label">
                                        <div>@lang('start.arrival')</div>
                                        <input id="dateArrivalInput" type="date"
                                               min="2023-09-25" required />
{{--                                        <x-clear-input required value="{{ Lang::get('start.add_date') }}" class="start-table-input"/>--}}
                                    </div>
                                </div>
                                <div style="width: 1px">
                                    <div style="height: 86%;margin-top:4px; background-color: var(--hr); width: 1px;"></div>
                                </div>
                                <div class="col" style="width: 49%">
                                    <div class="start-table-label">
                                        <div>@lang('start.departure')</div>
                                        <input id="dateDepartureInput" type="date" required />
                                    </div>
                                </div>
                            </div>
                            <div style="width: 100%; background-color: var(--hr); height: 1px;"></div>
                            <div class="start-table-label">
                                <div>@lang('listing.guests')</div>
                                <x-clear-input required value="1" class="start-table-input"
                                type="number" id="inp" style="width: 10%" min="1" max="99"/>
                            </div>

                        </div>
                        <div>
                            <x-primary-button style="width: 100%; padding: 10px 0;">
                                <div class="d-flex justify-content-center align-items-center gap-2">
                                    @lang('listing.book_now')
                                </div>
                            </x-primary-button>
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
