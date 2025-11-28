<h1>Edição de departamentos</h1>
@if( session('error') )
    <p>{{ session('error') }}</p>
@endif
<form action="{{ route('departments.update', ['department' => $department->id]) }}" method="post">
    @csrf
    @method('PUT')
    @error('name')
        <p>{{ $message }}</p>
    @enderror
    <input type="text" name="name" value="{{ $department->name }}">
    <br>
    @error('description')
        <p>{{ $message }}</p>
    @enderror
    <textarea name="description">{{ $department->description }}</textarea>
    <br>
    <input type="submit" value="Atualizar">
</form>