<h1>Cadastro de estagiários</h1>
<form action="{{ route('interns.store') }}" method="post">
    @csrf
    <input type="text" name="name" placeholder="Insira seu nome">
    <br>
    <input type="email" name="email" placeholder="Insira seu email">
    <br>
    <input type="text" name="course" placeholder="Insira seu curso">
    <br>
    <input type="text" name="phone" placeholder="Insira seu telefone">
    <br>
    <input type="hidden" name="status" value="0">
    <input type="checkbox" name="status" value="1">
    <br>
    <input type="submit" value="Cadastrar">
</form>