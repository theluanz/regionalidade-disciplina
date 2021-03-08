<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Produtos
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <h2 class="text-2xl">{{ $ruralProperty->description }}</h2>
                <form action="{{ route('rural-properties.store') }}" method="POST">
                    @csrf                    
                    <x-jet-label value="Nome" />
                    <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name"
                        :value="$ruralProperty->name" required autofocus />
                    
                        <x-jet-label value="Cidade" />
                    <x-jet-input id="city" class="block mt-1 w-full" type="text" name="city"
                        :value="$ruralProperty->city" required />
                    
                        <x-jet-label value="Rua" />
                    <x-jet-input id="street" class="block mt-1 w-full" type="text" name="street"
                        :value="$ruralProperty->street" required />

                        <x-jet-label value="CEP" />
                    <x-jet-input id="zip_code" class="block mt-1 w-full" type="text" name="zip_code"
                        :value="$ruralProperty->zip_code" required />
                    
                        <x-jet-label value="Telefone" />
                    <x-jet-input id="phone" class="block mt-1 w-full" type="text" name="phone"
                        :value="$ruralProperty->phone" required />
                    
                        <x-jet-label value="Latitude" />
                    <x-jet-input id="latitude" class="block mt-1 w-full" type="number" min="0" max="5000" step=".01"
                        name="latitude" :value="$ruralProperty->latitude" required />
                    
                    <x-jet-label value="Logitude" />
                    <x-jet-input id="longitude" class="block mt-1 w-full" type="num\ber" min="0" max="5000" step=".01"
                        name="longitude" :value="$ruralProperty->longitude" required />


                    @if($ruralProperty->id)
                    @method('put')
                    <x-jet-button type="submit" formaction="{{ route('rural-properties.update',['rural_property'=>$ruralProperty]) }}">
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