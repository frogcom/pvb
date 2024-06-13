<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-base-content leading-tight">
            {{ __('Shift') }}
        </h2>
    </x-slot>


    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-base-100 overflow-hidden shadow-sm sm:rounded-lg">
                <h2 class="text-2xl font-semibold text-center mt-8">nieuwe shift</h2>

                <div class="p-6 text-base-content content-center justify-center flex">
                    {{ html()->form()->route('modules.store')->acceptsFiles()->open() }}

                    {{ html()->label('title ')}}
                    {{ html()->input()->name('title')->placeholder('titel')->class('input input-bordered w-full max-w-2xl mt-4 ')    }}
                    <x-input-error :messages="$errors->get('titel')" class="mt-2 mb-4"/>
                    {{ html()->label('totaal plekken ')}}
                    {{ html()->number()->name('available_spots')->placeholder('aantal plekken')->class('input input-bordered w-full max-w-2xl mt-4 mb-4')    }}
                    <x-input-error :messages="$errors->get('total_places')" class="mt-2 mb-4"/>
                    {{ html()->label('pagina text ')}}
                    {{ html()->textarea()->name('text')->id('textarea')}}
                    <div>
                        {{  html()->label('categorie')}}
                        {{ html()->select('category_id', $categories->pluck('name', 'id'))->class('select select-bordered w-full max-w-2xl  mt-4') }}
                        <x-input-error :messages="$errors->get('category_id')" class="mt-2 mb-4"/>
                    </div>


                    <div>

                        {{ html()->file()->name('file')->class('file-input file-input-bordered w-full max-w-xs mt-4') }}
                    </div>


                    {{ html()->submit('opslaan')->class('btn btn-primary mt-4') }}
                    {{ html()->form()->close() }}
                </div>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            ClassicEditor
                .create(document.querySelector('#textarea'))
                .catch(error => {
                    console.error(error);
                });
        });
    </script>
</x-app-layout>
