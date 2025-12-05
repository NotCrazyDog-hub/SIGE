<h1>Edição de departamentos</h1>
@if( session('error') )
    <p>{{ session('error') }}</p>
@endif
<form action="{{ route('departments.update', ['department' => $department->id]) }}" method="post">
    @csrf
    @method('PUT')
    <input type="text" name="name" value="{{ old('name', $department->name) }}">
    @error('name')
        <p>{{ $message }}</p>
    @enderror
    <br>
    <textarea name="description">{{ old('description', $department->description) }}</textarea>
    @error('description')
        <p>{{ $message }}</p>
    @enderror
    <br>
    <input type="submit" value="Atualizar">
</form>