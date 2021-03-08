<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Propriedades Rurais

        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <h2 class="text-2xl">{{ $ruralProperty->name }}</h2>
                <p>Telefone: {{ $ruralProperty->phone }}</p>
                <p class="text-xs">Endereço:</p>
                <p>Cidade: {{ $ruralProperty->city }}</p>
                <p>Rua: {{ $ruralProperty->street }}</p>
                <p>CEP: {{ $ruralProperty->zipCode }}</p>
                <p>Latitude: {{ $ruralProperty->latitude }}</p>
                <p>Longitude: {{ $ruralProperty->longitude }}</p>

                <p class="text-xs">Criado por {{ $ruralProperty->user->name }}</p>
            </div>            
        </div>
        <a 
        class="bg-yellow-500 p-2 border-radius-2 m-10"
        href="{{ route('rural-properties.edit',['rural_property'=>$ruralProperty]) }}">Editar</a>    
        <form action="{{ route('rural-properties.destroy',['rural_property'=>$ruralProperty]) }}"
            method="POST">
            @method('delete')
            @csrf
            <x-jet-button type="submit"> DELETAR </x-jet-button>
        </form>            
    </div>

</x-app-layout>