<h1>Edição de supervisores</h1>
@if( session('error') )
    <p>{{ session('error') }}</p>
@endif
<form action="{{ route('supervisors.update', ['supervisor' => $supervisor->id]) }}" method="post">
    @csrf
    @method('PUT')
    <input type="text" name="name" value="{{ $supervisor->name }}">
    @error('name')
        <p>{{ $message }}</p>
    @enderror
    <br>
    <select name="department_id">
        @foreach ($departments as $department)
            <option value="{{ $department->id }}" {{ $department->id == $supervisor->department_id ? 'selected' : '' }}>{{ $department->name }}</option>
        @endforeach
    </select>
    @error('department_id')
        <p>{{ $message }}</p>
    @enderror
    <br>
    <input type="email" name="email" value="{{ $supervisor->email }}">
    @error('email')
        <p>{{ $message }}</p>
    @enderror
    <br>
    <input type="text" name="phone" value="{{ $supervisor->phone }}">
    @error('phone')
        <p>{{ $message }}</p>
    @enderror
    <br>
    <input type="submit" value="Atualizar">
</form>