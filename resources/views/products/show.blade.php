<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Produtos da {{$ruralProperty->name}}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-10 border-blue-800 border ">
                <h2 class="text-2xl bg-blue-200 p-2">{{ $product->description }}</h2>
                <dl class="mt-5">
                    <dt>
                        Preço: 
                    </dt>
                    <dd>
                        {{ $product->price }}
                    </dd>                    
                </dl>          
                <dl class="mt-5">
                    <dt>Detalhes:</dt>
                    <dd>{{ $product->details }}</dd>
                </dl>
                <dl class="mt-5">
                    <dt>Unidade de medida: </dt>
                    <dd>{{ $product->unit }}</dd>
                </dl>
                <dl class="mt-5">
                    <dt>Estoque minimo:</dt>
                    <dd>{{ $product->minimum_stock }}</dd>
                </dl>
                <dl class="mt-5">
                    <dt>Estoque disponível:</dt>
                    <dd>{{ $product->quantity }}</dd>
                </dl>
                                                                                                  

                <p class="text-xs">Criado por {{ $ruralProperty->user->name }}</p>

                <form action="{{ route('rural-properties.products.destroy',[

                      'rural_property'    => $ruralProperty,

                      'product'=>$product

                      ]) }}" method="POST">
                    @method('delete')
                    @csrf                    
                    <x-jet-button type="submit" class="float-right font-bold bg-red-700"> Deletar </x-jet-button>
                    <a href="{{ route('rural-properties.products.edit',['product'=>$product, 'rural_property'=>$ruralProperty]) }}" class="float-right font-semibold uppercase text-xs text-white px-4 py-2 rounded-md bg-blue-700"> Editar </a>                    
                    <a href="{{ route('rural-properties.products.index',['product'=>$product, 'rural_property'=>$ruralProperty]) }}" class="float-right font-semibold uppercase text-xs text-white px-4 py-2 rounded-md bg-blue-700"> Produtos </a>                    
                </form>
                <form action="{{ route('shopping-cart.store',['product'=>$product]) }}" method="POST">
                  @csrf
                  <x-jet-input id="quantity" class="block mb-5 w-full" type="number" min="1" max="5000" step="1"
                        name="quantity" :value="1" required />
                    <x-jet-input id="product_id" class="block mb-5 w-full" type="hidden" min="1" max="5000" step="1"
                        name="product_id" :value="$product->id" required />
                    <x-jet-button type="submit" class="float-right font-semibold uppercase text-xs text-white px-4 py-2 rounded-md bg-green-700"> Adicionar ao Carrinho</x-jet-button>                    
                </form>
            </div>
        </div>
    </div>
    <div class="p-10">
        <form action="{{ route('rural-properties.products.photos.store',[
            'rural_property'    => $ruralProperty,
            'product'           => $product
        ]) }}"  method="POST" enctype="multipart/form-data">
            @csrf
            <input type="file" name="photo">
            <button type="submit">Enviar foto</button>
        </form>
    </div>
    <div class="p-10">
        @foreach ($product->photos as $photo)
            <img src="{{ asset("storage/{$photo->url}") }}" alt="" width="100px">
        @endforeach
    </div>
    
</x-app-layout>