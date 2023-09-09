<div class="top-header header-animated container-fluid m-0" style="padding: 1% 0;">
    <div class="row">
        <div class="col d-flex justify-content-center align-items-center">
            <a href="{{ route('main') }}"><img class="logo" src="{{ URL::asset('images/lookin-logo-0.5x.png')}}"
                                               style="transform: scale(0.7)"/></a>
        </div>
        <div class="col-md"></div>
        <div class="col">
            <div class="d-flex justify-content-end align-items-center h-100 me-5">
                <button class="button-languages" type="button" data-bs-toggle="modal" data-bs-target="#languageModal">
                    @foreach($languages as $language)
                        @if(App::getLocale() === $language->languageCode)
                            {{ $language->languageName }} ({{ strtoupper($language->languageCode) }})
                        @endif
                    @endforeach
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 27 27" fill="none"
                    style="margin: -3px 0 0 5px;">
                        <circle cx="13.5" cy="13.5" r="12.75" stroke="currentColor" stroke-width="1.5"/>
                        <path d="M13.4996 0.40918C4.49956 8.70009 5.31774 18.5619 13.4996 26.591" stroke="currentColor"/>
                        <path d="M13.9094 0.818359C21.9049 8.85018 21.1781 18.4038 13.9094 26.182"
                              stroke="currentColor"/>
                        <line x1="0.818359" y1="13.4092" x2="26.182" y2="13.4092" stroke="currentColor"/>
                    </svg>
                </button>
            </div>
        </div>
    </div>
</div>
