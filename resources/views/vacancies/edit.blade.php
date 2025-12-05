<h1>Edição de vagas</h1>
@if( session('error') )
    <p>{{ session('error') }}</p>
@endif
<form action="{{ route('vacancies.update', ['vacancy' => $vacancy->id]) }}" method="post">
    @csrf
    @method('PUT')
    <input type="text" name="title" value="{{ old('title', $vacancy->title) }}">
    @error('title')
        <p>{{ $message }}</p>
    @enderror
    <br>
    <select name="department_id">
        @foreach ($departments as $department)
            <option value="{{ $department->id }}" {{ old('department_id', $vacancy->department_id) == $department->id ? 'selected' : '' }}>{{ $department->name }}</option>
        @endforeach
    </select>
    @error('department_id')
        <p>{{ $message }}</p>
    @enderror
    <br>
    <textarea name="description">{{ old('description', $vacancy->description) }}</textarea>
    @error('description')
        <p>{{ $message }}</p>
    @enderror
    <br>
    <input type="number" name="workload" value="{{ old('workload', $vacancy->workload) }}">
    @error('workload')
        <p>{{ $message }}</p>
    @enderror
    <br>
    <input type="submit" value="Atualizar">
</form>