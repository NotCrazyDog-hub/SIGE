<h1>Edição de vagas</h1>
<form action="{{ route('vacancies.update', ['vacancy' => $vacancy->id]) }}" method="post">
    @csrf
    @method('PUT')
    <input type="text" name="title" value="{{ $vacancy->title }}">
    <br>
    <select name="department_id">
        <option disabled selected>Selecione um departamento</option>
        @foreach ($departments as $department)
            <option value="{{ $department->id }}" {{ $department->id == $supervisor->department_id ? 'selected' : '' }}>{{ $department->name }}</option>
        @endforeach
    </select>
    <br>
    <textarea>{{ $vacancy->description}}</textarea>
    <br>
    <input type="number" name="workload" value="{{ $vacancy->workload }}">
    <br>
    <input type="submit" value="Atualizar">
</form>