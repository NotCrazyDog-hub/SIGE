<h1>Listagem de departamentos</h1>
@if( session('success') )
    <p>{{ session('success') }}</p>
@endif
<a href="{{ route('departments.create') }}">+ Adicionar</a>
@foreach ($departments as $department)
    <p>{{ $department->name }} | <a href="{{ route('departments.edit', ['department' => $department->id]) }}">✏</a> | <form action="{{ route('departments.destroy', ['department' => $department->id]) }}" method="post">
        @csrf
        @method('DELETE')
        <input type="submit" onclick="return confirm('Tem certeza que deseja excluir esse departamento?')" value="🗑">
    </form> </p>
@endforeach