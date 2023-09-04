<div class="modal fade" id="languageModal" tabindex="-1" aria-labelledby="languageModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close p-3" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-4 d-flex flex-column gap-3">
                <h1 class="modal-title fs-5" id="languageModalLabel">@lang("main.selected_language")</h1>
                <div class="d-flex flex-row  gap-4 mb-4">
                    @foreach ($languages as $language)
                        @if( App::getLocale() === $language->languageCode)
                            <div class="modal-dialog-window">
                                <a href="locale/{{ $language->languageCode }}">
                                    <div class="d-flex flex-column">
                                        <div style="color:var(--text-color-dark); font-size:15px;">{{ $language->languageName }}</div>
                                        <div style="font-size:13px;">{{ $language->countryName }}</div>
                                    </div>
                                </a>
                            </div>
                        @endif
                    @endforeach
                </div>
                <h1 class="modal-title fs-5" id="languageModalLabel">@lang("main.choose_language")</h1>
                <div class="d-flex flex-row  gap-4">
                    @foreach ($languages as $language)
                        <div class="modal-dialog-window">
                            <a href="locale/{{ $language->languageCode }}">
                                <div class="d-flex flex-column">
                                    <div style="color:var(--text-color-dark); font-size:15px;">{{ $language->languageName }}</div>
                                    <div style="font-size:13px;">{{ $language->countryName }}</div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
