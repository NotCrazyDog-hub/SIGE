<h1>Edição de relatórios</h1>
@if( session('error') )
    <p>{{ session('error') }}</p>
@endif
<form action="{{ route('reports.update', ['report' => $report->id]) }}" method="post">
    @csrf
    @method('PUT')
    <input type="text" name="title" value="{{ old('title', $report->title) }}">
    @error('title')
        <p>{{ $message }}</p>  
    @enderror
    <br>
    <select name="intern_id">
        @foreach ($interns as $intern)
            <option value="{{ $intern->id }}" {{ old('intern_id', $report->intern_id) == $intern->id ? 'selected' : '' }}>{{ $intern->name }}</option>
        @endforeach
    </select>
    @error('intern_id')
        <p>{{ $message }}</p>
    @enderror
    <br>
    <textarea name="work_description">{{ old('work_description', $report->work_description) }}</textarea>
    @error('work_description')
        <p>{{ $message }}</p>
    @enderror
    <br>
    <input type="number" name="grade" value="{{ old('grade', $report->grade) }}">
    @error('grade')
        <p>{{ $message }}</p>
    @enderror
    <br>
    <input type="submit" value="Atualizar">
</form>