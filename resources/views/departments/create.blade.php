<h1>Cadastro de departamentos</h1>
<form action="{{ route('departments.store') }}" method="post">
    @csrf
    @error('name')
        <p>{{ $message }}</p>
    @enderror
    <input type="text" name="name" placeholder="Insira o nome do departamento">
    <br>
    @error('description')
        <p>{{ $message }}</p>
    @enderror
    <textarea name="description" placeholder="Insira a descrição do departamento"></textarea>
    <br>
    <input type="submit" value="Cadastrar">
</form>