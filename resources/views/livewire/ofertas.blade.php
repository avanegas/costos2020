<div class="container py-8">
    <div>
        <h1 class="text-2xl font-black text-gray-900 pb-6 px-6 md:px-12">
            Ofertas...<strong class="text-sm"> Con factura y garantía.</strong>
        </h1>
    </div>

    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">

        <div class="flex bg-white px-4 py-3 border-t border-gray-200 sm:px-6">
            <input class="form-input ronded-md shadow-sm mt-1 block w-full" wire:model="search" type="text" placeholder="Buscar...">
            <div class="form-input ronded-md shadow-sm mt-1 ml-6 block">
                <select wire:model="perPage" class="outline-none text-gray-500 text-sm">
                    <option value="9">9 por página</option>
                    <option value="50">50 por página</option>
                    <option value="100">100 por página</option>
                </select>
            </div>
            @if($search !== '')
                <button wire:click="clear" class="form-input rounded-md shadow-sm mt-1 ml-6 block">X</button>
            @endif
        </div>

        <div class="bg-white">
            <div class="px-4">
                @if($ofertas->count())
                    <section class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-3 gap-5">
                        @foreach($ofertas as $key=>$oferta)
                        <div class="rounded overflow-hidden shadow-lg py-2">
                            
                            @if ($oferta->image)
                                <img class="w-full h-80 object-cover object-center rounded-lg shadow-md" src="{{Storage::url($oferta->image->url)}}" alt="">
                            @else
                                <img class="w-full rounded-lg shadow-md" src="https://source.unsplash.com/random/350x350" alt="">
                            @endif

                            <div class="flex items-baseline pt-2">
                                <span class="bg-teal-200 text-teal-800 text-xs px-3 inline-block rounded-full  uppercase font-bold tracking-wide">
                                    New
                                </span>
                                <div class="ml-2 text-gray-600 uppercase text-xs font-semibold tracking-wider">
                                    {{ $oferta->stock }} en stock  &bull; /{{ $oferta->unidad }}
                                </div>
                                <span class="ml-2 px-2 bg-red-200  rounded-full text-red-700 text-x1 font-bold">$ {{ $oferta->precio }}</span> 
                            </div>
                            
                            <div class="px-2 py-4">
                                <div class="font-bold uppercase mb-2">{{ $oferta->name }}</div>
                                <p class="text-gray-700 text-base ">{{ $oferta->descripcion }}</p>
                            </div>

                            <a href="{{url('ofertas', $oferta)}}">
                            <div class="px-2 pt-2 pb-2">
                                <span class="inline-block bg-yellow-200 rounded-full px-2 py-1 text-sm font-bold text-blue-700 mr-2 mb-2">{{$oferta->updated_at->diffForHumans()}}</span>
                                <span class="inline-block bg-gray-200 rounded-full px-2 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">TWITTER</span>
                                <span class="inline-block bg-gray-200 rounded-full px-2 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">{{ $oferta->file }}</span>
                            </div>
                            </a>
                            
                            <div class="flex space-x-3 mb-4 text-sm font-medium">
                                <div class="flex-auto flex space-x-3">
                                    <button class="w-1/2 flex items-center justify-center rounded-md bg-black text-white" type="submit">Buy now</button>
                                    <button class="w-1/2 flex items-center justify-center rounded-md border border-gray-300" type="button">Add to bag</button>
                                </div>
                                <button class="flex-none flex items-center justify-center w-9 h-9 rounded-md text-gray-400 border border-gray-300" type="button" aria-label="like">
                                    <svg width="20" height="20" fill="currentColor">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" />
                                    </svg>
                                </button>
                            </div>
                            
                        </div>
                        @endforeach
                    </section>
                    <div class="mt-4 mb-2">
                        {{$ofertas->links()}}
                    </div>
                @else
                    <div class="bg-white px-4 py-3 border-t border-gray-200 text-gray-500 sm:px-6">
                        No hay resultados para la busqueda "{{$search}}" en la página {{$page}} al mostrar {{$perPage}} ofertas por página.
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>