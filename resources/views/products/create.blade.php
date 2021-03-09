<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Produtos da {{$ruralProperty->name}}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <h2 class="text-2xl">{{ $product->description }}</h2>
                <form action="{{ route('rural-properties.products.store',[
                    'rural_property'    => $ruralProperty
                ]) }}" method="POST">
                    @csrf                    
                    <x-jet-label value="Descrição" />
                    <x-jet-input id="description" class="block mt-1 w-full" type="text" name="description"
                        :value="$product->description" required autofocus />
                   
                    <x-jet-label value="Price" />
                    <x-jet-input id="price" class="block mt-1 w-full" type="number" min="0" max="5000" step=".01"
                        name="price" :value="$product->price" required />
                   
                    <x-jet-label value="Detalhes" />
                    <x-jet-input id="details" class="block mt-1 w-full" type="text" name="details"
                        :value="$product->details" required />
                    
                    <x-jet-label value="Unidade de medida" />
                    <select name="unit">
                    @foreach ($product->getUnits() as $key=>$value) 
                      <option value="{{$key}}">{{$value}}</option> 
                    @endforeach
                    </select>
                    
                    <x-jet-label value="Estoque minimo" />
                    <x-jet-input id="minimum_stock" class="block mt-1 w-full" type="number" min="0" max="5000" step=".01"
                        name="minimum_stock" :value="$product->minimum_stock" required />
                    
                    <x-jet-label value="Quantidade disponível" />
                    <x-jet-input id="quantity" class="block mt-1 w-full" type="number" min="0" max="5000" step=".01"
                        name="quantity" :value="$product->quantity" required />
                   

                    @if($product->id)
                    @method('put')
                    <x-jet-button type="submit" formaction="{{ route('rural-properties.products.update',[
                        'rural_property'=>$ruralProperty,
                        'product'=>$product]) }}">
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