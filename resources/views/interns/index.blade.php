<h1>Listagem de estagiários</h1>
<a href="{{ route('interns.create') }}">+ Adicionar</a>
@foreach ($interns as $intern)
    <p>{{ $intern->name }} | <a href="{{ route('interns.edit', ['intern' => $intern->id]) }}">✏</a> | <form action="{{ route('interns.destroy', ['intern' => $intern->id]) }}" method="post">
        @csrf
        @method('DELETE') 
        <input type="submit" onclick="return confirm('Tem certeza que deletar este estagiário?')" value="🗑">
    </form></p>
@endforeach