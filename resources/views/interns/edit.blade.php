<h1>Edição de estagiários</h1>
<form action="{{ route('interns.update', ['intern' => $intern->id]) }}" method="post">
    @csrf
    @method('PUT')
    <input type="text" name="name" value="{{ $intern->name }}">
    <br>
    <input type="email" name="email" value="{{ $intern->email }}">
    <br>
    <input type="text" name="course" value="{{ $intern->course }}">
    <br>
    <input type="text" name="phone" value="{{ $intern->phone }}">
    <br>
    <input type="hidden" name="status" value="0">
    <input type="checkbox" name="status" value="1" {{ $intern->status ? 'checked' : '' }}>
    <br>
    <input type="submit" value="Atualizar">
</form>