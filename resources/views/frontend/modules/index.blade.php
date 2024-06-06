<x-guest-layout>

<div class=" max-w-screen-2xl mx-auto">

    <div class="text-center">
        <h2 class="text-7xl my-8">Keuzenmodules</h2>
        <p class="mb-16">Hier een overzicht van alle keuzemodules die deze periode worden aangeboden</p>
    </div>

</div>
<div class="bg-[#F4F2EF]">
    <div class=" max-w-screen-2xl mx-auto ">

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-4 p-4 ">
            @foreach($modules as $module)
                <x-module.card :module="$module"/>

            @endforeach
        </div>

    </div>
</div>

</x-guest-layout>
