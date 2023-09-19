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
                            {{ $language->languageNameNative }} ({{ strtoupper($language->languageCode) }})
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


                <div class="corner-menu rounded-4 ms-4" onclick="openMenu('header-menu')">
                    <div class="rounded-4">
                        <button style="padding-top: 3px;">
                            <svg width="28" height="14" viewBox="0 0 28 14" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M1.99219 1L25.9922 1" stroke="#8B8B8B" stroke-width="2"
                                      stroke-linecap="round"/>
                                <path d="M1.99219 7H25.9922" stroke="#8B8B8B" stroke-width="2"
                                      stroke-linecap="round"/>
                                <path d="M1.99219 13H25.9922" stroke="#8B8B8B" stroke-width="2"
                                      stroke-linecap="round"/>
                            </svg>
                        </button>
                        <button style="margin-left: 15px;">
                            <svg width="27" height="27" viewBox="0 0 31 31" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <circle cx="15.5" cy="15.5" r="14.25" stroke="#9A9999" stroke-width="1.5"/>
                                <circle cx="15.5" cy="10" r="5" fill="#8B8B8B"/>
                                <path
                                    d="M13.9636 13.8437L8.60519 20.2738C8.26559 20.6813 8.30329 21.2831 8.69109 21.645L9.35914 22.2685C12.817 25.4959 18.183 25.4959 21.6409 22.2685L22.3089 21.645C22.6967 21.2831 22.7344 20.6813 22.3948 20.2738L17.0364 13.8437C16.2369 12.8842 14.7631 12.8842 13.9636 13.8437Z"
                                    fill="#8B8B8B" stroke="#8B8B8B"/>
                            </svg>
                        </button>
                    </div>
                </div>
                @if(Auth::user() !== null)
                    @include('layouts.menu-with-auth')
                @else
                    @include('layouts.menu-non-auth')
                @endif
            </div>
        </div>
    </div>
</div>
