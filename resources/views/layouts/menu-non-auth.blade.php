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
