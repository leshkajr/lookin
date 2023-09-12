<div class="modal fade" id="filtersModal" tabindex="-1" aria-labelledby="filtersModalLabel" aria-hidden="true">
    <div class="modal-dialog" style="width: 50%;">
        <div class="modal-content">
            <div class="modal-header">
                <div class="modal-title fs-5 text-center" id="filtersModalLabel" style="width: 100%; margin-left: 5%">@lang("main.filters")</div>
                <button type="button" class="btn-close p-3" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-4 d-flex flex-column gap-3">
                <div class="d-flex flex-column gap-4 mb-4">
                    <div class="modal-dialog-window-header">@lang('main.price_range')</div>
                    <div class="modal-dialog-window-under_header mb-1">@lang('main.prices_before_payment')</div>
                    <div class="row">
                        <div class="form-floating" style="width: 45%;">
                            <input type="text" class="filters-input form-control" id="Minimum" placeholder="{{ Lang::get('main.minimum') }}">
                            <label for="Minimum" style="background: transparent">@lang('main.minimum')</label>
                        </div>
                        <div style="width: 10%;">
                            <div class="d-flex justify-content-center align-items-center w-100 h-100">
                                <div style="width: 40%; height: 1px; background-color: var(--text-color-light-light); border-radius: 30px;"></div>
                            </div>
                        </div>
                        <div class="form-floating" style="width: 45%;">
                            <input type="text" class="filters-input form-control" id="Maximum" placeholder="{{ Lang::get('main.maximum') }}">
                            <label for="Maximum">@lang('main.maximum')</label>
                        </div>
                    </div>

                    <div style="width: 100%; height: 1px; background-color: var(--text-color-light-light); margin: 10px 0"></div>

                    <div class="modal-dialog-window-header">@lang('main.rooms_and_sleeping_places')</div>
                    <div class="modal-dialog-window-under_header mb-1">@lang('main.rooms')</div>
                    <div class="d-flex flex-row filters-blocks">
                        <div></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
