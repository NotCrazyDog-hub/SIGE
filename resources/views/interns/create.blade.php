<h1>Cadastro de estagiários</h1>
@if( session('error') )
    <p>{{ session('error') }}</p>
@endif
<form action="{{ route('interns.store') }}" method="post">
    @csrf
    @error('name')
        <p>{{ $message }}</p>
    @enderror
    <input type="text" name="name" placeholder="Insira seu nome">
    <br>
    @error('email')
        <p>{{ $message }}</p>
    @enderror
    <input type="email" name="email" placeholder="Insira seu email">
    <br>
    @error('course')
        <p>{{ $message }}</p>
    @enderror
    <input type="text" name="course" placeholder="Insira seu curso">
    <br>
    @error('phone')
        <p>{{ $message }}</p>
    @enderror
    <input type="text" name="phone" placeholder="Insira seu telefone">
    <br>
    <input type="hidden" name="status" value="0">
    <input type="checkbox" name="status" value="1">
    <br>
    <input type="submit" value="Cadastrar">
</form>