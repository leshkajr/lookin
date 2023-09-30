@extends('layouts.master')
@section('title', 'Search for new experiences')
@section('header')
    <header class="main-header">
        @include('layouts.header-2')
    </header>
@stop
@section('content')
    <main>
    <div class="verification_container" style="margin-top: 7%">
    <div class="d-flex flex-row">
     <div class="div_information" style="padding: 4% 0;">
         <div class="retangle_div">
             <div class="text_reg">O</div>
         </div>
         <div class="text_info">Ольга</div>
         <div class="text_info1">Гість</div>
     </div>
     </div>
        <div class="div_information" style="margin-top: 6%;">
            <div style="font-size: 16px;margin-left: 10%;font-weight: 600">Підтверджена інформація про користувача</div>
            <div class="informati" style="margin-top: 3%">
                <form style="margin: 0;">
                    <input class="input_text" style="margin-left: 5%;margin-top: 2%;margin-bottom: 2%" type="email" placeholder="Shishova123@gmail.com">
                </form>
            </div>
        </div>
        <div class="div_information" style="margin-top: 4%">
            <div style="font-size: 14px;margin-left: 10%;font-weight: 600">Верифікація особистості</div>
            <div style="width: 100%;margin-left: 10%;font-size: 10px;margin-top: 3%">Перш ніж бронювати або приймати гостей на Look'in, необхідно виконати цей крок.</div>
            <div class="informati" style="margin-top: 3%">
                <button style=" all: unset;margin-top: 2%;margin-bottom: 2%;margin-left: 30%;font-weight: 600">Верифікація</button>
            </div>
        </div>
        <div class="div_information" style="margin-top: 4%">
            <div style="font-size: 14px;margin-left: 10%;font-weight: 600">Час створити свій профіль</div>
            <div style="width: 65%;margin-left: 10%;font-size: 10px;margin-top: 3%">Ваш профіль на Look'in є важливою складовою кожного бронювання. </div>
            <div style="width: 65%;margin-left: 10%;font-size: 10px;margin-top: 3%">Створіть профіль, щоб інші господарі та гості могли більше про вас дізнатися. </div>
            <button class="button" style="margin-left: 25%;margin-top: 3%">Створити профіль</button>
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
