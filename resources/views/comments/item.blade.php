   <div x-data="{open:false}">
    <div class="bg-white rounded-lg p-3  flex flex-col justify-center items-center md:items-start shadow-lg mb-4">
        <div class="flex flex-row justify-center mr-2">
            <img alt="avatar" width="48" height="48" class="rounded-full w-10 h-10 mr-4 shadow-lg mb-4" src="https://cdn1.iconfinder.com/data/icons/technology-devices-2/100/Profile-512.png">
            <h3 class="text-purple-600 font-semibold text-lg text-center md:text-left ">{{ $comment->user->name }} comento {{$comment->updated_at->diffForHumans()}}:</h3>
        </div>
        <p style="width: 90%" class="text-gray-600 text-lg text-center md:text-left ">{{ $comment->comment }}</p>
        @auth
            <button x-on:click="open=true" class="bg-gray-300 px-4 py-1 flex text-sm rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white" id="user-menu" aria-haspopup="true">
                Reply
            </button>
        @endauth
    </div>
    <div class="collapse my-3" id="reply-{{$comment->id}}">
        <div class="card card-body">
            @include('comments.form', ['comment' => $comment])
        </div>
    </div>

    @if ($comment->replies)
        @include('comments.list', ['comments' => $comment->replies])
    @endif
</div>
