<footer>


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
