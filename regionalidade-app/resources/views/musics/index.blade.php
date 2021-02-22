<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Músicas
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <a href="{{ route('musics.create') }}">Adicionar Música</a>    
                <table>
                    <thead>
                        <th>Artista</th>
                        <th>Produção</th>
                    </thead>
                    <tbody>
                        @foreach($musics as $music)
                        <tr>
                            <td>
                                <a href="{{ route('musics.show',['music'=>$music]) }}">
                                    {{ $music->artist }}
                                </a>
                            </td>
                            <td>{{ $music->prod  }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            {{ $musics->links() }}
        </div>
    </div>

</x-app-layout>