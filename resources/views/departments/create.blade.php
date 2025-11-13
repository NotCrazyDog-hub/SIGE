<h1>Cadastro de departamentos</h1>
<form action="{{ route('departments.store') }}" method="post">
    @csrf
    <input type="text" name="name" placeholder="Insira o nome do departamento">
    <br>
    <input type="text" name="description" placeholder="Insira a descrição do departamento">
    <br>
    <input type="submit" value="Cadastrar">
</form>