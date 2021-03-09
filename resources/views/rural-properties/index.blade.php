<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      Propriedades Rurais
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-5">
        <a href="{{ route('rural-properties.create') }}" class="bg-blue-400 border-blue-500 rounded-xl p-2 shadow-xl float-right text-white font-bold">Nova Propriedade</a>
        <table class="table-auto mt-20 w-full text-center ">
          <thead class="bg-blue-500 text-white font-bold">
            <th>Nome</th>
            <th>Cidade</th>
          </thead>
          <tbody>
            @foreach($ruralProperties as $ruralProperty)
            <tr class="bg-blue-200 text-blue-900">
              <td>
                  <a href="{{route('rural-properties.show', ['rural_property'=> $ruralProperty ])}}">
                      {{$ruralProperty->name}}
                  </a>
              </td>
              <td>{{ $ruralProperty->city}}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      {{ $ruralProperties->links() }}
    </div>
  </div>

</x-app-layout>