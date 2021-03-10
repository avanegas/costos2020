<x-app-layout>

  <div class="container py-8">
    <div class="flex pb-6 ">
        <p class="flex-initial text-2xl font-black text-gray-900 px-6 md:px-12">
            Servicios.
        </p>

        @foreach ($groups as $group)
            <a href="{{route('servicios.show', $group->id)}}" class="flex-initial bg-gray-300 font-bold px-2 py-1.5 rounded-md hover:bg-gray-200 mr-2"> {{$group->name}}</a>
        @endforeach
    </div>

    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
        <div class="flex bg-white px-4 py-3 border-t border-gray-200 sm:px-6">
            <input class="form-input ronded-md shadow-sm mt-1 block w-full" type="text" placeholder="Buscar...">
            <div class="form-input ronded-md shadow-sm mt-1 ml-6 block">
                <select wire:model="perPage" class="outline-none text-gray-500 text-sm">
                    <option value="10">10 por página</option>
                    <option value="50">50 por página</option>
                    <option value="100">100 por página</option>
                </select>
            </div>
            <button wire:click="clear" class="form-input rounded-md shadow-sm mt-1 ml-6 block">X</button>
        </div>

        <div class="bg-white">
            <div class="px-4">
            @if ($users->count())
                <table class="min-w-full divide-y divide-gray-200"> <!--<table class="table-fixed w-full">-->
                    <thead>
                        <tr>
                            <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">GRUPOS</th>
                            <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">NOMBRES</th>
                            <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">EMAIL</th>
                            <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">EXPERIENCIA</th>
                            <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">DOMICILIO</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                    @foreach($users as $key=>$user)
                        <tr>
                            <a href="#">
                            <td class="px-2 py-3">{{ $user->groups->pluck('name')->implode(', ') }}</td>
                            <td><a class="" href="{{url('users', $user)}}">{{ $user->name }}</a></td>
                            <td>{{ $user->email }}</td>
                            <td><p class="">{{ $user->profile->bio }}</p>
                                <p class="text-sm">PHONE: {{ $user->profile->phone }}</p></td>
                            <td>{{ $user->location->country }}</td>
                            </a>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

                <div class="mt-4 mb-2">
                    {{$users->links()}}
                </div>
            @else
                <div class="bg-white px-4 py-3 border-t border-gray-200 text-gray-500 sm:px-6">
                    No hay resultados para la busqueda "{{$search}}" en la página {{$page}} al mostrar {{$perPage}} proyectos por página.
                </div>
            @endif
            </div>
        </div>
    </div>
  </div>
</x-app-layout>