<nav class="bg-gray-800" x-data="{open: false}">
    <div class="px-2 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="relative flex items-center justify-between h-16">

            <!-- Mobile menu button-->
            <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                <button x-on:click="open = true" class="inline-flex items-center justify-center p-2 text-gray-400 rounded-md hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>

                    <!-- Icon when menu is closed. -->
                    <!-- Heroicon name: menu        Menu open: "hidden", Menu closed: "block" -->

                    <svg class="block w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>

                    <!-- Icon when menu is open. -->
                    <!--  Heroicon name: x      Menu open: "block", Menu closed: "hidden" -->

                    <svg class="hidden w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

            <div class="flex items-center justify-center flex-1 sm:items-stretch sm:justify-start">
                <!-- logotipo -->
                <a href="/" class="flex items-center flex-shrink-0">
                    <img class="block w-auto h-10 lg:hidden" src="{{asset('img/costos_c_op.svg')}}" alt="Costos">
                    <img class="hidden w-auto h-10 lg:block" src="{{asset('img/costos_c_op.svg')}}" alt="Costos">
                </a>

                <!-- menu izquierdo -->
                <div class="hidden sm:block sm:ml-6">
                    <div class="flex space-x-4">
                        <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                        <!--<a href="#" class="px-3 py-2 text-sm font-medium text-white bg-gray-900 rounded-md">Datos</a>-->
                        <div class="relative ml-3" x-data="{open: false}">
                            <div>
                                <button x-on:click="open=true" class="text-sm rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white" id="datos-menu" aria-haspopup="true">
                                    <span class="sr-only">Open</span>
                                    <p class="px-3 py-2 text-sm font-medium text-gray-300 rounded-md hover:bg-gray-700 hover:text-white">Datos</p>
                                </button>
                            </div>
                            <div x-show="open" x-on:click.away="open=false" class="absolute w-48 py-1 mt-2 origin-top-right bg-white rounded-md shadow-lg ring-1 ring-black ring-opacity-5" role="menu" aria-orientation="vertical" aria-labelledby="datos-menu">
                                <a href="{{route('equipos')}}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Equipos</a>
                                <a href="{{route('materials')}}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Materiales</a>
                                <a href="{{route('obreros')}}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Obreros</a>
                                <a href="{{route('transportes')}}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Transportes</a>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Generales</a>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Indirectos</a>
                                <a href="{{route('inicio')}}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Indices</a>
                            </div>
                        </div>
                        <a href="{{url('precios')}}" class="px-3 py-2 text-sm font-medium text-gray-300 rounded-md hover:bg-gray-700 hover:text-white">Precios</a>
                        <a href="{{url('proyectos')}}" class="px-3 py-2 text-sm font-medium text-gray-300 rounded-md hover:bg-gray-700 hover:text-white">Proyectos</a>
                        <a href="{{url('ofertas')}}" class="px-3 py-2 text-sm font-medium text-gray-300 rounded-md hover:bg-gray-700 hover:text-white">Ofertas</a>
                        <a href="{{url('servicios')}}" class="px-3 py-2 text-sm font-medium text-gray-300 rounded-md hover:bg-gray-700 hover:text-white">Servicios</a>
                    </div>
                </div>
            </div>

            @auth
                <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
                    <!-- boton notificacion -->
                    <button class="p-1 text-gray-400 bg-gray-800 rounded-full hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white">
                        <span class="sr-only">View notifications</span>
                        <!-- Heroicon name: bell -->
                        <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                        </svg>
                    </button>

                    <!-- Profile dropdown -->
                    <div class="relative ml-3" x-data="{open: false}">
                        <div>
                            <button x-on:click="open=true" class="flex text-sm bg-gray-800 rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white" id="user-menu" aria-haspopup="true">
                                <span class="sr-only">Open user menu</span>
                                <img class="w-8 h-8 rounded-full" src="{{ auth()->user()->profile_photo_url }}" alt="">
                            </button>
                        </div>
                        <!--
                          Profile dropdown panel, show/hide based on dropdown state.
                          Entering: "transition ease-out duration-100"
                              From: "transform opacity-0 scale-95"
                                To: "transform opacity-100 scale-100"
                           Leaving: "transition ease-in duration-75"
                              From: "transform opacity-100 scale-100"
                                To: "transform opacity-0 scale-95"
                        -->
                        <div x-show="open" x-on:click.away="open=false" class="absolute right-0 w-48 py-1 mt-2 origin-top-right bg-white rounded-md shadow-lg ring-1 ring-black ring-opacity-5" role="menu" aria-orientation="vertical" aria-labelledby="user-menu">
                            <a href="{{ route('profile.show') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Su Perfil</a>

                            @can('admin.home')
                                <a href="{{ route('admin.home') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Dashboard</a>
                            @endcan

                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a href="{{ route('logout') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem" onclick="event.preventDefault();this.closest('form').submit();">
                                    Cerrar sesión
                                </a>
                            </form>
                        </div>
                    </div>
                </div>
            @else
                <div>
                    <a href="{{route('login')}}" class="px-3 py-2 text-sm font-medium text-gray-300 rounded-md hover:bg-gray-700 hover:text-white">Iniciar</a>
                    <a href="{{route('register')}}" class="px-3 py-2 text-sm font-medium text-gray-300 rounded-md hover:bg-gray-700 hover:text-white">Registro</a>
                </div>
            @endauth
        </div>
    </div>

    <!-- menu movil -->
    <div class="sm:hidden" x-show="open" x-on:click.away="open=false">
        <div class="px-2 pt-2 pb-3 space-y-1">
            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
            <a href="#" class="block px-3 py-2 text-base font-medium text-white bg-gray-900 rounded-md">Datos</a>

            <div class="relative ml-3" x-data="{open: false}">
                <div>
                    <button x-on:click="open=true" class="text-sm rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white" id="datos-menu" aria-haspopup="true">
                        <span class="sr-only">Open</span>
                        <p class="px-3 py-2 text-sm font-medium text-gray-300 rounded-md hover:bg-gray-700 hover:text-white">Datos</p>
                    </button>
                </div>
                <div x-show="open" x-on:click.away="open=false" class="absolute w-48 py-1 mt-2 origin-top-right bg-white rounded-md shadow-lg ring-1 ring-black ring-opacity-5" role="menu" aria-orientation="vertical" aria-labelledby="datos-menu">
                    <a href="{{route('equipos')}}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Equipos</a>
                    <a href="{{route('materials')}}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Materiales</a>
                    <a href="{{route('obreros')}}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Obreros</a>
                    <a href="{{route('transportes')}}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Transportes</a>
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Generales</a>
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Indirectos</a>
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Indices</a>
                </div>
            </div>

            <a href="{{url('precios')}}" class="block px-3 py-2 text-base font-medium text-gray-300 rounded-md hover:bg-gray-700 hover:text-white">Precios</a>
            <a href="{{url('proyectos')}}" class="block px-3 py-2 text-base font-medium text-gray-300 rounded-md hover:bg-gray-700 hover:text-white">Proyectos</a>
            <a href="{{url('ofertas')}}" class="block px-3 py-2 text-base font-medium text-gray-300 rounded-md hover:bg-gray-700 hover:text-white">Ofertas</a>
            <a href="{{url('servicios')}}" class="block px-3 py-2 text-base font-medium text-gray-300 rounded-md hover:bg-gray-700 hover:text-white">Servicios</a>
        </div>
    </div>
</nav>
