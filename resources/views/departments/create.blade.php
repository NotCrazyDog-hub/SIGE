<h1>Cadastro de departamentos</h1>
<form action="{{ route('departments.store') }}" method="post">
    @csrf
    <input type="text" name="name" placeholder="Insira o nome do departamento">
    <br>
    <textarea name="description" placeholder="Insira a descrição do departamento"></textarea>
    <br>
    <input type="submit" value="Cadastrar">
</form>