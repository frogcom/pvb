<x-guest-layout>
    <div class="max-w-7xl mx-auto">

        <div class="text-center">
            <h2 class="text-7xl my-8">Aanmelden</h2>
            <p class="mb-16">Meld u hier aan voor uw gewenste keuzemodule</p>
        </div>

        <div class="text-center  flex items-center justify-center">
            <div class="flex flex-col">

                {{html()->form('POST')->route('registration.store')->open()}}
                {{html()->input('student_name')->name('student_name')->placeholder('naam')->class('input input-bordered max-w-xs')}}
                {{html()->input('student_email')->name('student_email')->placeholder('email')->class('input input-bordered max-w-xs')}}
                {{html()->number('student_phone')->name('student_phone')->placeholder('telefoonummer')->class('input input-bordered max-w-xs')}}

                {{ html()->select('module_id', $modules->pluck('title', 'id'))->class('select select-bordered w-full max-w-2xl ') }}
                <x-input-error :messages="$errors->get('module_id')" class="mt-2 mb-4" />

                {{ html()->submit('opslaan')->class('btn btn-primary w-max') }}
                {{html()->form()->close()}}
            </div>


        </div>
    </div>


</x-guest-layout>
