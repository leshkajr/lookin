@extends('layouts.master')
@section('title', 'Режим господаря')
@section('header')
    <header class="main-header">
        @include('layouts.header-2')
    </header>
@stop
@section('content')
    <main>
        <div class="adverticounter">
            @include('layouts.header-host')
            <div class="count_text">
                <div style="font-size: 24px; font-weight: 600">Вітаемо,{{$user->name}}</div>
                <div class="location-text-description" style="margin-top: 1%">Гості можуть забронювати ваше помешкання
                    через 24 години після публікації оголошення. Як підготуватися?
                </div>
            </div>
            <div class="container-div_adverti">
                @foreach($hostListings as $listing)
                    @if($listing['diffDay'] < 1)
                        <div class="div_adverti">
                            <div class="header_text">Оголошення створено</div>
                            <div class="content">
                                <img class="photo_adver"
                                     src="{{ asset('storage/images/photos_listings/'.$listing['photos'][0]->path)}}">
                                <div class="house_name">
                                    <div style="font-size: 17px;font-weight: 600">{{ $listing['title'] }}</div>
                                    <div class="price_adver">{{ $listing['priceForNight'] }}$</div>
                                    <div class="text_arend">{{ Lang::get('listing_type.'.$listing['type']->nameType) }}</div>
                                    <div class="review"><a href="#">Переглянути</a></div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
            <div style="margin-top: 2%;">
                <div class="header_text" style=" font-size: 24px">Ми завжди готові допомогти</div>
                <div class="count_help">
                    <div class="helps" style="margin-right: 40px;">
                        <div class="text_helps">Приєднатися до місцевого клубу господарів</div>
                        <div class="text_helps" style="font-weight: 300; margin-top: 10px;">Знайомтеся, співпрацюйте й діліться досвідом з
                            іншими господарями та членами спільноти.
                        </div>
                    </div>
                    <div class="helps">
                        <div class="text_helps">Отримайте спеціальну допомогу</div>
                        <div class="text_helps" style="font-weight: 300; margin-top: 10px;">Нові господарі мають змогу одним дотиком до екрана
                            зв’язатися зі спеціалістами Команди підтримки Спільноти.
                        </div>
                    </div>
                </div>
            </div>
            <div style="margin-top: 2%;">
                <div class="header_text" style=" font-size: 24px">Ресурси та поради</div>
                <div class="resourscounter">
                    <div class="resourse">
                        <div class="text_resours">Як отримувати кошти за прийом гостей</div>
                    </div>
                    <div class="resourse">
                        <div class="text_resours">Як вибрати стратегію ціноутворення</div>
                    </div>
                    <div class="resourse">
                        <div class="text_resours">Найкращий спосіб налаштувати календар і параметри бронювань</div>
                    </div>
                    <div class="resourse" style="margin-right: 0;">
                        <div class="text_resours">Як вибрати стратегію ціноутворення</div>
                    </div>
                </div>
            </div>
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

