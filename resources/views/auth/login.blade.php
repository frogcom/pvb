<x-guest-layout>
    <div class="max-w-xs mx-auto">

        <h2 class="text-3xl text-center">LOGIN</h2>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
    {{ html()->form()->route('login')->open() }}
        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            {{ html()->input('email')->name('email')->required()->class('input input-bordered w-full mb-4 mt-1 text-base-content')}}
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />
            {{ html()->password('password')->name('password')->required()->class('input input-bordered w-full mb-4 mt-1 text-base-content')}}
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
{{ html()->form()->close() }}
    </div>

</x-guest-layout>
