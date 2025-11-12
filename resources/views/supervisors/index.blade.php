<h1>Listagem de supervisores</h1>
<a href="{{ route('supervisors.create') }}">+ Adicionar</a>
@foreach ($supervisors as $supervisor)
    <p> {{ $supervisor->name}} | <a href="{{ route('supervisors.edit', ['supervisor' => $supervisor->id]) }}">✏</a> | <form action="{{ route('supervisors.destroy', ['supervisor' => $supervisor->id]) }}" method="post">
        @csrf
        @method('DELETE') 
        <input type="submit" onclick="return confirm('Tem certeza que deletar este supervisor?')" value="🗑">
    </form></p>
@endforeach