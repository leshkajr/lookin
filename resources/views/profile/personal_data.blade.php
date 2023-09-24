@extends('layouts.master')
@section('title', 'Search for new experiences')
@section('header')
    <header class="main-header">
        @include('layouts.header-2')
    </header>
@stop
@section('content')
    <main>
       <div class="d-flex flex-column" style="margin-left: 10%;margin-top: 5%">
          <div class="text-header" style="margin-left: 1%">Особисті дані</div>
           <div class="d-flex flex-row gap-1" style="margin-left: 1%" >
               <div class="account-text">Шишова Ольга,</div>
               <div>ivan.pashko1996@gmail.com</div>
               <div style="text-decoration: underline"><a href="#" >Перейти до профылю</a></div>
           </div>
           <div class="personal_block">
               <div class="personal_text_header">Ім’я згідно з документами</div>
               <div class="personal_text_description">Це має бути ім’я, зазначене у вашому проїзному документі (посвідченні водія або паспорті).</div>
               <div class="personal_div">
                   <input type="text" value="Ольга" class="input_text" style="font-size: 24px;padding-top: 0.5%;padding-left: 1%">
               </div>
               <div class="personal_div">
                   <input type="text" value="Шишова" class="input_text" style="font-size: 24px;padding-top: 0.5%;padding-left: 1%">
               </div>
               <div class="div_button">
                   <button style="font-size: 20px;margin-top: 1.5%;margin-left: 1%" >Скасувати</button>
                   <button class="button_right">Зберегти</button>
               </div>
           </div>
           <div class="personal_block">
               <div class="personal_text_header">Електронна адреса</div>
               <div class="personal_text_description">Використовуйте адресу, до якої ви завжди матимете доступ.</div>
               <div class="personal_div">
                   <input type="email" value="Shishova123@gmail.com" class="input_text" style="font-size: 24px;padding-top: 0.5%;padding-left: 1%">
               </div>
               <div class="div_button">
                   <button style="font-size: 20px;margin-top: 1.5%;margin-left: 1%" >Скасувати</button>
                   <button class="button_right">Зберегти</button>
               </div>
           </div>
           <div class="personal_block">
               <div class="personal_text_header">Номер телефону</div>
               <div class="personal_text_description">Додайте номер телефону, щоб підтверджені гості та представники Look'in могли з вами зв’язатися. Ви можете додати інші номери та вибрати їх призначення</div>
               <div class="personal_div">
                   <input type="text" value="(+380) " class="input_text" style="font-size: 24px;padding-top: 0.5%;padding-left: 1%">
               </div>
               <div class="personal_text_description" style="margin-top: 1%">Ми надішлемо вам код для підтвердження номера телефону. Застосовуються стандартні тарифи вашого оператора за надсилання повідомлень і передачу даних.</div>
               <div class="div_button_right">
                   <button class="button_right">Редагувати</button>
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
