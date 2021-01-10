<x-app-layout>
    <div class="container py-8">
        <h1 class="text-4xl font-bold text-gray-600">{{$post->name}}</h1>

        <div class="text-lg text-gray-500 mb-2">{{$post->excerpt}}</div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

            {{-- Contenido Principal--}}
            <div class="md:col-span-2">
                <div class="text-base text-gray-500 mt-4">.<span class="font-bold uppercase"> {{$post->user->name}}</span> actualizó el {{$post->updated_at->diffForHumans()}}</div>

                <figure>
                    <img class="w-full h-80 object-cover object-center" src="{{Storage::url($post->image->url)}}" alt="">
                </figure>

                <div class="text-base text-gray-500 mt-4">{{$post->body}}</div>
            </div>

            {{-- Contenido Relacionado --}}
            <aside>
                <h1 class="text-2xl font-bold text-gray-600 mb-4">Más en <span class="uppercase">{{$post->category->name}}</span></h1>
                <ul>
                    @foreach ($similares as $similar)
                        <li class="mb-4">
                            <a class="flex" href="{{route('posts.show', $similar)}}">
                                <img class="w-36 h-20 object-cover object-center" src="{{Storage::url($similar->image->url)}}" alt="">
                                <span class="ml-2 text-gray-600">{{$similar->name}}</span>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </aside>

        </div>

        {{-- Comentarios --}}
        <div x-data="{open:false}">

            <section class="rounded-b-lg  mt-4 ">
                @auth
                    <button x-show="!open" class="bg-blue-200 px-1 py-1 rounded border border-blue-300 text-gray-800 max-w-max shadow-md hover:shadow-lg hover:bg-blue-300 float-right" x-on:click="open=true">COMENTAR !..</button>
                    <button x-show="open"  class="bg-red-200 px-1 py-1 rounded border border-red-300 text-gray-800 max-w-max shadow-md hover:shadow-lg hover:bg-red-300 float-right" x-on:click="open=true">Mejor NO !..</button>
                @endauth
                <h3 class="py-2 text-lg flex">Comentarios: &nbsp; <strong> {{$post->comments->count()}}</strong></h3>
                @guest
                    <p><small>PARA COMENTAR ES NECESARIO REGISTRARSE</small></p>
                @endguest

                <div x-show="open" x-on:click.away="open=false">
                    <form action="{{route('comments.store', $post)}}" accept-charset="UTF-8" method="post">
                        <input type="hidden" >
                        <textarea class="w-full shadow-inner border-0 rounded-lg focus:shadow-outline text-2xl" placeholder="Comentar aqui ..." cols="6" rows="6" id="comment_content" spellcheck="false"></textarea>
                        <button class="font-bold py-2 px-4 w-full bg-purple-400 text-lg text-white shadow-munded-lg ">Comentar</button>
                    </form>
                </div>

                <div id="task-comments" class="pt-4">
                    @include('comments.list', ['comments' => $post->comments])
                </div>
            </section>
        </div>
    </div>
</x-app-layout>
