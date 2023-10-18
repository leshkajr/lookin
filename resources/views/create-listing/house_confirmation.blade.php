@extends('layouts.master-create-listing')
@section('title', 'Підтвердження на резервування вашого оголошення')
@section('header')
    <header class="main-header">
        @include('layouts.header-create-listing')
    </header>
@stop
@section('content')
    <main class="d-flex align-items-center justify-content-center">
        <div class="house_photo_container" style="margin-top: 1%; width: 75%;">
            <form method="post" action="{{ route("create-listing.price") }}" id="form">
                @csrf
                <input type="hidden" name="listingId" id="listingId" value="{{ $listingId }}"/>

                <div class="text-header">Зазначте, чи потрібно ваше підтвердження на резервування вашого оголошення</div>
                <div class="location-text-description" style="margin-top: 1%; font-weight: 300">Ви зможете підтвердити резервування або відмінити.</div>
                <div style="font-weight: 500"><a href="#" style="text-decoration: underline">Докладніше</a></div>
                <div class="first_counter">
                        <div class="div_first" style="margin-top: 1%;">
                            <label class="lable_radio" for="radio1">
                                <input type="radio" class="radiobutton" name="confirm" id="radio1" value="yes">
                                <span class="radioFace"></span>
                                <div class="radio_text">
                                    <div style=";margin-left: 10px;font-size: 23px;font-weight:600">Так</div>
                                    <div style="margin-left: 10px;margin-top:0.3%;font-size: 17px;">Щоб зарезервувати це помешкання треба буде ваше підтвердження.</div>
                                </div>

                            </label>

                        </div>
                        <div class="div_first" style="margin-top: 2%">
                            <label class="lable_radio" for="radio2">
                                <input type="radio" class="radiobutton" name="confirm" id="radio2" value="no">
                                <span class="radioFace"></span>
                                <div class="radio_text">
                                    <div style="margin-left: 10px;font-size: 23px;font-weight:600">Ні</div>
                                    <div style="margin-left: 10px;margin-top:0.3%;font-size: 17px;">Користувач зможе зарезервувати це помешкання без вашого підтвердження.</div>
                                </div>

                            </label>
                        </div>
                </div>
                <div class="footer-start">
                    <div class="footer-start-progress_container">
                        <div class="footer-start-progress" style="width: 90%;"></div>
                    </div>
                    <div class="button-start_next-container w-100">
                        <button type="button" class="button button-start_next" id="buttonNext"
                                onclick="clickButtonNext('confirmation', document.getElementsByName('confirm'))"
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
                width: 80%;
            }
            to{
                width: 90%;
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
