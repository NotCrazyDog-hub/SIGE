<h1>Cadastro de vagas</h1>
<form action="{{ route('vacancies.store') }}" method="post">
    @csrf
    <input type="text" name="title" placeholder="Insira o título da vaga">
    <br>
    <select name="department_id">
        <option disabled selected>Selecione um departamento</option>
        @foreach ($departments as $department)
            <option value="{{ $department->id }}">{{ $department->name }}</option>
        @endforeach
    </select>
    <br>
    <textarea name="description"></textarea>
    <br>
    <input type="text" name="workload" placeholder="Insira a carga horária">
    <br>
    <input type="submit" value="Cadastrar">
</form>