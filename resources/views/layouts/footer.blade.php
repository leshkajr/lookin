<footer>
    <div class="open_map-block d-flex justify-content-center align-items-center">
        <a href="#" class="open_map d-flex flex-row justify-content-center align-items-center gap-2">
            <div>@lang("main.showmap")</div>
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="15" viewBox="0 0 18 14" fill="none">
                <rect x="0.21875" y="3" width="5.15625" height="10.8333" fill="#6B6B6B"/>
                <rect x="12.5938" width="5.15625" height="10.8333" fill="#6B6B6B"/>
                <path d="M6.40625 3L11.5625 0V10.8333L6.40625 13.8333V3Z" fill="#6B6B6B"/>
            </svg>
        </a>
    </div>

    <div class="footer">
        <div class="row">
            <div class="col">
                <div class="d-flex flex-row gap-4">
                    <div>© 2023 Look`in. Inc.</div>
                    <div><a href="">@lang("main.privacy_policy")</a></div>
                    <div><a href="">@lang("main.terms")</a></div>
                </div>
            </div>

            <div class="col">
                <div class="d-flex flex-row float-end gap-4 footer-right-side">
                    <div class="text-end">
                        <button type="button" data-bs-toggle="modal" data-bs-target="#languageModal">
                            @foreach($languages as $language)
                                @if(App::getLocale() === $language->languageCode)
                                    {{ $language->languageName }} ({{ strtoupper($language->languageCode) }})
                                @endif
                            @endforeach
                        </button>
                    </div>
                    <div class="text-end">
                        <button type="button" data-bs-toggle="modal" data-bs-target="#currencyModal">
                            @foreach($currencies as $currency)
                                @if($currency->currencyCode === "USD")
                                    {{ $currency->currencyToken }} {{ strtoupper($currency->currencyCode) }}
                                @endif
                            @endforeach
                        </button>
                    </div>
                    <div class="text-end"><a href="">@lang("main.support")</a></div>
                </div>
            </div>
        </div>
    </div>
</footer>
