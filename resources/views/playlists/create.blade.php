<x-app-layout>
    <x-slot name="title">
        Create playlist
    </x-slot>
    {{-- @slot('title')
        Create playlist
    @endslot --}}
    <div class="p-5">
        Create new playlist
        <div class="text-sm text-gray-400 mt-4">
            <form action={{ route('create.playlists') }} method="post" enctype="multipart/form-data" novalidate>
                @include('playlists._form-control', ['submit' => 'Create'])
            </form>
        </div>
    </div>
</x-app-layout>