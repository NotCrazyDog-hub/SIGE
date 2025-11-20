<h1>Edição de relatórios</h1>
<form action="{{ route('reports.update', ['report' => $report->id]) }}" method="post">
    @csrf
    @method('PUT')
    @error('title')
        <p>{{ $message }}</p>  
    @enderror
    <input type="text" name="title" value="{{ $report->title }}">
    <br>
    @error('intern_id')
        <p>{{ $message }}</p>
    @enderror
    <select name="intern_id">
        @foreach ($interns as $intern)
            <option value="{{ $intern->id }}" {{ $intern->id == $report->intern_id ? 'selected' : '' }}>{{ $intern->name }}</option>
        @endforeach
    </select>
    <br>
    @error('work_description')
        <p>{{ $message }}</p>
    @enderror
    <textarea name="work_description">{{ $report->work_description }}</textarea>
    <br>
    @error('grade')
        <p>{{ $message }}</p>
    @enderror
    <input type="number" name="grade" value="{{ $report->grade }}">
    <br>
    <input type="submit" value="Atualizar">
</form>