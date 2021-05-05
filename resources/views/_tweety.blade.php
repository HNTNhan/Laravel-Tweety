<div class="flex p-4 {{ $loop->last ? '' : 'border-b border-gray-300' }}">
    <div class="mx-2 flex-shrink-0">
        <a href="{{ $tweet->user->path() }}">
            <img src="{{ $tweet->user->avatar }}"
                 alt="Post's Author Image"
                 class="rounded-full mr-2"
                 width="50px"
            >
        </a>

    </div>
    <div>
        <a href="{{ $tweet->user->path() }}">
            <h5 class="font-bold mb-4">{{ $tweet->user->name }}</h5>
        </a>

        <p class="text-sm mb-2">
            {{ $tweet->body }}
        </p>

        <x-like-dislike-buttons :tweet="$tweet" />
    </div>
</div>
