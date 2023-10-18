@extends('layouts.master-create-listing')
@section('title', 'Установіть ціну')
@section('header')
    <header class="main-header">
        @include('layouts.header-create-listing')
    </header>
@stop
@section('content')
    <main class="d-flex align-items-center justify-content-center">
        <div class="house_price_container">
            <form method="post" action="{{ route("create-listing.price") }}" id="form">
                @csrf
                <input type="hidden" name="listingId" id="listingId" value="{{ $listingId }}"/>

                <div class="d-flex flex-column align-items-center justify-content-center">
                    <div style="width: 70%">
                        <div class="text-header"
                        style="margin-left: 40px;">Тепер установіть ціну</div>
                        <div class="location-text-description" style="margin-top: 0.7%;margin-left: 40px;">
                            Ви зможете будь-коли її змінити.</div>
                        <div class="price d-flex align-items-center justify-content-center w-100">
                            <input type="text" value="$" class="clear-input" id="price"
                            style="font-weight: 600;">
                        </div>
                        <div class="price_container">
                            <div class="div_price">
                                <div class="div_button">
                                    <div style="margin-left: 3%;font-size: 18px">Ціна для господаря до врахування податків</div>
                                    <span style="margin-right: 3%;font-size: 18px" id="owner_price"></span>
                                </div>
                                <div class="div_button">
                                    <div style="margin-left: 3%;font-size: 18px">Сервісний збір із господаря</div>
                                    <span style="margin-right: 3%;font-size: 18px">$0</span>
                                </div>
                                <hr style="width: 95%;margin-left: 3%;font-weight: 600">
                                <div class="div_button" style="margin-bottom: 2%">
                                    <div style="margin-left: 3%;font-size: 18px;font-weight: 600">Вартість послуги</div>
                                    <span style="margin-right: 3%;font-size: 18px" id="earnings"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-start">
                    <div class="footer-start-progress_container">
                        <div class="footer-start-progress" style="width: 100%;"></div>
                    </div>
                    <div class="button-start_next-container w-100">
                        <button type="button" class="button button-start_next" id="buttonNext"
                                onclick="clickButtonNext('price', document.getElementById('price').value)"
                        >@lang('main.next')</button>
                    </div>
                </div>
            </form>

        </div>
    </main>

    <style>
        .footer-start-progress{
            animation: progress-bar 1s ease;
        }
        @keyframes progress-bar {
            from{
                width: 90%;
            }
            to{
                width: 100%;
            }
        }
    </style>
@stop

@section('footer')
@stop

@section('dialogs_windows')
    <div class="dialogs_windows">
        @include('layouts.dialog-window-language')
        @include('layouts.dialog-window-currency')
    </div>
@stop

@section('scripts')
    <script type="application/javascript">
        {{--let routeListingHost = {{ route() }}--}}
    </script>
@stop
