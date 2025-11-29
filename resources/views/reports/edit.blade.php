<h1>Edição de relatórios</h1>
@if( session('error') )
    <p>{{ session('error') }}</p>
@endif
<form action="{{ route('reports.update', ['report' => $report->id]) }}" method="post">
    @csrf
    @method('PUT')
    <input type="text" name="title" value="{{ $report->title }}">
    @error('title')
        <p>{{ $message }}</p>  
    @enderror
    <br>
    <select name="intern_id">
        @foreach ($interns as $intern)
            <option value="{{ $intern->id }}" {{ $intern->id == $report->intern_id ? 'selected' : '' }}>{{ $intern->name }}</option>
        @endforeach
    </select>
    @error('intern_id')
        <p>{{ $message }}</p>
    @enderror
    <br>
    <textarea name="work_description">{{ $report->work_description }}</textarea>
    @error('work_description')
        <p>{{ $message }}</p>
    @enderror
    <br>
    <input type="number" name="grade" value="{{ $report->grade }}">
    @error('grade')
        <p>{{ $message }}</p>
    @enderror
    <br>
    <input type="submit" value="Atualizar">
</form>