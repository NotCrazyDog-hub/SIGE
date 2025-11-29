<h1>Cadastro de departamentos</h1>
@if( session('error') )
    <p>{{ session('error') }}</p>
@endif
<form action="{{ route('departments.store') }}" method="post">
    @csrf
    <input type="text" name="name" placeholder="Insira o nome do departamento">
    @error('name')
        <p>{{ $message }}</p>
    @enderror
    <br>
    <textarea name="description" placeholder="Insira a descrição do departamento"></textarea>
    @error('description')
        <p>{{ $message }}</p>
    @enderror
    <br>
    <input type="submit" value="Cadastrar">
</form>