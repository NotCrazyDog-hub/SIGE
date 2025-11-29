<h1>Edição de vagas</h1>
@if( session('error') )
    <p>{{ session('error') }}</p>
@endif
<form action="{{ route('vacancies.update', ['vacancy' => $vacancy->id]) }}" method="post">
    @csrf
    @method('PUT')
    <input type="text" name="title" value="{{ $vacancy->title }}">
    @error('title')
        <p>{{ $message }}</p>
    @enderror
    <br>
    <select name="department_id">
        <option disabled selected>Selecione um departamento</option>
        @foreach ($departments as $department)
            <option value="{{ $department->id }}" {{ $department->id == $vacancy->department_id ? 'selected' : '' }}>{{ $department->name }}</option>
        @endforeach
    </select>
    @error('department_id')
        <p>{{ $message }}</p>
    @enderror
    <br>
    <textarea name="description">{{ $vacancy->description}}</textarea>
    @error('description')
        <p>{{ $message }}</p>
    @enderror
    <br>
    <input type="number" name="workload" value="{{ $vacancy->workload }}">
    @error('workload')
        <p>{{ $message }}</p>
    @enderror
    <br>
    <input type="submit" value="Atualizar">
</form>