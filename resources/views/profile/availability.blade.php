@extends('layouts.master')
@section('title', 'Search for new experiences')
@section('header')
    <header class="main-header">
        @include('layouts.header-2')
    </header>
@stop
@section('content')
  <main class="d-flex flex-column">

         <div class="availabilitycount">
             <div class="count">
                 <div style="font-size: 30px; font-weight: 600">ціни</div>
                 <div class="headercount" style="margin-top: 10%">
                     <div class="div_lefts">
                         <div class="d-flex flex-row">
                             <div style="font-size: 20px; font-weight: 500; padding-top: 2%;padding-left: 5%">Базова ціна</div>
                             <div style="font-size: 18px;font-weight: 500;padding-left: 40%;padding-top: 2%;text-decoration: underline">USD</div>
                         </div>
                         <div class="d-flex flex-row" >
                             <div style="font-size: 18px; font-weight: 400; padding-top: 2%;padding-left: 5%"> за ніч</div>
                             <div style="font-size: 18px;font-weight: 500;padding-left: 60%;padding-top: 2%;">65$</div>
                         </div>
                     </div>
                     <div class="div_lefts">
                         <div class="d-flex flex-row">
                             <div class="justify-content-center" style="font-size: 14px;font-weight: 400;padding-top: 5%;padding-left: 5%;padding-bottom: 4%">Спеціальна ціна на вихідні</div>
                             <div class="justify-content-center" style="font-size: 14px;font-weight: 400;padding-top: 5%;padding-bottom: 4%;text-decoration: underline;padding-left: 20%">Додати</div>
                         </div>
                     </div>
                     <div class="div_lefts">
                         <div class="d-flex flex-row">
                             <div class="justify-content-center" style="font-size: 14px;font-weight: 400;padding-top: 5%;padding-left: 5%;padding-bottom: 4%">Інтелектуальне ціноутворення</div>
                             <div class="avilachex" style="margin-left: 15%;margin-top: 3%"></div>
                         </div>
                     </div>
                 </div>
                 <div style="font-size: 30px; font-weight: 600; margin-top: 20%">Додаткові збори</div>
                 <div class="headercount" style="margin-top: 5%">
                     <div style="font-size: 20px; font-weight: 500; padding-top: 3%; padding-left: 12%">Збори</div>
                     <div style="font-size: 20px; font-weight: 300; padding-top: 3%; padding-left: 12%;width: 90%">Прибирання, домашні тварини, додаткові гості</div>
                 </div>
                 <div style="font-size: 30px; font-weight: 600; margin-top: 7%">Доступність дат для бронювання</div>
                 <div style="font-size: 24px; font-weight: 500;margin-top: 5%;margin-right: 30px">Тривалість подорожі</div>
                 <div class="headercount" style="margin-top: 5%">
                  <div class="div_lefts">
                      <div class="d-flex justify-content-sm-between">
                          <div style="font-size: 16px;padding: 4%;width: 50%">Мінімальна кількість ночей</div>
                          <div style="margin-right: 30px;margin-top: 7%">
                              <button class="button_ava" style="margin-right: 20px">-</button>
                              <span style="margin-right: 10px; font-size: 20px">1</span>
                              <button  class="button_ava">+</button>
                          </div>
                      </div>
                  </div>
                     <div class="div_lefts">
                         <div class="d-flex justify-content-sm-between">
                             <div style="font-size: 16px;padding: 4%;width: 50%">Максимальна кількість ночей</div>
                             <div style="margin-right: 30px;margin-top: 7%">
                                 <button class="button_ava">-</button>
                                 <span style="font-size: 20px">365</span>
                                 <button style="" class="button_ava">+</button>
                             </div>
                         </div>
                     </div>
                     <div class="div_lefts">
                         <div class="justify-content-center" style="font-size: 14px;font-weight: 400;padding-top: 5%;padding-left: 5%;padding-bottom: 4%">Спеціальна тривалість перебування</div>
                     </div>
                 </div>
             </div>
             <div class="count">
                 <div style="font-size: 30px; font-weight: 600">знижки</div>
                 <div style="font-size: 20px; font-weight: 400;padding-top: 2% ">Відкоригуйте ціни, щоб залучити більше гостей.</div>
                 <div class="headercount" style="margin-top: 2%">
                     <div class="div_lefts">
                         <div class="d-flex flex-row">
                             <div style="font-size: 20px; font-weight: 500; padding-top: 2%;padding-left: 5%">За тиждень </div>
                             <div style="font-size: 18px;font-weight: 500;padding-left: 40%;padding-top: 2%;">10%</div>
                         </div>
                         <div style="padding-left: 5%;padding-top: 2%; font-weight: 400;font-size: 16px">На 7 ночей і більше</div>
                         <div style="padding-left: 5%;padding-top: 2%; font-weight: 400;font-size: 16px">Середня ціна за тиждень: 403$ </div>
                     </div>
                     <div class="div_lefts">
                         <div class="d-flex flex-row">
                             <div style="font-size: 20px; font-weight: 500; padding-top: 2%;padding-left: 5%">За місяць  </div>
                             <div style="font-size: 18px;font-weight: 500;padding-left: 50%;padding-top: 2%;">15%</div>
                         </div>
                         <div style="padding-left: 5%;padding-top: 2%; font-weight: 400;font-size: 16px">За 28 ночей і більше</div>
                         <div style="padding-left: 5%;padding-top: 2%; font-weight: 400;font-size: 16px">Середня ціна за місяць: 1 632$ </div>
                     </div>
                     <div class="div_lefts">
                         <div style="padding-left: 5%;padding-top: 2%; font-weight: 600;font-size: 20px">Більше знижок</div>
                         <div style="padding-left: 5%;padding-top: 2%; font-weight: 400;font-size: 16px">Завчасне бронювання, більше знижок</div>
                     </div>
                 </div>
                <div style="margin-top: 67%">
                    <div style="font-size: 24px; font-weight: 500;margin-top: 5%;margin-right: 30px">Доступність дат для бронювання</div>
                    <div class="headercount" style="margin-top: 5%">
                        <div class="div_lefts">
                            <div class="d-flex flex-row">
                                <div style="margin: 4%">
                                    <div style="font-size: 16px;font-weight: 400">Завчасне повідомлення</div>
                                    <div style="font-size: 16px;font-weight: 600;padding-top: 2%">Щонайменше 1 день</div>
                                </div>
                                <div style="margin-left: 20%;margin-top: 10%">
                                    <svg width="30" height="16" viewBox="0 0 30 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M28 2L15 14L2 2" stroke="#8B8B8B" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>

                                </div>
                            </div>
                        </div>
                        <div class="div_lefts">
                            <div class="d-flex flex-row">
                                <div style="margin: 4%">
                                    <div style="font-size: 16px;font-weight: 400">Час на підготовку</div>
                                    <div style="font-size: 16px;font-weight: 600;padding-top: 2%">Немає</div>
                                </div>
                                <div style="margin-left: 35%;margin-top: 10%">
                                    <svg width="30" height="16" viewBox="0 0 30 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M28 2L15 14L2 2" stroke="#8B8B8B" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>

                                </div>
                            </div>
                        </div>
                        <div class="div_lefts">
                            <div class="d-flex flex-row">
                                <div style="margin: 4%">
                                    <div style="font-size: 16px;font-weight: 400">Вікно вільних дат</div>
                                    <div style="font-size: 16px;font-weight: 600;padding-top: 2%">За 9 місяців наперед</div>
                                </div>
                                <div style="margin-left: 27%;margin-top: 10%">
                                    <svg width="30" height="16" viewBox="0 0 30 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M28 2L15 14L2 2" stroke="#8B8B8B" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>

                                </div>
                            </div>
                        </div>
                        <div class="div_lefts">
                            <div class="d-flex flex-row">
                                <div style="margin: 4%">
                                    <div style="font-size: 14px;font-weight: 400;width: 100%;">Більне налаштувань вільних дат</div>
                                    <div style="font-size: 14px;font-weight: 400;width: 100%;margin-top: 3%">Обмеження щодо днів прибуття та виїзду</div>

                                </div>

                            </div>
                        </div>
                        </div>


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
