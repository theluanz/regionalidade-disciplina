<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Propriedades Rurais

        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-10 border-blue-800 border ">
                <h2 class="text-2xl bg-blue-200 p-2">{{ $ruralProperty->name }}</h2>
                <dl class="mt-5">
                    <dt>
                        Telefone: 
                    </dt>
                    <dd>
                        {{ $ruralProperty->phone }}
                    </dd>                    
                </dl>          
                <dl class="mt-5">
                    <dt>Cidade:</dt>
                    <dd>{{ $ruralProperty->city }}</dd>
                </dl>
                <dl class="mt-5">
                    <dt>Rua: </dt>
                    <dd>{{ $ruralProperty->street }}</dd>
                </dl>
                <dl class="mt-5">
                    <dt>CEP:</dt>
                    <dd>{{ $ruralProperty->zipCode }}</dd>
                </dl>
                <dl class="mt-5">
                    <dt>Latitude:</dt>
                    <dd>{{ $ruralProperty->latitude }}</dd>
                </dl>
                <dl class="mt-5">
                    <dt>Longitude:</dt>
                    <dd> {{ $ruralProperty->longitude }}</dd>
                </dl>                                                                                      

                <p class="text-xs">Criado por {{ $ruralProperty->user->name }}</p>

                <form action="{{ route('rural-properties.destroy',['rural_property'=>$ruralProperty]) }}" method="POST">
                    @method('delete')
                    @csrf                    
                    <x-jet-button type="submit" class="float-right font-bold bg-red-700"> Deletar </x-jet-button>
                    <a href="{{ route('rural-properties.edit',['rural_property'=>$ruralProperty]) }}" class="float-right font-semibold uppercase text-xs text-white px-4 py-2 rounded-md bg-blue-700"> Editar </a>                    
                    <a href="{{ route('rural-properties.products.index',['rural_property'=>$ruralProperty]) }}" class="float-right font-semibold uppercase text-xs text-white px-4 py-2 rounded-md bg-blue-700"> Produtos </a>                    
                </form>
            </div>
        </div>
    </div>

</x-app-layout>