<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl  text-base-content leading-tight">
            {{ __('Shifts') }}
        </h2>
    </x-slot>
    <div class="py-12">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-base-100 overflow-hidden shadow-sm sm:rounded-lg">

                <div class="ml-8 mt-8">
                    <a href="{{route('module.create')}}">
                        <button class="btn btn-accent"> nieuwe keuze module</button>
                    </a>
                </div>
                <div class="p-6 text-base-content">


                    <div class="overflow-x-auto">
                        <table class="table">
                            <!-- head -->
                            <thead>
                            <tr>
                                <th>naam</th>
                                <th>categorie</th>
                                <th>beschikbaare plekken</th>
                                <th>totaale aantal plekken</th>

                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            <!-- row 1 -->
                            @foreach($modules as $module)
                                <tr>
                                    <td>

                                        {{$module->title}}
                                    </td>
                                    <td>{{$module->category->name}}</td>
                                    <td>
                                        {{ $module->available_spots }}
                                    </td>
                                    <th>

                                        {{ $module->total_spots }}

                                    </th>
                                    <th>
                                        <a href="{{route('modules.edit', $module->id)}}">
                                            <button class="btn btn-ghost btn-xs">details</button>
                                        </a>

                                        <button class=" btn btn-ghost btn-xs text-error"
                                                onclick="my_modal_1.showModal()">verwijderen
                                        </button>
                                        <dialog id="my_modal_1" class="modal">
                                            <div class="modal-box">
                                                <h3 class="font-bold text-lg">Hello!</h3>
                                                <p class="py-4">weet je zeker dat je deze shift wilt verwijderen</p>

                                                {{html()->form('delete')->route('module.destroy', $module->id)->open()}}

                                                {{ html()->submit('verwijderen')->class('btn btn-error') }}
                                                {{ html()->form()->close() }}
                                                <div class="modal-action">
                                                    <form method="dialog">
                                                        <!-- if there is a button in form, it will close the modal -->
                                                        <button class="btn">Close</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </dialog>

                                    </th>

                                </tr>
                            @endforeach
                        </table>

                    </div>
                </div>
            </div>
        </div>

    </div>


</x-app-layout>
