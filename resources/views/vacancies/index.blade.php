<h1>Listagem de vagas</h1>
@if( session('success') )
    <p>{{ session('success') }}</p>
@endif
<a href="{{ route('vacancies.create') }}">+ Adicionar</a>
@foreach ($vacancies as $vacancy)
    <p>{{ $vacancy->title }} | <a href="{{ route('vacancies.edit', ['vacancy' => $vacancy->id]) }}">✏</a> | <form action="{{ route('vacancies.destroy', ['vacancy' => $vacancy->id]) }}" method="post">
        @csrf
        @method('DELETE') 
        <input type="submit" onclick="return confirm('Tem certeza que deletar esta vaga?')" value="🗑">
    </form></p>
@endforeach