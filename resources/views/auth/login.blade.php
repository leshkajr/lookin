<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf


        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" class="auth-label"/>
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" class="auth-label"/>

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <button type="submit" class="ml-3 button">
                {{ __('Log in') }}
            </button>
        </div>
    </form>
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

</x-guest-layout>
