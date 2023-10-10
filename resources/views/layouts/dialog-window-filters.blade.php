<div class="modal fade" id="filtersModal" tabindex="-1" aria-labelledby="filtersModalLabel" aria-hidden="true">
    <div class="modal-dialog" style="width: 50%;">
        <div class="modal-content">
            <div class="modal-header">
                <div class="modal-title fs-5 text-center" id="filtersModalLabel"
                     style="width: 100%; margin-left: 5%">@lang("main.filters")</div>
                <button type="button" class="btn-close p-3" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body d-flex flex-column gap-3" style="border-radius: 0;
            padding: 20px 40px;">
                <div class="d-flex flex-column gap-4 mb-4">
                    <div class="modal-dialog-window-header">@lang('main.price_range')</div>
                    <div class="modal-dialog-window-under_header mb-1">@lang('main.prices_before_payment')</div>
                    <div class="row">
                        <div class="form-floating" style="width: 45%;">
                            <div class="input form-control d-flex flex-row gap-1">
                                <div>$</div>
                                <input type="text" class="clear-input" id="priceMinimum"
                                       placeholder="0"
                                       @if(isset($_GET['priceMin'])) value="{{ $_GET['priceMin'] }}" @endif>
                            </div>
                            <label for="priceMinimum">@lang('main.minimum')</label>
                        </div>
                        <div style="width: 10%;">
                            <div class="d-flex justify-content-center align-items-center w-100 h-100">
                                <div
                                    style="width: 40%; height: 1px; background-color: var(--text-color-light-light); border-radius: 30px;"></div>
                            </div>
                        </div>
                        <div class="form-floating" style="width: 45%;">
                            <div class="input form-control d-flex flex-row gap-1">
                                <div>$</div>
                                <input type="text" class="clear-input" id="priceMaximum"
                                       placeholder="0"
                                       @if(isset($_GET['priceMax'])) value="{{ $_GET['priceMax'] }}" @endif>
                            </div>
                            <label for="priceMaximum">@lang('main.maximum')</label>
                        </div>
                    </div>

                    <div style="width: 111.5%; height: 1px; margin-top: 10px; margin-bottom: 10px;
                     background-color: var(--text-color-light-light); margin-left: -5.8%; "></div>

                    <div class="modal-dialog-window-header">@lang('main.rooms_and_sleeping_places')</div>
                    <div class="modal-dialog-window-under_header">@lang('main.rooms')</div>
                    <div class="d-flex flex-row filters-blocks" id="rooms-parent">
                        <div class="active" style="width: 30%;" onclick="chooseCount(this,'rooms','rooms-parent');">
                            <button>@lang('main.any')</button>
                        </div>
                        @for($i = 1; $i <= 7; $i++)
                            <div onclick="chooseCount(this,'rooms','rooms-parent');"
                                 @if(isset($_GET['countRooms']))
                                     @if((int) $_GET['countRooms'] === $i)
                                         class="active"
                                @endif
                                @endif>
                                <button>{{ $i }}</button>
                            </div>
                        @endfor
                        <div onclick="chooseCount(this,'rooms','rooms-parent');">
                            <button>8+</button>
                        </div>
                    </div>

                    <div class="modal-dialog-window-under_header">@lang('main.bathrooms')</div>
                    <div class="d-flex flex-row filters-blocks" id="bathrooms-parent">
                        <div class="active" style="width: 30%;"
                             onclick="chooseCount(this,'bathrooms','bathrooms-parent');">
                            <button>@lang('main.any')</button>
                        </div>
                        @for($i = 1; $i <= 7; $i++)
                            <div onclick="chooseCount(this,'bathrooms','bathrooms-parent');"
                                 @if(isset($_GET['countBathrooms']))
                                     @if((int) $_GET['countBathrooms'] === $i)
                                         class="active"
                                @endif
                                @endif>
                                <button>{{ $i }}</button>
                            </div>
                        @endfor
                        <div onclick="chooseCount(this,'bathrooms','bathrooms-parent');">
                            <button>8+</button>
                        </div>
                    </div>

                    <div class="modal-dialog-window-under_header">@lang('main.beds')</div>
                    <div class="d-flex flex-row filters-blocks" id="beds-parent">
                        <div class="active" style="width: 30%;" onclick="chooseCount(this,'beds','beds-parent');">
                            <button>@lang('main.any')</button>
                        </div>
                        @for($i = 1; $i <= 7; $i++)
                            <div onclick="chooseCount(this,'beds','beds-parent');"
                                 @if(isset($_GET['countBeds']))
                                     @if((int) $_GET['countBeds'] === $i)
                                         class="active"
                                @endif
                                @endif>
                                <button>{{ $i }}</button>
                            </div>
                        @endfor
                        <div>
                            <button onclick="chooseCount(this,'beds','beds-parent');">8+</button>
                        </div>
                    </div>

                    <div style="width: 111.5%; height: 1px; margin-top: 10px; margin-bottom: 10px;
                     background-color: var(--text-color-light-light); margin-left: -5.8%; "></div>

                    <div class="modal-dialog-window-header">@lang('main.property_type')</div>
                    <div class="d-flex flex-row filters-property_type-blocks" id="type-blocks-parent">
                        @foreach($types_listings as $type)
                            <button class="d-flex flex-column justify-content-center align-items-center
                            @if(isset($_GET['propertyType']))
                                     @if($_GET['propertyType'] === $type->nameType)
                                         active
                            @endif
                            @endif
                            "
                                    onclick="chooseTypeListing(this,'{{ $type->nameType }}','type-blocks-parent')">
                                <img class="mb-2"
                                     src="{{ asset('images/types-listings-svg/'.$type->nameType.'.svg') }}"/>
                                <div>@lang('listing_type.'.$type->nameType)</div>
                            </button>
                        @endforeach
                    </div>

                    <div style="width: 111.5%; height: 1px; margin-top: 10px; margin-bottom: 10px;
                     background-color: var(--text-color-light-light); margin-left: -5.8%; "></div>

                    <div class="modal-dialog-window-header">@lang('main.amenities')</div>
                    <div>
                        <div class="d-flex flex-column filters-checkboxes-blocks">
                            @foreach($categoriesAmenities as $categoryAmenity)
                                <div style="margin: 5px 5px 5px 0;">
                                    <div
                                        class="filters-checkboxes-header-text">@lang('amenities_categories.'.$categoryAmenity->nameCategoryAmenity)</div>
                                    <div class="d-flex flex-row flex-wrap filters-checkbox-blocks w-100">
                                        @foreach($amenities->where('categoryAmenityId',$categoryAmenity->id) as $amenity)
                                            <div class="d-flex flex-row justify-content-left align-items-center">
                                                <label class="container-checkbox"
                                                       onclick="chooseCheckbox(this,'amenities','{{ $amenity->id }}')">
                                                    @lang('amenities.'.$amenity->nameAmenity)
                                                    <input type="checkbox">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>

                                        @endforeach
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="filters-checkboxes-after-button">
                            <button onclick="showMore(this)">@lang('main.show_more')</button>
                            <button onclick="showLess(this)" style="display: none;">@lang('main.show_less')</button>
                        </div>
                    </div>

                    <div style="width: 111.5%; height: 1px; margin-top: 10px; margin-bottom: 10px;
                     background-color: var(--text-color-light-light); margin-left: -5.8%; "></div>

                    <div class="modal-dialog-window-header">@lang('main.host_language')</div>
                    <div class="mt-2">
                        <div class="d-flex flex-column filters-checkboxes-blocks">
                            <div class="d-flex flex-row flex-wrap filters-checkbox-blocks w-100">
                                @foreach($languages as $language)
                                    <div class="d-flex flex-row justify-content-left align-items-center"
                                         onclick="chooseCheckbox(this,'hostLanguages','{{ $language->id }}')"
                                    >
                                        <label class="container-checkbox">
                                            @if(App::getLocale() !== "en")
                                                @lang('languages.'.$language->languageNameOnEnglish)
                                            @else
                                                @lang($language->languageName)
                                            @endif
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="filters-checkboxes-after-button">
                            <button onclick="showMore(this)">@lang('main.show_more')</button>
                            <button onclick="showLess(this)" style="display: none;">@lang('main.show_less')</button>
                        </div>
                    </div>

                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="button button-wide" onclick="buttonShow();">@lang("main.show")</button>
            </div>
        </div>
    </div>
</div>
