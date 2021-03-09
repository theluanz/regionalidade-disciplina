<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Produtos da {{$ruralProperty->name}}
        </h2>
    </x-slot>

    <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-5">
        <a href="{{ route('rural-properties.products.create', ['rural_property'=>$ruralProperty]) }}" class="bg-blue-400 border-blue-500 rounded-xl p-2 shadow-xl float-right text-white font-bold">Novo Produto</a>
        <table class="table-auto mt-20 w-full text-center ">
          <thead class="bg-blue-500 text-white font-bold">
            <th>Descrição</th>
            <th>Preço</th>
          </thead>
          <tbody>
            @foreach($products as $product)
            <tr class="bg-blue-200 text-blue-900">
              <td>
                  <a href="{{route('rural-properties.show', ['rural_property'=> $ruralProperty ])}}">
                      {{$product->description}}
                  </a>
              </td>
              <td>{{ $product->price}}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      {{ $products->links() }}
    </div>
  </div>


</x-app-layout>