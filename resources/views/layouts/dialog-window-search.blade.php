<div class="m-fade show" tabindex="-1">
    <div class="m-search d-flex flex-column justify-content-center align-items-center">
        @include('layouts.header')
        <div class="m-search-container">
            <div class="m-search-header">
                <div class="d-flex flex-row gap-5">
                    <div class="m-s-h-container active">
                        <div class="m-s-h-c-header">@lang('main.where')</div>
                        <div class="m-s-h-c-description">@lang('main.search_directions')</div>
                    </div>

                    <div class="m-s-h-container">
                        <div class="m-s-h-c-header">@lang('main.arrival')</div>
                        <div class="m-s-h-c-description">@lang('main.add_date')</div>
                    </div>

                    <div class="m-s-h-container">
                        <div class="m-s-h-c-header">@lang('main.departure')</div>
                        <div class="m-s-h-c-description">@lang('main.add_date')</div>
                    </div>

                    <div class="m-s-h-container">
                        <div class="m-s-h-c-header">@lang('main.who')</div>
                        <div class="m-s-h-c-description">@lang('main.add_guests')</div>
                    </div>

                    <div class="d-flex justify-content-end align-items-center" style="width: 20%;">
                        <button class="button button-wide"
                        style="padding: 15px 50px; font-size: 19px;  border-radius: 12px;">
                            @lang('main.search')</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
