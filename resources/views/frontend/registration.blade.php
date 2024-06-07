<x-guest-layout>
    <div class="max-w-xs mx-auto">
        <div class="text-center ">
            <h2 class="text-4xl my-8  break-after-auto ">Aanmelden</h2>
        </div>
        @session('success')
        <div class="p-4 bg-green-100">
            {{ $value }}
        </div>
        @endsession
        @session('error')
        <div class="p-4 bg-red">
            {{ $value }}
        </div>
        @endsession
            {{html()->form('POST')->route('registration.store')->open()}}

                <div>
                    <x-input-label for="name" :value="__('Naam')" />
                    {{html()->input('student_name')->name('student_name')->class('input input-bordered w-full mb-4 mt-1 text-base-content')}}

                    <x-input-error :messages="$errors->get('student_name')" class="mt-2" />
                </div>
            <div>
                <x-input-label for="name" :value="__('Email')" />
                {{html()->input('student_email')->name('student_email')->class('input input-bordered w-full mb-4 mt-1 text-base-content ')}}

                <x-input-error :messages="$errors->get('student_email')" class="mt-2" />
            </div>
            <div>
                <x-input-label for="name" :value="__('Phone')" />
                {{html()->number('student_phone')->name('student_phone')->class('input input-bordered w-full mb-4 mt-1 text-base-content')}}

                <x-input-error :messages="$errors->get('student_phone')" class="mt-2" />
            </div>
            <div>
                <x-input-label for="name" :value="__('keuze module')" />
                {{ html()->select('module_id', $modules->pluck('title', 'id'))->class('select select-bordered w-full  mb-4 mt-1 text-base-content')}}
                <x-input-error :messages="$errors->get('module_id')" class="mt-2 mb-4" />

            </div>


                {{ html()->submit('opslaan')->class('btn btn-primary w-max') }}
                {{html()->form()->close()}}


    </div>


</x-guest-layout>
