<h1>Edição de relatórios</h1>
<form action="{{ route('reports.update', ['report' => $report->id]) }}" method="post">
    @csrf
    @method('PUT')
    <input type="text" name="title" value="{{ $report->title }}">
    <br>
    <select name="intern_id">
        @foreach ($interns as $intern)
            <option value="{{ $intern->id }}" {{ $intern->id == $report->intern_id ? 'selected' : '' }}>{{ $intern->name }}</option>
        @endforeach
    </select>
    <br>
    <textarea name="work_description">{{ $report->work_description }}</textarea>
    <br>
    <input type="number" name="grade" value="{{ $report->grade }}">
    <br>
    <input type="submit" value="Atualizar">
</form>