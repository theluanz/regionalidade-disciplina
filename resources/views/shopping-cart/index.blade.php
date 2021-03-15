<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Carrinho de Compras
        </h2>
    </x-slot>

    <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-5">
        <table class="table-auto mt-20 w-full text-center ">
          <thead class="bg-blue-500 text-white font-bold">
            <th>Descrição</th>
            <th>Preço</th>
          </thead>
          <tbody>
            @foreach($shoppingCarts as $shoppingCart)
            <tr class="bg-blue-200 text-blue-900">
              <td>
                  <a href="{{route('rural-properties.products.show', ['rural_property'=> $shoppingCart->product->ruralProperty, 'product'=>$shoppingCart->product ])}}">
                      {{$shoppingCart->product->description}}
                  </a>
              </td>
              <td>{{ $shoppingCart->product->price}}</td>
              <td>
                <form action="{{ route('shopping-cart.destroy',['shopping_cart'=>$shoppingCart ])}}) }}" method="POST">
                @method('delete')
                @csrf 
                      <x-jet-button type="submit" class="float-right font-semibold uppercase text-xs text-white px-4 py-2 rounded-md bg-red-700">Remover</x-jet-button> 
                </form>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>


</x-app-layout>