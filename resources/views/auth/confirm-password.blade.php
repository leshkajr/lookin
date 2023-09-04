<x-guest-layout>
    <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
        @lang('auth.text_confirm')
    </div>

    <form method="POST" action="{{ route('password.confirm') }}">
        @csrf

        <!-- Password -->
        <div>
            <x-input-label for="password">
                @lang('auth.t_password')
            </x-input-label>

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <div class="flex justify-end mt-4">
            <x-primary-button>
                @lang('auth.confirm')
            </x-primary-button>
        </div>
    </form>

    @include('layouts.languagesList')
</x-guest-layout>
