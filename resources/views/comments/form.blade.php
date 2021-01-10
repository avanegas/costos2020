<div>
    <section class="rounded-b-lg mt-4">
        <form action="{{route('comments.store', $post)}}" method="POST">
            {{ csrf_field() }}

            @if (isset($comment->id))
                <input type="hidden" name="parent_id" value="{{$comment->id}}">
            @endif

            <input type="hidden" name="user_id" value="{{auth()->id()}}">

            <div x-show="open" x-on:click.away="open=false">
                <textarea class="w-full shadow-inner border-0 rounded-lg focus:shadow-outline text-2xl" placeholder="Comentar aqui ..." cols="6" rows="6" name="comment" id="comment" spellcheck="false"></textarea>
                <button type="submit" class="font-bold py-2 px-4 mb-4 w-full bg-purple-400 text-lg text-white shadow-md rounded-lg ">Comentar </button>
            </div>
        </form>
    </section>
</div>
