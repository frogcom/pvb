<x-guest-layout>
    {{ html()->form('POST')->route('register')->open() }}

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            {{ html()->input('name')->name('name')->required()->class('input input-bordered w-full mb-4 mt-1 text-base-content')}}
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            {{ html()->email('email')->name('email')->required()->class('input input-bordered w-full mb-4 mt-1 text-base-content')}}
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            {{ html()->password('password')->name('password')->required()->class('input input-bordered w-full mb-4 mt-1 text-base-content')}}

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            {{ html()->password('password_confirmation')->name('password_confirmation')->required()->class('input input-bordered w-full mb-4 mt-1 text-base-content')}}

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            {{html()->submit('register')->class('ms-4')}}
        </div>
    {{html()->form()->close()}}
</x-guest-layout>
