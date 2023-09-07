<div class="top-header header-animated container-fluid m-0">
    <div class="row">
        <div class="col d-flex justify-content-center align-items-center">
            <a href="{{ route('main') }}"><img class="logo" src="{{ URL::asset('images/lookin-logo-0.5x.png')}}"/></a>
        </div>
        <div class="col-md d-flex justify-content-center align-items-center">
            <div class="search-buttons row rounded-3">
                <button class="col button-where text-center">@lang("main.somewhere")</button>
                <div class="col" style="flex: 0">
                    <div style="height: 100%; background-color: #cccccc; width: 1px;"></div>
                </div>
                <button class="col button-when text-center">@lang("main.whenever")</button>
            </div>
        </div>
        <div class="col d-flex justify-content-center align-items-center">
            <div class="d-flex flex-row gap-3 justify-content-center align-items-center">
                <button class="header-offer">@lang("main.offer_an_apartment")</button>
                <button>
                    <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 27 27" fill="none">
                        <circle cx="13.5" cy="13.5" r="12.75" stroke="#8B8B8B" stroke-width="1.5"/>
                        <path d="M13.4996 0.40918C4.49956 8.70009 5.31774 18.5619 13.4996 26.591" stroke="#8B8B8B"/>
                        <path d="M13.9094 0.818359C21.9049 8.85018 21.1781 18.4038 13.9094 26.182"
                              stroke="#8B8B8B"/>
                        <line x1="0.818359" y1="13.4092" x2="26.182" y2="13.4092" stroke="#8B8B8B"/>
                    </svg>
                </button>
                <div class="corner-menu rounded-4" onclick="openMenu('header-menu')">
                    <div class="rounded-4 p-1 gap-3">
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
                        <button>
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
                    <ul class="header-menu flex-column justify-content-center align-items-left" id="header-menu">
                        <li class="header-menu-main-item">@lang("main.notification")</li>
                        <li class="header-menu-main-item">@lang("main.travels")</li>
                        <li class="header-menu-main-item">@lang("main.favorites")</li>
                        <hr class="header-menu-hr-item">
                        <li class="header-menu-secondary-item">@lang("main.offer_your_listing")
                        </li>
                        <li class="header-menu-secondary-item">@lang("main.account")</li>
                        <hr class="header-menu-hr-item">
                        <li class="header-menu-secondary-item">
                            <svg xmlns="http://www.w3.org/2000/svg" style="margin:-2px 2px 0 3px;" width="13"
                                 height="13" fill="currentColor" class="bi bi-info-square" viewBox="0 0 16 16">
                                <path
                                    d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                                <path
                                    d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                            </svg>
                            @lang("main.help_center")
                        </li>
                        <li class="header-menu-secondary-item">
                            {{--                            <a href="{{ route("logout") }}">--}}
                            {{--                            <svg xmlns="http://www.w3.org/2000/svg" style="margin:-2px 2px 0 0;" width="16" height="16"--}}
                            {{--                                 fill="currentColor" class="bi bi-box-arrow-left" viewBox="0 0 16 16">--}}
                            {{--                                <path fill-rule="evenodd"--}}
                            {{--                                      d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z"/>--}}
                            {{--                                <path fill-rule="evenodd"--}}
                            {{--                                      d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z"/>--}}
                            {{--                            </svg>--}}
                            {{--                            @lang("main.log_out")--}}
                            {{--                            </a>--}}

                            <form method="POST" action="{{ route('logout') }}" style="margin: 0">
                                @csrf
                                <x-dropdown-link :href="route('logout')"
                                                 onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                    <svg xmlns="http://www.w3.org/2000/svg" style="margin:-2px 2px 0 0;" width="16"
                                         height="16"
                                         fill="currentColor" class="bi bi-box-arrow-left" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                              d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z"/>
                                        <path fill-rule="evenodd"
                                              d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z"/>
                                    </svg>
                                    @lang("main.log_out")
                                </x-dropdown-link>
                            </form>
                        </li>
                    </ul>
                @else
                    <ul class="header-menu flex-column justify-content-center align-items-left"
                        style="margin-top: 250px" id="header-menu">
                        <li class="header-menu-main-item" style="font-weight: 600"><a href="{{ route("login") }}">@lang("main.login")</a>
                        </li>
                        <li class="header-menu-main-item"><a href="{{ route("register") }}">@lang("main.register")</a>
                        </li>
                        <hr class="header-menu-hr-item">
                        <li class="header-menu-secondary-item">@lang("main.offer_your_listing")
                        </li>
                        <li class="header-menu-secondary-item">
                            @lang("main.help_center")
                        </li>
                    </ul>
                @endif
            </div>
        </div>
    </div>
</div>
