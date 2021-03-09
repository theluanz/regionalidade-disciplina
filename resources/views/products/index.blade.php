<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Produtos da {{$ruralProperty->name}}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <a href="{{ route('rural-properties.products.create',[
                    'rural_property' => $ruralProperty
                ]) }}">Criar Produto</a>    
                <table>
                    <thead>
                        <th>Descrição</th>
                        <th>Preço</th>
                    </thead>
                    <tbody>
                        @foreach($products as $product)
                        <tr>
                            <td>
                                <a href="{{ route('rural-properties.products.show',[
                                    'rural_property' => $ruralProperty,
                                    'product'=>$product
                                    ]) }}">
                                    {{ $product->description }}
                                </a>
                            </td>
                            <td>{{ $product->price  }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            {{ $products->links() }}
        </div>
    </div>

</x-app-layout>