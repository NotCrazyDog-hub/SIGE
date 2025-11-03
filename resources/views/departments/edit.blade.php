<h1>Edição de departamentos</h1>
<form action="{{ route('departments.update', ['department' => $department->id]) }}" method="post">
    @csrf
    @method('PUT')
    <input type="text" name="name" value="{{ $department->name }}">
    <br>
    <input type="text" name="location" value="{{ $department->location }}">
    <br>
    <input type="text" name="manager" value="{{ $department->manager }}">
    <br>
    <input type="submit" value="Atualizar">
</form>