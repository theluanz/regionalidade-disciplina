<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Produtos
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <h2 class="text-2xl">{{ $product->description }}</h2>
                <form action="{{ route('products.store') }}" method="POST">
                    @csrf                    
                    <x-jet-label value="Descrição" />
                    <x-jet-input id="description" class="block mt-1 w-full" type="text" name="description"
                        :value="$product->description" required autofocus />
                    <x-jet-label value="Price" />
                    <x-jet-input id="price" class="block mt-1 w-full" type="number" min="0" max="5000" step=".01"
                        name="price" :value="$product->price" required />
                    @if($product->id)
                    @method('put')
                    <x-jet-button type="submit" formaction="{{ route('products.update',['product'=>$product]) }}">
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