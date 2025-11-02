<h1>Cadastro de estagiários</h1>
<form action="{{ route('interns.edit', ['intern' => $intern->id]) }}" method="post">
    @csrf
    @method('PUT')
    <input type="text" name="name" placeholder="{{ $intern->name }}">
    <br>
    <input type="email" name="email" placeholder="{{ $intern->email }}">
    <br>
    <input type="text" name="course" placeholder="{{ $intern->course }}">
    <br>
    <input type="text" name="phone" placeholder="{{ $intern->phone }}">
    <br>
    <input type="hidden" name="status" value="0">
    <input type="checkbox" name="status" value="1" {{ $intern->status ? 'checked' : '' }}>
    <br>
    <input type="submit" value="Cadastrar">
</form>