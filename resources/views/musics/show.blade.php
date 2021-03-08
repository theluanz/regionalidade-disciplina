<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Músicas
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <h2 class="text-2xl">{{ $music->artist }}</h2>
                <p>Produção: {{ $music->prod }}</p>
                <p>Mix: {{ $music->mix }}</p>
                <p class="text-xs">Criado por {{ $music->user->name }}</p>
            </div>            
        </div>
        <a 
        class="bg-yellow-500 p-2 border-radius-2 m-10"
        href="{{ route('musics.edit',['music'=>$music]) }}">Editar</a>    
        <form action="{{ route('musics.destroy',['music'=>$music]) }}"
            method="POST">
            @method('delete')
            @csrf
            <x-jet-button type="submit"> DELETAR </x-jet-button>
        </form>            
    </div>

</x-app-layout>