<h1>Cadastro de vagas</h1>
<form action="{{ route('vacancies.store') }}" method="post">
    @csrf
    @error('title')
        <p>{{ $message }}</p>
    @enderror
    <input type="text" name="title" placeholder="Insira o título da vaga">
    <br>
    @error('department_id')
        <p>{{ $message }}</p>
    @enderror
    <select name="department_id">
        <option disabled selected>Selecione um departamento</option>
        @foreach ($departments as $department)
            <option value="{{ $department->id }}">{{ $department->name }}</option>
        @endforeach
    </select>
    <br>
    @error('description')
        <p>{{ $message }}</p>
    @enderror
    <textarea name="description" placeholder="Insira a descrição da vaga"></textarea>
    <br>
    @error('workload')
        <p>{{ $message }}</p>
    @enderror
    <input type="number" name="workload" placeholder="Insira a carga horária">
    <br>
    <input type="submit" value="Cadastrar">
</form>