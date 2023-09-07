@extends('layouts.master')
@section('title', 'Search for new experiences')
@section('header')
    <header class="main-header">
        @include('layouts.header')
    </header>
@stop

@section('content')
    <div class="text-favorite">@lang('favorite.favorite')</div>
    <main>
        <div class="d-flex flex-wrap align-items-center justify-content-left listings">
            <div class="listing-block">
                <img class="listing-img"
                     src="https://a0.muscache.com/im/pictures/prohost-api/Hosting-807997252988813015/original/24968789-974c-46c7-abd5-357796bb11d5.jpeg?im_w=1200"/>
                <div class="listing-like">
                    <button>
                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="27" viewBox="0 0 33 28" fill="none">
                            <path
                                d="M16.641 27.7833C15.4432 26.6033 14.2689 25.453 13.1025 24.2962C9.77867 20.9963 6.4449 17.707 3.14466 14.3844C2.0032 13.2376 1.1414 11.886 0.808948 10.2886C0.351651 8.09243 0.920953 6.08125 2.17941 4.26639C4.62356 0.740473 9.21579 -0.408468 13.2366 1.46501C14.5093 2.05748 15.6158 2.87735 16.631 3.89565C16.7487 3.78407 16.8579 3.6838 16.9656 3.57999C18.5672 2.06172 20.4271 1.05401 22.6343 0.684686C27.3999 -0.121056 32.0371 3.35613 32.5636 8.10514C32.8183 10.408 31.9765 12.3076 30.509 13.984C29.7242 14.8809 28.841 15.6923 27.9942 16.534C24.294 20.2075 20.5918 23.8815 16.8878 27.5559C16.8136 27.6266 16.7344 27.6972 16.641 27.7833ZM16.6788 24.6105C16.7965 24.4693 16.8793 24.3513 16.9798 24.2518C20.6178 20.6484 24.2562 17.0453 27.895 13.4424C28.6659 12.6709 29.3118 11.7863 29.8098 10.8197C30.1123 10.2427 30.337 9.63824 30.3328 8.97091C30.3049 4.92384 26.302 1.94873 22.3818 3.08779C20.4056 3.6612 18.7876 4.82003 17.3651 6.26556C17.119 6.51484 16.8935 6.7846 16.6353 7.0706C16.4426 6.85875 16.2786 6.67514 16.1131 6.49366C14.9001 5.14382 13.3996 4.07728 11.7199 3.37096C8.42248 1.98899 4.74983 3.467 3.40648 6.71681C3.03765 7.6087 2.82077 8.54085 2.98985 9.50689C3.24596 10.9673 4.06567 12.1331 5.09441 13.1557C8.84268 16.8833 12.6 20.6025 16.3663 24.3132C16.4455 24.3986 16.5332 24.4749 16.6788 24.6105Z"
                                fill="white" fill-opacity="0.8"/>
                            <path class="fill" opacity="0.5"
                                  d="M16.6765 25.3093C16.5357 25.1706 16.4463 25.0925 16.3646 25.0094C12.6569 21.2043 8.95026 17.3992 5.24483 13.594C4.22965 12.5479 3.42074 11.3543 3.168 9.8609C3.00115 8.87253 3.21517 7.91884 3.57914 7.00633C4.90479 3.68286 8.52903 2.16923 11.783 3.58315C13.4406 4.30579 14.9213 5.39698 16.1182 6.77802C16.2816 6.9637 16.4435 7.15083 16.6336 7.3683C16.8884 7.07569 17.1109 6.7997 17.3538 6.54466C18.7576 5.06716 20.3543 3.88154 22.3044 3.29343C26.1764 2.12805 30.1231 5.17192 30.1506 9.31253C30.1548 9.99529 29.933 10.613 29.6345 11.204C29.1434 12.1918 28.5068 13.0959 27.7471 13.8845C24.1562 17.5716 20.5657 21.258 16.9757 24.9437C16.8743 25.0441 16.7927 25.1648 16.6765 25.3093Z"
                                  fill="black" fill-opacity="0.7"/>
                        </svg>
                    </button>
                </div>
                <div class="m-2 mt-3">
                    <div class="row">
                        <div class="col listing-localization">Bernati, Latvia</div>
                        <div class="col text-end">
                            <svg style="margin-top: -3px;" xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                 viewBox="0 0 13 13" fill="none">
                                <path
                                    d="M6.5 0.43103L8.21927 4.59138L12.6819 4.95146L9.28184 7.88278L10.3206 12.2657L6.5 9.91697L2.6794 12.2657L3.71816 7.88278L0.318133 4.95146L4.78073 4.59138L6.5 0.43103Z"
                                    fill="#636060"/>
                            </svg>
                            <span style="margin-left: 5px;">5,0</span>
                        </div>
                    </div>
                    <div class="listing-category">Beach</div>
                    <div class="listing-date">11-16 sept.</div>
                    <div class="listing-price-block"><span class="listing-price">100$</span> for night</div>
                </div>
            </div>

            <div class="listing-block">
                <img class="listing-img"
                     src="https://a0.muscache.com/im/pictures/8ce68d61-709d-4897-9b80-c691e7db2bd8.jpg?im_w=720"/>
                <div class="m-2 mt-3">
                    <div class="row">
                        <div class="col listing-localization">Bernati, Latvia</div>
                        <div class="col text-end">
                            <svg style="margin-top: -3px;" xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                 viewBox="0 0 13 13" fill="none">
                                <path
                                    d="M6.5 0.43103L8.21927 4.59138L12.6819 4.95146L9.28184 7.88278L10.3206 12.2657L6.5 9.91697L2.6794 12.2657L3.71816 7.88278L0.318133 4.95146L4.78073 4.59138L6.5 0.43103Z"
                                    fill="#636060"/>
                            </svg>
                            <span style="margin-left: 5px;">5,0</span>
                        </div>
                    </div>
                    <div class="listing-category">Beach</div>
                    <div class="listing-date">11-16 sept.</div>
                    <div class="listing-price-block"><span class="listing-price">100$</span> for night</div>
                </div>
            </div>

            <div class="listing-block">
                <img class="listing-img"
                     src="https://a0.muscache.com/im/pictures/miso/Hosting-782583043344736922/original/5a43c686-6c35-44c7-8504-177aa003191e.jpeg?im_w=720"/>
                <div class="m-2 mt-3">
                    <div class="row">
                        <div class="col listing-localization">Bernati, Latvia</div>
                        <div class="col text-end">
                            <svg style="margin-top: -3px;" xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                 viewBox="0 0 13 13" fill="none">
                                <path
                                    d="M6.5 0.43103L8.21927 4.59138L12.6819 4.95146L9.28184 7.88278L10.3206 12.2657L6.5 9.91697L2.6794 12.2657L3.71816 7.88278L0.318133 4.95146L4.78073 4.59138L6.5 0.43103Z"
                                    fill="#636060"/>
                            </svg>
                            <span style="margin-left: 5px;">5,0</span>
                        </div>
                    </div>
                    <div class="listing-category">Beach</div>
                    <div class="listing-date">11-16 sept.</div>
                    <div class="listing-price-block"><span class="listing-price">100$</span> for night</div>
                </div>
            </div>
            <div class="listing-block">
                <img class="listing-img"
                     src="https://a0.muscache.com/im/pictures/miso/Hosting-782583043344736922/original/5a43c686-6c35-44c7-8504-177aa003191e.jpeg?im_w=720"/>
                <div class="m-2 mt-3">
                    <div class="row">
                        <div class="col listing-localization">Bernati, Latvia</div>
                        <div class="col text-end">
                            <svg style="margin-top: -3px;" xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                 viewBox="0 0 13 13" fill="none">
                                <path
                                    d="M6.5 0.43103L8.21927 4.59138L12.6819 4.95146L9.28184 7.88278L10.3206 12.2657L6.5 9.91697L2.6794 12.2657L3.71816 7.88278L0.318133 4.95146L4.78073 4.59138L6.5 0.43103Z"
                                    fill="#636060"/>
                            </svg>
                            <span style="margin-left: 5px;">5,0</span>
                        </div>
                    </div>
                    <div class="listing-category">Beach</div>
                    <div class="listing-date">11-16 sept.</div>
                    <div class="listing-price-block"><span class="listing-price">100$</span> for night</div>
                </div>
            </div>
            <div class="listing-block">
                <img class="listing-img"
                     src="https://a0.muscache.com/im/pictures/miso/Hosting-782583043344736922/original/5a43c686-6c35-44c7-8504-177aa003191e.jpeg?im_w=720"/>
                <div class="m-2 mt-3">
                    <div class="row">
                        <div class="col listing-localization">Bernati, Latvia</div>
                        <div class="col text-end">
                            <svg style="margin-top: -3px;" xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                 viewBox="0 0 13 13" fill="none">
                                <path
                                    d="M6.5 0.43103L8.21927 4.59138L12.6819 4.95146L9.28184 7.88278L10.3206 12.2657L6.5 9.91697L2.6794 12.2657L3.71816 7.88278L0.318133 4.95146L4.78073 4.59138L6.5 0.43103Z"
                                    fill="#636060"/>
                            </svg>
                            <span style="margin-left: 5px;">5,0</span>
                        </div>
                    </div>
                    <div class="listing-category">Beach</div>
                    <div class="listing-date">11-16 sept.</div>
                    <div class="listing-price-block"><span class="listing-price">100$</span> for night</div>
                </div>
            </div>
        </div>
    </main>

@stop

@section('footer')
    <footer>
        <div class="footer-container">
            <div class="row-likes">
                <div class="footer-likes">
                    <h5>Поддержка</h5>
                    <ul>
                        <li><a href="#">Центр помощи</a></li>
                        <li><a href="#">AirCover</a></li>
                        <li><a href="#">Борьба с дискриминацией</a></li>
                        <li><a href="#">Помощь людям с инвалидностью</a></li>
                        <li><a href="#">Сообщить о проблеме в районе</a></li>
                    </ul>
                </div>
                <div class="footer-likes">
                    <h5>Прием гостей</h5>
                    <ul>
                        <li><a href="#">Сдайте жилье на Airbnb</a></li>
                        <li><a href="#">AirCover для хозяев</a></li>
                        <li><a href="#">Материалы для хозяев</a></li>
                        <li><a href="#">Форум сообщества</a></li>
                        <li><a href="#">Ответственный прием гостей</a></li>
                    </ul>
                </div>
                <div class="footer-likes">
                    <h5>lookin</h5>
                    <ul>
                        <li><a href="#">Пресс-центр</a></li>
                        <li><a href="#">Новые функции</a></li>
                        <li><a href="#">Карьера в Airbnb</a></li>
                        <li><a href="#">Для инвесторов</a></li>
                        <li><a href="#">Прием гостей на Airbnb.org</a></li>
                    </ul>
                </div>
            </div>
        </div>
{{--        <hr style="color: #1a1d20">--}}
{{--        <div style="text-align: center; marg">--}}
{{--            <p class="p-likes">&copy; 2023 lookin, Inc.</p>--}}
{{--            <p class="p-likes">Конфиденциальность | Условия | Карта сайта | Реквизиты компании</p>--}}
{{--        </div>--}}
    </footer>
   @include('layouts.footer')
@stop

@section('dialogs_windows')
    <div class="dialogs_windows">
        @include('layouts.dialog-window-language')
        @include('layouts.dialog-window-currency')
    </div>
@stop




