<x-layout titulo="Séries">

    <a href="{{ route('series.create') }}" class="btn btn-dark mb-2">Adicionar</a>

    <ul class="list-group">
        @foreach ($series as $serie)
        <li class="list-group-item d-flex justify-content-between aling-items-center">
            {{ $serie->nome }}
            <form action="{{route('series.destroy', $serie->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger btn-sn">X</button>
            </form>
        </li>
        @endforeach
    </ul>

</x-layout>
