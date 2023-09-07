<x-guest-layout>
    <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
        @lang('auth.text_forgot_password')
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')"/>

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email">
                @lang('auth.email')
            </x-input-label>
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required
                          autofocus/>
            <x-input-error :messages="$errors->get('email')" class="mt-2"/>
        </div>

        <div class="d-flex flex-row items-center mt-4">
            <div class="flex items-center justify-start">
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                   href="{{ URL::previous() }}">
                    @lang('auth.back')
                </a>
            </div>
            <div class="flex items-center justify-end w-100">
                <x-primary-button>
                    @lang('auth.password_reset')
                </x-primary-button>
            </div>
        </div>
    </form>

    @include('layouts.languages-list')
</x-guest-layout>
