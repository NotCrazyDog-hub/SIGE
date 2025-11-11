<h1>Listagem de supervisores</h1>
<a href="{{ route('supervisors.create') }}">+ Adicionar</a>
@foreach ($supervisors as $supervisor)
    <p> | <a href="{{ route('supervisors.edit', ['supervisor' => $supervisor->id]) }}">✏</a> | <form action="" method="post">
        @csrf
        @method('DELETE') 
        <input type="" onclick="return confirm('Tem certeza que deletar este supervisor?')" value="🗑">
    </form></p>
@endforeach