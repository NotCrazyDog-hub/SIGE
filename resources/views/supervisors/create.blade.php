<h1>Cadastro de supervisores</h1>
<form action="{{ route('supervisors.store') }}" method="post">
    @csrf
    <input type="text" name="name" placeholder="Insira o nome do supervisor">
    <br>
    <select name="department_id">
        <option disabled selected>Selecione um departamento</option>
        @foreach ($departments as $department)
            <option value="{{ $department->id }}">{{ $department->name }}</option>
        @endforeach
    </select>
    <br>
    <input type="email" name="email" placeholder="Insira o email do supervisor">
    <br>
    <input type="text" name="phone" placeholder="Insira o telefone do supervisor">
    <br>
    <input type="submit" value="Cadastrar">
</form>