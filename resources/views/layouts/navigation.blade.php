<nav x-data="{ open: false }" class="bg-base-100 border-b border-base-200 ">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}">
                        <x-application-logo class="block h-9 w-auto fill-current text-base-content" />
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex text-base-content">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        {{ __('Dashboard') }}
                    </x-nav-link>
                </div>
{{--                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">--}}
{{--                    <x-nav-link :href="route('shifts.index')" :active="request()->routeIs('shifts.index')">--}}
{{--                        {{ __('Shifts') }}--}}
{{--                    </x-nav-link>--}}
{{--                </div>--}}
{{--                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">--}}
{{--                    <x-nav-link :href="route('invoices.index')" :active="request()->routeIs('invoices.index')">--}}
{{--                        {{ __('Invoices') }}--}}
{{--                    </x-nav-link>--}}
{{--                </div>--}}
            </div>

            <div class="flex">
                <div class="dropdown mb-72">
                    <div tabindex="0" role="button" class="btn m-2">
                        Theme
                        <svg width="12px" height="12px" class="h-2 w-2 fill-current opacity-60 inline-block" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 2048 2048"><path d="M1799 349l242 241-1017 1017L7 590l242-241 775 775 775-775z"></path></svg>
                    </div>
                        <ul tabindex="0" class="dropdown-content z-[1] p-2 shadow-2xl bg-base-300 rounded-box w-52">
                             <li><input type="radio" name="theme-dropdown" class="theme-controller btn btn-sm btn-block btn-ghost justify-start" onchange="updateTheme(this);" aria-label="Default" value="default"/></li>
                             <li><input type="radio" name="theme-dropdown" class="theme-controller btn btn-sm btn-block btn-ghost justify-start" onchange="updateTheme(this);" aria-label="light" value="light"/></li>
                             <li><input type="radio" name="theme-dropdown" class="theme-controller btn btn-sm btn-block btn-ghost justify-start" onchange="updateTheme(this);" aria-label="dark" value="dark"/></li>
                             <li><input type="radio" name="theme-dropdown" class="theme-controller btn btn-sm btn-block btn-ghost justify-start" onchange="updateTheme(this);" aria-label="cupcake" value="cupcake"/></li>
                             <li><input type="radio" name="theme-dropdown" class="theme-controller btn btn-sm btn-block btn-ghost justify-start" onchange="updateTheme(this);" aria-label="bumblebee" value="bumblebee"/></li>
                             <li><input type="radio" name="theme-dropdown" class="theme-controller btn btn-sm btn-block btn-ghost justify-start" onchange="updateTheme(this);" aria-label="emerald" value="emerald"/></li>
                             <li><input type="radio" name="theme-dropdown" class="theme-controller btn btn-sm btn-block btn-ghost justify-start" onchange="updateTheme(this);" aria-label="corporate" value="corporate"/></li>
                             <li><input type="radio" name="theme-dropdown" class="theme-controller btn btn-sm btn-block btn-ghost justify-start" onchange="updateTheme(this);" aria-label="synthwave" value="synthwave"/></li>
                             <li><input type="radio" name="theme-dropdown" class="theme-controller btn btn-sm btn-block btn-ghost justify-start" onchange="updateTheme(this);" aria-label="retro" value="retro"/></li>
                             <li><input type="radio" name="theme-dropdown" class="theme-controller btn btn-sm btn-block btn-ghost justify-start" onchange="updateTheme(this);" aria-label="cyberpunk" value="cyberpunk"/></li>
                             <li><input type="radio" name="theme-dropdown" class="theme-controller btn btn-sm btn-block btn-ghost justify-start" onchange="updateTheme(this);" aria-label="valentine" value="valentine"/></li>
                             <li><input type="radio" name="theme-dropdown" class="theme-controller btn btn-sm btn-block btn-ghost justify-start" onchange="updateTheme(this);" aria-label="valentine" value="valentine"/></li>
                             <li><input type="radio" name="theme-dropdown" class="theme-controller btn btn-sm btn-block btn-ghost justify-start" onchange="updateTheme(this);" aria-label="garden" value="garden"/></li>
                             <li><input type="radio" name="theme-dropdown" class="theme-controller btn btn-sm btn-block btn-ghost justify-start" onchange="updateTheme(this);" aria-label="forest" value="forest"/></li>
                             <li><input type="radio" name="theme-dropdown" class="theme-controller btn btn-sm btn-block btn-ghost justify-start" onchange="updateTheme(this);" aria-label="aqua" value="aqua"/></li>
                             <li><input type="radio" name="theme-dropdown" class="theme-controller btn btn-sm btn-block btn-ghost justify-start" onchange="updateTheme(this);" aria-label="lofi" value="lofi"/></li>
                             <li><input type="radio" name="theme-dropdown" class="theme-controller btn btn-sm btn-block btn-ghost justify-start" onchange="updateTheme(this);" aria-label="pastel" value="pastel"/></li>
                             <li><input type="radio" name="theme-dropdown" class="theme-controller btn btn-sm btn-block btn-ghost justify-start" onchange="updateTheme(this);" aria-label="fnatasy" value="fnatasy"/></li>
                             <li><input type="radio" name="theme-dropdown" class="theme-controller btn btn-sm btn-block btn-ghost justify-start" onchange="updateTheme(this);" aria-label="wireframe" value="wireframe"/></li>
                             <li><input type="radio" name="theme-dropdown" class="theme-controller btn btn-sm btn-block btn-ghost justify-start" onchange="updateTheme(this);" aria-label="black" value="black"/></li>
                             <li><input type="radio" name="theme-dropdown" class="theme-controller btn btn-sm btn-block btn-ghost justify-start" onchange="updateTheme(this);" aria-label="luxury" value="luxury"/></li>
                             <li><input type="radio" name="theme-dropdown" class="theme-controller btn btn-sm btn-block btn-ghost justify-start" onchange="updateTheme(this);" aria-label="dracula" value="dracula"/></li>
                             <li><input type="radio" name="theme-dropdown" class="theme-controller btn btn-sm btn-block btn-ghost justify-start" onchange="updateTheme(this);" aria-label="cmyk" value="cmyk"/></li>
                             <li><input type="radio" name="theme-dropdown" class="theme-controller btn btn-sm btn-block btn-ghost justify-start" onchange="updateTheme(this);" aria-label="autumn" value="autumn"/></li>
                             <li><input type="radio" name="theme-dropdown" class="theme-controller btn btn-sm btn-block btn-ghost justify-start" onchange="updateTheme(this);" aria-label="business" value="business"/></li>
                             <li><input type="radio" name="theme-dropdown" class="theme-controller btn btn-sm btn-block btn-ghost justify-start" onchange="updateTheme(this);" aria-label="acid" value="acid"/></li>
                             <li><input type="radio" name="theme-dropdown" class="theme-controller btn btn-sm btn-block btn-ghost justify-start" onchange="updateTheme(this);" aria-label="lemonade" value="lemonade"/></li>
                             <li><input type="radio" name="theme-dropdown" class="theme-controller btn btn-sm btn-block btn-ghost justify-start" onchange="updateTheme(this);" aria-label="night" value="night"/></li>
                             <li><input type="radio" name="theme-dropdown" class="theme-controller btn btn-sm btn-block btn-ghost justify-start" onchange="updateTheme(this);" aria-label="coffee" value="coffee"/></li>
                             <li><input type="radio" name="theme-dropdown" class="theme-controller btn btn-sm btn-block btn-ghost justify-start" onchange="updateTheme(this);" aria-label="winter" value="winter"/></li>
                             <li><input type="radio" name="theme-dropdown" class="theme-controller btn btn-sm btn-block btn-ghost justify-start" onchange="updateTheme(this);" aria-label="dim" value="dim"/></li>
                             <li><input type="radio" name="theme-dropdown" class="theme-controller btn btn-sm btn-block btn-ghost justify-start" onchange="updateTheme(this);" aria-label="nord" value="nord"/></li>
                             <li><input type="radio" name="theme-dropdown" class="theme-controller btn btn-sm btn-block btn-ghost justify-start" onchange="updateTheme(this);" aria-label="winterwinter" value="winterwinter"/></li>
                        </ul>
                    </div>
            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ms-6">

                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="btn">
                            <div>{{ Auth::user()->name }}</div>

                            <div class="ms-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-dropdown-link>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>
                </div>

            <!-- Hamburger -->
            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-base hover:text-neutral-content  hover:bg-neutral  focus:outline-none focus:bg-gray-100 dark:focus:bg-gray-900 focus:text-gray-500 dark:focus:text-gray-400 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-base-200 ">
            <div class="px-4">
                <div class="font-medium text-base text-gray-800 dark:text-gray-200">{{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
            </div>

            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('profile.edit')">
                    {{ __('Profile') }}
                </x-responsive-nav-link>

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>

    @push('script')
        <script>
            function updateTheme(item) {
                const elem = document.getElementById('body');

                localStorage.setItem("data-theme", item.value);
                elem.setAttribute('data-theme', item.value)

            }
        </script>

    @endpush
</nav>
