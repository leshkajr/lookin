<ul class="header-menu flex-column justify-content-center align-items-left" id="header-menu">
    <li class="header-menu-main-item"><a href="{{ route('account.notification') }}">@lang("main.notification")</a></li>
    <li class="header-menu-main-item">@lang("main.travels")</li>
    <li class="header-menu-main-item"><a href="{{ route('profile.favorite') }}">@lang("main.favorites")</a></li>
    <hr class="header-menu-hr-item">
    @if(App\Models\Listing::where('hostId',Auth::id())->count() === 0)
        <li class="header-menu-secondary-item">
            <a href="{{ route('create-listing.start') }}">@lang("main.offer_your_listing")</a>
        </li>
    @else
        <li class="header-menu-secondary-item">
            <a href="{{ route('host') }}">@lang("main.manage_listings")</a>
        </li>
    @endif

    <li class="header-menu-secondary-item"><a href="{{ route('account') }}">@lang("main.account")</a></li>
    <hr class="header-menu-hr-item">
    <li class="header-menu-secondary-item">
        <svg xmlns="http://www.w3.org/2000/svg" style="margin:-2px 2px 0 3px;" width="13"
             height="13" fill="currentColor" class="bi bi-info-square" viewBox="0 0 16 16">
            <path
                d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
            <path
                d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
        </svg>
        @lang("main.help_center")
    </li>
    <li class="header-menu-secondary-item">
        <form method="POST" action="{{ route('logout') }}" style="margin: 0">
            @csrf
            <x-dropdown-link :href="route('logout')"
                             onclick="event.preventDefault();
                                                this.closest('form').submit();">
                <svg xmlns="http://www.w3.org/2000/svg" style="margin:-2px 2px 0 0;" width="16"
                     height="16"
                     fill="currentColor" class="bi bi-box-arrow-left" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                          d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z"/>
                    <path fill-rule="evenodd"
                          d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z"/>
                </svg>
                @lang("main.log_out")
            </x-dropdown-link>
        </form>
    </li>
</ul>
