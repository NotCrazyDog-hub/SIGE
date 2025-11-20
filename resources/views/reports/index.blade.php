<h1>Listagem de relatórios</h1>
<a href="{{ route('reports.create') }}">+ Adicionar</a>
@foreach ($reports as $report)
    <p> {{ $report->title}} {{ $report->created_at->diffForHumans() }} | <a href="{{ route('reports.edit', ['report' => $report->id]) }}">✏</a> | <form action="{{ route('reports.destroy', ['report' => $report->id]) }}" method="post">
        @csrf
        @method('DELETE') 
        <input type="submit" onclick="return confirm('Tem certeza que deletar este relatório?')" value="🗑">
    </form></p>
@endforeach