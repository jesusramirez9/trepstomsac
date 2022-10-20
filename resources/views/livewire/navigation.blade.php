<div>
    <div class=" py-2 md:py-6 hidden md:block">
        <div class=" flex items-center container text-gray-500 justify-between">
            <div class="">
                <x-jet-application-mark class="block h-10 md:h-16 w-auto" />
            </div>
            <div class="flex font-semibold uppercase items-center">
                <a href="/" class="mx-6  hover:underline  hidden lg:block  {{ request()->is('/') ? 'active  text-gray-700 underline' : '' }}">
                    Inicio
                </a>
                <a href="{{ route('conocenos') }}"
                    class="mx-6   hover:underline  hidden lg:block  {{ request()->is('planes') ? 'active  text-gray-700 underline'   : '' }}">
                    planes
                </a>

                <a href="{{ route('servicios') }}"
                    class="mx-6   hover:underline  hidden md:block  {{ request()->is('servicios') ? 'active  text-gray-700 underline' : '' }}">
                    servicios
                </a>
                {{-- <a href="{{ route('noticia.show') }}"
                    class="mx-6   hover:underline  hidden md:block  {{ request()->is('noticia') ? 'active ' : '' }}">
                    blog
                </a> --}}

                <a href="{{ route('contacto') }}"
                    class="mx-6   hover:underline  hidden md:block  {{ request()->is('contactanos') ? 'active text-gray-700 underline' : '' }}">
                    contacto
                </a>
             
            </div>

            <div>
                <div class="flex items-center">

                    <div class="hidden md:block">
                        @auth
                            <x-jet-dropdown align="right" width="48">
                                <x-slot name="trigger">

                                    <button
                                        class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                                        <img class="h-8 w-8 rounded-full object-cover"
                                            src="{{ Auth::user()->profile_photo_url }}"
                                            alt="{{ Auth::user()->name }}" />
                                    </button>

                                </x-slot>

                                <x-slot name="content">
                                    <!-- Account Management -->
                                    <div class="block px-4 py-2 text-xs text-gray-400">
                                        {{ __('Manage Account') }}
                                    </div>

                                    <x-jet-dropdown-link href="{{ route('profile.show') }}">
                                        {{ __('Profile') }}
                                    </x-jet-dropdown-link>

                                    {{-- <x-jet-dropdown-link href="{{ route('orders.index') }}">
                                        Mis ordenes
                                    </x-jet-dropdown-link> --}}

                                    @role('admin')
                                        <x-jet-dropdown-link href="{{ route('admin.users.index') }}">
                                            Administrador
                                        </x-jet-dropdown-link>
                                    @endrole

                                    <div class="border-t border-gray-100"></div>

                                    <!-- Authentication -->
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf

                                        <x-jet-dropdown-link href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                                                                            this.closest('form').submit();">
                                            {{ __('Log Out') }}
                                        </x-jet-dropdown-link>
                                    </form>
                                </x-slot>
                            </x-jet-dropdown>
                        @else
                            <x-jet-dropdown align="right" width="48">

                                <x-slot name="trigger">
                                    <p class="font-semibold cursor-pointer">INICIAR SESIÓN</p>
                                </x-slot>

                                <x-slot name="content">
                                    <x-jet-dropdown-link href="{{ route('login') }}">
                                        {{ __('Login') }}
                                    </x-jet-dropdown-link>

                                    <x-jet-dropdown-link href="{{ route('register') }}">
                                        {{ __('Register') }}
                                    </x-jet-dropdown-link>
                                </x-slot>

                            </x-jet-dropdown>

                        @endauth
                    </div>
                    {{-- <div class="mx-4 hidden md:block text-black ">
                        @livewire('dropdown-cart')
                    </div> --}}
                </div>

            </div>
        </div>
    </div>
    <header class=" w-full top-0 shadow-xl border-gray-500 border-opacity-20 border-b-2 " style="z-index: 900"
        x-data="dropdown()">
        <div class="container flex items-center justify-between md:justify-center pl-6 py-4 md:py-0 enlace ">
           
            <a :class="{'bg-opacity-100 text-white' : open}" x-on:click="show()"
                class="bg-gray-500 shadow-md flex flex-col items-center justify-center md:hidden order-last md:order-first px-2 md:px-4  bg-opacity-25  cursor-pointer font-semibold ">
                <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                    <path class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </a>


       

        </div>



        <nav id="navigation-menu" :class="{'block': open, 'hidden': !open}"
            class="bg-trueGray-700 mt-4 z-10 bg-opacity-25 w-full absolute hidden">

            {{-- menu mobil --}}
            <div class="bg-white h-2/5 overflow-y-auto overflow-x-auto">

                <div class="container bg-gray-200 py-3 mb-2">
                    @livewire('search')
                </div>

                <ul>

                    <li>
                        <a href="/"
                            class="py-2 px-4 text-sm flex items-center {{ request()->is('conocenos') ? 'active text-yellow-500 underline' : '' }}">

                            Inicio
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('conocenos') }}"
                            class="py-2 px-4 text-sm flex items-center {{ request()->is('conocenos') ? 'active text-yellow-500 underline' : '' }}">

                            Conócenos
                        </a>
                    </li>
                    <li>
                        <a href="http://127.0.0.1:8000/categories/tours"
                            class="py-2 px-4 text-sm flex items-center {{ request()->is('categories/*') ? 'active text-yellow-500 underline' : '' }}">

                            Tours
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('servicios') }}"
                            class="py-2 px-4 text-sm flex items-center {{ request()->is('servicios') ? 'active text-yellow-500 underline' : '' }}">

                            Servicios
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('noticia.show') }}" class="py-2 px-4 text-sm flex items-center">

                            Galería
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('ventamayor') }}" class="py-2 px-4 text-sm flex items-center">

                            Tour privado
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('contacto') }}" class="py-2 px-4 text-sm flex items-center">

                            Escríbenos
                        </a>
                    </li>

                </ul>

            </div>
        </nav>
    </header>

    @push('script')
    @endpush
</div>
