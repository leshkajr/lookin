@extends('layouts.master')
@section('title', 'Search for new experiences')
@section('header')
    <header class="main-header">
        @include('layouts.header-2')
    </header>
@stop
@section('content')
    <main class="d-flex flex-column align-items-center justify-content-center">
        <div class="d-flex flex-column" style="margin-top: 3%; width: 90%">
            <div class="text-header" style="margin-left: 2%">@lang('personal_data.Personal')</div>
            <div class="d-flex flex-row gap-1" style="margin-left: 2%">
                <div class="account-text">{{$user->name}},</div>
                <div>{{$user->email}}</div>
                <div style="text-decoration: underline"><a href="#">@lang('personal_data.profile')</a></div>
            </div>
            <div style="margin-top: 3%">
                <div class="personal_block">
                        <div class="personal_text_header">@lang('personal_data.Name_according')</div>
                        <div class="personal_text_description">@lang('personal_data.name_passport')</div>
                        <div class="personal_div">
                            {{--                            {{ Lang::get('personal_date.name') }}--}}
                            <input type="text" placeholder="@lang('personal_data.name')" class="input_text"
                                   @if(isset($user->name)) value="{{$user->name}}" @endif id="name" readonly>
                        </div>
                        <div class="personal_div">
                            <input type="text" placeholder="@lang('personal_data.last_name')" class="input_text"
                                   @if(isset($user->lastName)) value="{{$user->lastName}}" @endif id="lastname" readonly>
                        </div>
                        <div class="div_button">
                            <button style="font-size: 20px;font-weight: 500;display: none" onclick="hideButtons('name',this)"
                            >@lang('personal_data.Cancel')</button>
                            <button class="button button_right" style="display: none"
                                    onclick="changePropertyUser({{$user->id}},
                                    'name',document.getElementById('name').value + ';' + document.getElementById('lastname').value,
                                     this);"
                            >@lang('personal_data.save')</button>
                            <button style="font-size: 20px;font-weight: 500"></button>
                            <button class="button button_right"
                            onclick="showSave('name',this)"
                            >@lang('personal_data.edit')</button>
                        </div>
                </div>
                <div class="personal_block">
                        <div class="personal_text_header">@lang('personal_data.email')</div>
                        <div class="personal_text_description">@lang('personal_data.use_address')</div>
                        <div class="personal_div">
                            <input type="email" placeholder="@lang('personal_data.Your_email')" readonly class="input_text" id="email_input"
                                   @if(isset($user->email)) value="{{$user->email}}" @endif>
                        </div>
                        <div class="div_button">
                            <button style="font-size: 20px;font-weight: 500; display: none" id="email_cancel" onclick="hideButtons('email',this)" >@lang('personal_data.Cancel')</button>
                            <button class="button button_right" style="display: none" id="email"
                                    onclick="changePropertyUser({{$user->id}},
                                    'email',document.getElementById('email_input').value,this);">@lang('personal_data.save')</button>
                            <button style="font-size: 20px;font-weight: 500"></button>
                            <button class=" button button_right" style="float: right" name="email" onclick="showSave('email',this)" >@lang('personal_data.edit')</button>
                        </div>

                </div>

                <div class="personal_block">

                        <div class="personal_text_header">@lang('personal_data.phone')</div>
                        <div class="personal_text_description">@lang('personal_data.add_phone')</div>
                        <div class="personal_divs">
                            <input type="text" placeholder="(+380)" class="input_text" id="input_phone" readonly
                                   @if(isset($user->numberPhone)) value="{{$user->numberPhone}}" @endif>
                        </div>
{{--                        <div class="personal_text_description"--}}
{{--                             style="margin-top: 1%">@lang('personal_data.will_send')</div>--}}
                        <div class="div_button">
                            <button style="font-size: 20px;font-weight: 500;display: none" id="cansel_phone" onclick="hideButtons('phone',this)">@lang('personal_data.Cancel')</button>
                            <button class="button button_right" style="display: none" id="phone"
                            onclick="changePropertyUser({{$user->id}},
                            'phone',document.getElementById('input_phone').value,this);"
                            >@lang('personal_data.save')</button>
                            <button style="font-size: 20px;font-weight: 500"></button>
                            <button class="button button_right" onclick="showSave('phone',this)" name="phone">@lang('personal_data.edit')</button>
                        </div>
                </div>

                <div class="personal_block">
                    <form>
                        <div class="personal_text_header">@lang('personal_data.State_ID')</div>
                        <div class="personal_divs">
                            <div class="div_button d-flex flex-row align-items-center justify-content-center"
                                 style="padding: 1% 0;">
                                <div class="personal_text_description"
                                     style="width: 94%; margin:0; padding: 0;"
                                     id="name_document_photo">@lang('personal_data.add_photo')</div>
                                <label for="photo">
                                    <svg width="30" height="30" viewBox="0 0 40 41" fill="none"
                                         xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <rect y="0.865601" width="40" height="40" fill="url(#pattern0)"/>
                                        <defs>
                                            <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1"
                                                     height="1">
                                                <use xlink:href="#image0_702_91" transform="scale(0.00195312)"/>
                                            </pattern>
                                            <image id="image0_702_91" width="512" height="512"
                                                   xlink:href="data:image/png;base64,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"/>
                                        </defs>
                                    </svg>

                                </label>
                                <input type="file" id="photo" style="display: none;"
                                       onchange="
                                        let text = document.getElementById('name_document_photo');
                                        if(value !== null)
                                            text.innerText = this.value.substring(12);
                                      ">
                            </div>
                        </div>

                        <div class="d-flex flex-row justify-content-end"
                             style="margin-top: 2%">
                            <button class="button button_right" style="margin-bottom: 1%">@lang('personal_data.save')</button>
                        </div>
                    </form>
                </div>
                <div class="personal_block">
                        <div class="personal_text_header">@lang('personal_data.Address')</div>
                        <div class="personal_text_description">@lang('personal_data.permanent_address')</div>
                        <div class="d-flex flex-column">
                          <div class="input_city">
                              <div class="personal_divs">
                                  <input type="text" readonly placeholder="@lang('personal_data.Country')" class="input_text">
                              </div>
                              <div class="personal_divs">
                                  <input type="text" readonly placeholder="@lang('personal_data.City')" class="input_text">
                              </div>
                              <div class="personal_divs">
                                  <input type="text" readonly placeholder="@lang('personal_data.Street')" class="input_text">
                              </div>
                              <div class="personal_divs">
                                  <input type="text" readonly  placeholder="@lang('personal_data.index')" class="input_text">
                              </div>
                              <div class="personal_divs">
                                  <input type="text" readonly placeholder="@lang('personal_data.State')" class="input_text">
                              </div>
                          </div>
                        </div>
                        <div class="div_button">
                            <button style="font-size: 20px;font-weight: 500;display: none;" id="cansel_city">@lang('personal_data.Cancel')</button>
                            <button class="button button_right" style="display: none" id="save_city">@lang('personal_data.save')</button>
                            <button style="font-size: 20px;font-weight: 500"></button>
                            <button class="button button_right" name="address">@lang('personal_data.edit')</button>
                        </div>
                </div>
{{--                <div class="personal_block">--}}
{{--                    <form>--}}
{{--                        <div class="personal_text_header">@lang('personal_data.Contact')</div>--}}
{{--                        <div class="personal_text_description">@lang('personal_data.reliable_contact')</div>--}}
{{--                        <div class="d-flex flex-column">--}}
{{--                            <div class="personal_divs">--}}
{{--                                <input type="number" placeholder="(+380)" class="input_text">--}}
{{--                            </div>--}}
{{--                            <div class="personal_divs">--}}
{{--                                <input type="text" placeholder="@lang('personal_data.First')" class="input_text">--}}
{{--                            </div>--}}
{{--                            <div class="personal_divs">--}}
{{--                                <input type="email" placeholder="@lang('personal_data.email')" class="input_text">--}}
{{--                            </div>--}}

{{--                        </div>--}}
{{--                        <div class="div_button">--}}
{{--                            <button style="font-size: 20px;font-weight: 500">@lang('personal_data.Cancel')</button>--}}
{{--                            <button class="button button_right">@lang('personal_data.save')</button>--}}
{{--                        </div>--}}
{{--                    </form>--}}
{{--                </div>--}}
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

@section('scripts')
    <script type="text/javascript" src="{{ asset('js/changePropertyUser.js') }}"></script>
@stop
