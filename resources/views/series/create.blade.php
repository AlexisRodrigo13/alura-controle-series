<x-layout titulo="Nova Série">
    <form action="{{route('series.create')}}" method="POST">
        @csrf
        @method('POST')
        <div class="mb-3">
        <label for="name" class="form-label">Nome:</label>
        <input type="text" class="form-control" id="nome" name="nome">
        </div>
        <button type="submit" class="btn btn-primary">Adicionar</button>
    </form>

</x-layout>
