<x-guest-layout>
    <div class="bg-white">
        <div class="   max-w-screen-xl mx-auto ">
            <div class="flex flex-wrap-reverse">

                <div class=" mx-auto order-1 mt-4">
                    <div class="shadowImage " style="background-image: url('{{asset('assets/header1.png')}}');"></div>
                </div>
                <div class="flex justify-end flex-col mt-48 max-w-lg">
                    <h1 class="text-6xl lg:text-7xl mb-12 text-wrap p-4 ">Wat ga jij kiezen?</h1>
                    <p class="text-base mb-12  p-4">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam cumque enim illo illum libero
                        molestias quae qui reiciendis ullam voluptate! Ad dolores eius inventore perferendis qui recusandae
                        repellendus rerum, sapiente? Adipisci cumque dolor dolorem eius, nostrum nulla omnis perspiciatis rerum
                        tempora? Ab alias aliquid amet autem commodi, corporis cumque doloribus eum in iusto, natus
                    </p>
                    <a href="{{route('keuzemodules.index')}}">
                    <button class="btn btn-error bg-red text-white w-max my-4 ml-4">Naar Keuzemodules</button>
                    </a>
                </div>
            </div>

        </div>
    </div>

    <div class="  bg-base-300 ">
        <div class=" max-w-screen-xl mx-auto">
            <h2 class="text-4xl lg:text-6xl py-16 break-words pl-4"> laaste keuzemodules</h2>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-4 p-4">

                @foreach($modules as $module)
                    <x-module.card :module="$module"/>

                @endforeach
            </div>

            <a href="{{route('keuzemodules.index')}}">
            <button class="btn btn-outline my-20 ml-4"> alle keuzemodules </button>
            </a>
        </div>
    </div>
</x-guest-layout>
