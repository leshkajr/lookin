@extends('layouts.master')
@section('title', 'Search for new experiences')
@section('header')
    <header class="main-header">
        @include('layouts.header-2')
    </header>
@stop
@section('content')
    <main>
        <div class="p-account">@lang('account.account')</div>
        <div class="d-flex flex-row gap-1" style="margin-left: 12%; font-size: 19px;">
            <div class="account-text">{{$user->name}}@if(!isset($user->lastName)), @else {{$user->lastName}}, @endif</div>
            <div>{{$user->email}}</div>
            <div style="text-decoration: underline"><a href="#" >Перейти до профилю</a></div>
        </div>
        <div class="div-account">
            <div class="account-block">
                <a href="{{ route('account.personal_data') }}">
                    <div style="margin-left: 5%" >
{{--                        <img src="{{ asset('images/account-svg/preferences.svg') }}"/>--}}
                        <svg xmlns="http://www.w3.org/2000/svg" width="55" height="55" fill="currentColor" class="bi bi-file-person" viewBox="0 0 16 16">
                            <path d="M12 1a1 1 0 0 1 1 1v10.755S12 11 8 11s-5 1.755-5 1.755V2a1 1 0 0 1 1-1h8zM4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4z"/>
                            <path d="M8 10a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                        </svg>
                    </div>
                    <div class="row">
                        <div class="text-account">Персональна інформація</div>
                        <div class="text">Надайте особисті дані та як ми можемо з вами зв’язатися</div>
                    </div>
                </a>
            </div>
               <div class="account-block">
                   <a href="{{ route('account.profile') }}">
                       <div style="margin-left: 5%" >
                           <img src="{{ asset('images/account-svg/preferences.svg') }}"/>
                       </div>
                       <div class="row">
                           <div class="text-account">Загальні уподобання</div>
                           <div class="text">Встановіть мову,валюту та часовий пояс за замовченням</div>
                       </div>
                   </a>
               </div>

            <div class="account-block">
                <a href="{{ route('account.verification') }}">
                    <div style="margin-left: 5%" >
                        <img src="{{ asset('images/account-svg/security.svg') }}"/>
                    </div>
                    <div class="row">
                        <div class="text-account">Вхід та безпека</div>
                        <div class="text">Оновіть пароль та захистить свій акаунт</div>
                    </div>
                </a>
            </div>
            <div class="account-block">
               <a href="{{ route('account.notification') }}">
                   <div style="margin-left: 5%" >
                       <img src="{{ asset('images/account-svg/spam-alert.svg') }}"/>
                   </div>
                   <div class="row">
                       <div class="text-account">Сповіщення</div>
                       <div class="text">Виберіть параметр сповіщення і зв'язку з вами</div>
                   </div>
               </a>
            </div>
            <div class="account-block">
                <a href="">
                    <div style="margin-left: 5%" >
                        <img src="{{ asset('images/account-svg/credit-card.svg') }}"/>
                    </div>
                    <div class="row">
                        <div class="text-account">Платежі й виплати</div>
                        <div class="text">Переглядайте платежі,виплати, та подарункові карти</div>
                    </div>
                </a>
            </div>

        </div>
        <div class="div-count">
            <div >Хочете деактивувати акаунт?</div>
            <div style="font-weight: bold;"><a href="#" style="text-decoration: underline" >Подбайте про це зараз</a></div>

        </div>
    </main>
@stop

@section('footer')
    @include('layouts.footer-upper')
    @include('layouts.footer')
@stop

@section('dialogs_windows')
    <div class="dialogs_windows">
        @include('layouts.dialog-window-language')
        @include('layouts.dialog-window-currency')
    </div>
@stop
