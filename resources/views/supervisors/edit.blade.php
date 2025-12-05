<h1>Edição de supervisores</h1>
@if( session('error') )
    <p>{{ session('error') }}</p>
@endif
<form action="{{ route('supervisors.update', ['supervisor' => $supervisor->id]) }}" method="post">
    @csrf
    @method('PUT')
    <input type="text" name="name" value="{{ old('name', $supervisor->name) }}">
    @error('name')
        <p>{{ $message }}</p>
    @enderror
    <br>
    <select name="department_id">
        @foreach ($departments as $department)
            <option value="{{ $department->id }}" {{ old('department_id', $supervisor->department_id) == $department->id ? 'selected' : '' }}>{{ $department->name }}</option>
        @endforeach
    </select>
    @error('department_id')
        <p>{{ $message }}</p>
    @enderror
    <br>
    <input type="email" name="email" value="{{ old('email', $supervisor->email) }}">
    @error('email')
        <p>{{ $message }}</p>
    @enderror
    <br>
    <input type="text" name="phone" value="{{ old('phone', $supervisor->phone) }}">
    @error('phone')
        <p>{{ $message }}</p>
    @enderror
    <br>
    <input type="submit" value="Atualizar">
</form>