<div class="modal fade" id="currencyModal" tabindex="-1" aria-labelledby="currencyModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close p-3" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-4 d-flex flex-column gap-3">
                <h1 class="modal-title fs-5" id="currencyModalLabel">@lang("main.selected_currency")</h1>
                <div class="d-flex flex-row  gap-4 mb-4">
                    @foreach ($currencies as $currency)
                        @if($currency->currencyCode === "USD")
                            <div class="modal-dialog-window">
                                <a href="currency/{{ $currency->currencyCodeISO4217 }}">
                                    <div class="d-flex flex-column">
                                        <div style="color:var(--text-color-dark); font-size:15px;">{{ $currency->currencyName }}</div>
                                        <div style="font-size:13px;">{{ $currency->currencyCode }} - {{ $currency->currencyToken }}</div>
                                    </div>
                                </a>
                            </div>
                        @endif
                    @endforeach
                </div>
                <h1 class="modal-title fs-5" id="currencyModalLabel">@lang("main.choose_currency")</h1>
                <div class="d-flex flex-row  gap-4">
                    @foreach ($currencies as $currency)
                        <div class="modal-dialog-window">
                            <a href="currency/{{ $currency->currencyCodeISO4217 }}">
                                <div class="d-flex flex-column">
                                    <div style="color:var(--text-color-dark); font-size:15px;">{{ $currency->currencyName }}</div>
                                    <div style="font-size:13px;">{{ $currency->currencyCode }} - {{ $currency->currencyToken }}</div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
