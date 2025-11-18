<h1>Edição de departamentos</h1>
<form action="{{ route('departments.update', ['department' => $department->id]) }}" method="post">
    @csrf
    @method('PUT')
    <input type="text" name="name" value="{{ $department->name }}">
    <br>
    <textarea name="description">{{ $department->description }}</textarea>
    <br>
    <input type="submit" value="Atualizar">
</form>