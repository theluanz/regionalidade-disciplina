<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Música
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <h2 class="text-2xl">{{ $music->artist }}</h2>
                <form action="{{ route('musics.store') }}" method="POST">
                    @csrf                    
                    <x-jet-label value="Artista" />
                    <x-jet-input id="artist" class="block mt-1 w-full" type="text" name="artist"
                        :value="$music->artist" required autofocus />
                    <x-jet-label value="Produção" />
                    <x-jet-input id="prod" class="block mt-1 w-full" type="text" name="prod"
                        name="prod" :value="$music->prod" required />
                    <x-jet-label value="Mix/Maste" />
                    <x-jet-input id="mix" class="block mt-1 w-full" type="text" name="mix"
                        :value="$music->mix" required autofocus />
                    <x-jet-label value="Distribuidora" />
                    <x-jet-input id="dist" class="block mt-1 w-full" type="text" name="dist"
                        name="dist" :value="$music->dist" required />
                    @if($music->id)
                    @method('put')
                    <x-jet-button type="submit" formaction="{{ route('musics.update',['music'=>$music]) }}">
                        Salvar
                    </x-jet-button>
                    @else
                    <x-jet-button type="submit"> Salvar</x-jet-button>
                    @endif
                </form>
            </div>
        </div>

    </div>

</x-app-layout>