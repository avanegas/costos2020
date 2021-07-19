<x-app-layout>

  <div class="container py-8">
    <div class="flex pb-6 ">
        <p class="flex-initial px-2 text-xl font-bold text-blue-600 md:px-6">
            Servicios de .. .
        </p>

        @foreach ($groups as $group)
            <a href="{{route('servicios.show', $group->id)}}" class="flex-initial bg-gray-300 text-sm text-blue-600 font-semibold px-2 py-1.5 rounded-md hover:bg-gray-200 mr-2"> {{$group->name}}</a>
        @endforeach
    </div>

    <div class="overflow-hidden border-b border-gray-200 shadow sm:rounded-lg">

        <div class="flex px-4 py-3 bg-white border-t border-gray-200 sm:px-6">
            <input class="block w-full mt-1 shadow-sm form-input ronded-md" type="text" placeholder="Buscar...">

            <div class="block mt-1 ml-6 shadow-sm form-input ronded-md">
                <select wire:model="perPage" class="text-sm text-gray-500 outline-none">
                    <option value="10">10 por página</option>
                    <option value="50">50 por página</option>
                    <option value="100">100 por página</option>
                </select>
            </div>

            <button wire:click="clear" class="block mt-1 ml-6 rounded-md shadow-sm form-input">X</button>
        </div>

        <div class="bg-white">
            <div class="px-4">
                @if ($users->count())
                    <table class="min-w-full divide-y divide-gray-200"> <!--<table class="w-full table-fixed">-->
                        <thead>
                            <tr>
                                <th class="px-6 py-3 text-xs font-semibold tracking-wider text-left text-gray-500 uppercase bg-gray-100">GRUPOS</th>
                                <th class="px-6 py-3 text-xs font-semibold tracking-wider text-left text-gray-500 uppercase bg-gray-100">NOMBRES</th>
                                <th class="px-6 py-3 text-xs font-semibold tracking-wider text-left text-gray-500 uppercase bg-gray-100">EMAIL</th>
                                <th class="px-6 py-3 text-xs font-semibold tracking-wider text-left text-gray-500 uppercase bg-gray-100">EXPERIENCIA</th>
                                <th class="px-6 py-3 text-xs font-semibold tracking-wider text-left text-gray-500 uppercase bg-gray-100">DOMICILIO</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                        @foreach($users as $key=>$user)
                            <tr>
                                <a href="#">
                                    <td class="px-2 py-3">{{ $user->groups->pluck('name')->implode(', ') }}</td>
                                    <td><a class="" href="{{url('users', $user)}}">{{ $user->name }}</a></td>
                                    <td>{{ $user->email }}</td>
                                    <td>
                                        <p>{{ $user->profile->bio }}</p>
                                    </td>
                                    <td>
                                        <p>{{ $user->location->country }}</p>
                                        <p class="text-sm">PHONE: {{ $user->profile->phone }}</p>
                                    </td>
                                </a>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                    <div class="mt-4 mb-2">
                        {{$users->links()}}
                    </div>
                @else
                    <div class="px-4 py-3 text-gray-500 bg-white border-t border-gray-200 sm:px-6">
                        No hay resultados para la busqueda "{{$search}}" en la página {{$page}} al mostrar {{$perPage}} proyectos por página.
                    </div>
                @endif
            </div>
        </div>
    </div>
  </div>
</x-app-layout>
