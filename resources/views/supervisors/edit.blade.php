<h1>Edição de supervisores</h1>
@if( session('error') )
    <p>{{ session('error') }}</p>
@endif
<form action="{{ route('supervisors.update', ['supervisor' => $supervisor->id]) }}" method="post">
    @csrf
    @method('PUT')
    @error('name')
        <p>{{ $message }}</p>
    @enderror
    <input type="text" name="name" value="{{ $supervisor->name }}">
    <br>
    @error('department_id')
        <p>{{ $message }}</p>
    @enderror
    <select name="department_id">
        @foreach ($departments as $department)
            <option value="{{ $department->id }}" {{ $department->id == $supervisor->department_id ? 'selected' : '' }}>{{ $department->name }}</option>
        @endforeach
    </select>
    <br>
    @error('email')
        <p>{{ $message }}</p>
    @enderror
    <input type="email" name="email" value="{{ $supervisor->email }}">
    <br>
    @error('phone')
        <p>{{ $message }}</p>
    @enderror
    <input type="text" name="phone" value="{{ $supervisor->phone }}">
    <br>
    <input type="submit" value="Atualizar">
</form>