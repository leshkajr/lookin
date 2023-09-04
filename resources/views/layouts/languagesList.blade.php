<div class="auth-languages-block d-flex flex-column">
    <div class="auth-language-block">
        <div class="auth-language">
            @foreach($languages as $language)
                @if($language->languageCode === App::getLocale())
                    {{ $language->countryName }}
                    ({{ strtoupper($language->languageCode) }})
                    <button onclick="openMenu('auth-languages')">
                        <svg style="display: inline-block; color:var(--text-color-dark)" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                        </svg>
                    </button>
                @endif
            @endforeach
        </div>
    </div>
    <ul class="auth-languages" id="auth-languages">
        @foreach($languages as $language)
            @if($language->languageCode !== App::getLocale())
                <li><a href="locale/{{ $language->languageCode }}">
                        {{ $language->countryName }}
                        ({{ strtoupper($language->languageCode) }})
                    </a></li>
            @endif
        @endforeach
    </ul>
</div>
