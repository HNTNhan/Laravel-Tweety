<x-app-layout>
    <header class="container mx-auto relative mb-4">
        <div class="relative">
            <img src="/images/default-profile-banner.jpg"
                 alt="default profile banner"
                 width="100%"
                 class="mb-2"
            >

            <img
                src="{{ $user->avatar }}"
                alt="User Image"
                class="rounded-full absolute bottom-0 transform -translate-x-1/2 translate-y-1/2"
                style="left: 50%"
                width="150px"
            >
        </div>

        <div class="flex justify-between items-center mb-4">
            <div style="max-width: 250px; word-wrap: break-word;">
                <h2 class="font-bold text-2xl">{{ $user->name }}</h2>
                <p class="text-sm">Join {{ $user->created_at->diffForHumans() }}</p>
            </div>
            <div class="flex">
                @can('edit', $user)
                    <a href="{{ $user->path('edit') }}" class="rounded-lg border border-gray-500 p-2 text-xs mr-2">Edit Profile</a>
                @endcan
                <x-follow-button :user="$user" />

            </div>
        </div>

        <p class="text-sm">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci consectetur debitis delectus, expedita id
            illum ipsum libero molestiae nostrum perspiciatis possimus quod repudiandae sed, tenetur totam unde vel
            voluptatibus! Ducimus.
        </p>
    </header>

    @include('_timeline', [
        'tweets' => $tweets
    ])
</x-app-layout>
