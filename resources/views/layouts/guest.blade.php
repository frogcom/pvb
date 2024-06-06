<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet"/>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased" data-theme="" id="body">


<div class="drawer">
    <input id="my-drawer-3" type="checkbox" class="drawer-toggle"/>
    <div class="drawer-content flex flex-col min-h-screen">
        <!-- Navbar -->
        <div class=" w-full bg-white ">
            <div class="p-0 flex w-full  max-w-screen-xl mx-auto">

                <div class="flex-1 px-2">
                    <a href="{{route('landingpage')}}">
                    <img class="w-32 h-full" src="{{asset('assets/logo.svg')}}" alt="">
                    </a>
                </div>
                <div class="flex-none hidden lg:block my-auto">
                    <ul class="menu menu-horizontal">
                        <!-- Navbar menu content here -->
                        <li><a href="{{route('landingpage')}}">Home</a></li>
                        <li><a href="{{route('keuzemodules.index')}}">keuzemodules</a></li>
                    </ul>
                </div>
                <div class="flex-none lg:hidden p-4">
                    <label for="my-drawer-3" aria-label="open sidebar"
                           class="btn btn-square btn-ghost border border-black border-1.55">

                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                             class="inline-block w-6 h-6 stroke-current">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </label>
                </div>
            </div>
            <div class="flex-1 bg-yellow h-8 lg:h-12 w-full "></div>

        </div>

        <div class="h-full">
            {{ $slot }}
        </div>

        <div class="bg-[#072329] pt-28">
            <div class="max-w-screen-xl mx-auto">

                <div class="flex flex-col lg:flex-row justify-between text-white  justify-items-center">
                    <div class="flex flex-col lg:flex-row text-center">
                        <div class="text-2xl pr-6">
                            Gerrit rietveld uren
                        </div>
                        <div>
                            <h3 class="text-red mb-2 leading-10"> RIETVELDUREN </h3>
                            <div>home</div>
                            <div>keuzemodules</div>
                            <div>contact</div>
                        </div>
                    </div>

                    <div class="flex self-center mt-4 lg:mt-0 lg:self-start">
                        <div class="w-12 h-12 bg-red rounded-full flex mx-2 ">

                            <i class="fa-brands fa-facebook-f rounded-full self-center mx-auto "></i>
                        </div>
                        <div class="w-12 h-12 bg-red rounded-full flex mx-2">

                            <i class="fa-brands fa-facebook-f rounded-full self-center mx-auto "></i>
                        </div>
                        <div class="w-12 h-12 bg-red rounded-full flex mx-2">

                            <i class="fa-brands fa-facebook-f rounded-full self-center mx-auto "></i>
                        </div>
                    </div>

                </div>
                <hr class="h-px my-8 border-0 bg-[#3A3C56] mt-16 mb-8">

                <div class="flex text-gray-400 flex-col md:flex-row mb-8">
                    <div> Copyright © {{ \Carbon\Carbon::now()->format('Y') }} &nbsp; </div>
                    <div> Gerrit Rietveld College</div>

                </div>
            </div>

        </div>

    </div>
    <div class="drawer-side">
        <label for="my-drawer-3" aria-label="close sidebar" class="drawer-overlay"></label>
        <ul class="menu p-4 w-80 min-h-full bg-base-200">
            <!-- Sidebar content here -->
            <li><a href="{{route('landingpage')}}">Home</a></li>
            <li><a href="{{route('keuzemodules.index')}}">keuzemodules</a></li>
        </ul>
    </div>
</div>
</body>
@stack('script')

<script>
    document.addEventListener("DOMContentLoaded", function () {
        //....
        let body = document.getElementById('body')
        body.setAttribute('data-theme', localStorage.getItem('data-theme'))
    });


</script>
</html>
