<x-guest-layout>
    <div class="max-w-screen-xl mx-auto mb-12">

        <div class="mt-8">
            <a href="{{ route('keuzemodules.index') }}">

            <i class="fa-solid fa-arrow-left"></i><span>Terug naar overzicht</span>
            </a>
            <h2 class="text-7xl my-8">{{$module->title}}</h2>
        </div>
        <img class="w-full h-auto" src="{{asset('assets/tennis.png')}}" alt="">
        <div class="my-12 lg:flex lg:justify-between ">
            <div class="my-2 text-gray-600">Categorie: <span class="text-base-content">{{$module->category->name}}</span> </div>
            <div class="my-2 text-gray-600">beschikbaare plekken: <span class="text-base-content">{{$module->available_spots}}</span></div>
        </div>
        <div class="ck-content">
            {!! $module->text !!}

        </div>

    </div>

</x-guest-layout>
