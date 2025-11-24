<h1>Edição de vagas</h1>
<form action="{{ route('vacancies.update', ['vacancy' => $vacancy->id]) }}" method="post">
    @csrf
    @method('PUT')
    @error('title')
        <p>{{ $message }}</p>
    @enderror
    <input type="text" name="title" value="{{ $vacancy->title }}">
    <br>
    @error('department_id')
        <p>{{ $message }}</p>
    @enderror
    <select name="department_id">
        <option disabled selected>Selecione um departamento</option>
        @foreach ($departments as $department)
            <option value="{{ $department->id }}" {{ $department->id == $vacancy->department_id ? 'selected' : '' }}>{{ $department->name }}</option>
        @endforeach
    </select>
    @error('description')
        <p>{{ $message }}</p>
    @enderror
    <br>
    <textarea name="description">{{ $vacancy->description}}</textarea>
    <br>
    @error('workload')
        <p>{{ $message }}</p>
    @enderror
    <input type="number" name="workload" value="{{ $vacancy->workload }}">
    <br>
    <input type="submit" value="Atualizar">
</form>