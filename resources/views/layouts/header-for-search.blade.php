<div class="top-header header-animated container-fluid m-0">
    <div class="row">
        <div class="col d-flex justify-content-center align-items-center">
            <a href="{{ route('main') }}"><img class="logo" src="{{ URL::asset('images/lookin-logo-0.5x.png')}}"/></a>
        </div>
        <div class="col-md d-flex justify-content-center align-items-center">
            <div class="search-buttons row rounded-3">
                <button class="col button-where text-center"
                id="dialog-window-search-somewhere">@lang("main.somewhere")</button>
                <div class="col" style="flex: 0">
                    <div style="height: 100%; background-color: #cccccc; width: 1px;"></div>
                </div>
                <button class="col button-when text-center"
                        id="dialog-window-search-whenever">@lang("main.whenever")</button>
            </div>
        </div>
        <div class="col d-flex justify-content-center align-items-center">
            <div class="d-flex flex-row gap-3 justify-content-center align-items-center">

            </div>
        </div>
    </div>
</div>
