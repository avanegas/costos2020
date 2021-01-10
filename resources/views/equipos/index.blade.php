<x-app-layout>
    <div class="container py-8">
        <div>
            <h1 class="text-2xl font-black text-gray-900 pb-6 px-6 md:px-12">
                Equipos.
            </h1>
        </div>

        <div>
            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                <div class="flex bg-white px-4 py-3 border-t border-gray-200 sm:px-6">
                    <input class="form-input ronded-md shadow-sm mt-1 block w-full"  type="text" placeholder="Buscar...">
                    <div class="form-input ronded-md shadow-sm mt-1 ml-6 block">
                        <select  class="outline-none text-gray-500 text-sm">
                            <option value="5">5 por página</option>
                            <option value="50">50 por página</option>
                            <option value="100">100 por página</option>
                        </select>
                    </div>
                    <button  class="form-input rounded-md shadow-sm mt-1 ml-6 block">X</button>
                    <button  class="form-input rounded-md shadow-sm mt-1 ml-6 block bg-green-500 hover:bg-green-700 text-white font-bold"> Create </button>
                </div>

                    <div class="bg-green-500 border-2 border-green-600 rounded-b mb-2 py-3 px-3">
                        <div>
                            <h1 class="text-white font-bold">INFO</h1>
                        </div>
                    </div>

                    <div class="bg-red-500 border-2 border-red-600 rounded-b mb-2 py-3 px-3">
                        <div>
                            <h1 class="text-white font-bold">DELETE</h1>
                        </div>
                    </div>

                <div class="px-4">

                <table class="min-w-full divide-y divide-gray-200">
                    <thead>
                    <tr>
                        <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Grupo</th>
                        <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Descripción</th>
                        <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Marca</th>
                        <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Tipo</th>
                        <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Tarifa</th>
                        <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Fecha</th>
                        <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Proveedor</th>
                        <th class="px-6 py-3 bg-gray-50">Action</th>
                    </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                    @foreach($equipos as $key=>$equipo)
                        <tr>
                            <td class="px-2 py-3">{{ $equipo->grupo_equipo->name }}</td>
                            <td>{{ $equipo->name}}</td>
                            <td>{{ $equipo->marca }}</td>
                            <td>{{ $equipo->tipo }}</td>
                            <td>{{ $equipo->tarifa }}</td>
                            <td>{{ $equipo->updated_at->format('dMY') }}</td>
                            <td> El Artesano </td>
                            <td>
                                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-4 rounded">
                                    Edit
                                </button>
                                <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-4 rounded">
                                    Delete
                                </button>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <div class="mt-4 px-4">
                    {{$equipos->links()}}
                </div>

                <div class="bg-white px-4 py-3 border-t border-gray-200 text-gray-500 sm:px-6">
                    no hay resultados para la busqueda ......search
                </div>

                </div>
            </div>

            <div class="flex justify-center mt-4 sm:items-center sm:justify-between px-4">
                <div class="text-center text-sm text-gray-500 sm:text-left">
                    <div class="flex items-center">
                        <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor" class="-mt-px w-5 h-5 text-gray-400">
                            <path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>
                        <a href="https://laravel.bigcartel.com" class="ml-1 underline">
                            Venta
                        </a>
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="ml-4 -mt-px w-5 h-5 text-gray-400">
                            <path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                        </svg>
                        <a href="https://github.com/sponsors/taylorotwell" class="ml-1 underline">
                            Apoyo
                        </a>
                    </div>
                </div>
                <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                    Compilación v{{ Illuminate\Foundation\Application::VERSION }}
                </div>
            </div>

        </div>

    </div>
</x-app-layout>
