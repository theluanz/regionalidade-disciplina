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
                <p>Detalhes: {{ $product->details }}</p>
                <p>Preço: {{ $product->price }}</p>
                <p class="text-xs">Criado por {{ $product->user->name }}</p>
            </div>            
        </div>
        <a 
        class="bg-yellow-500 p-2 border-radius-2 m-10"
        href="{{ route('products.edit',['product'=>$product]) }}">Editar</a>    
        <form action="{{ route('products.destroy',['product'=>$product]) }}"
            method="POST">
            @method('delete')
            @csrf
            <x-jet-button type="submit"> DELETAR </x-jet-button>
        </form>            
    </div>

</x-app-layout>