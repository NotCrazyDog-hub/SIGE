<h1>Edição de supervisores</h1>
<form action="{{ route('supervisors.update', ['supervisor' => $supervisor->id]) }}" method="post">
    @csrf
    @method('PUT')
    <input type="text" name="name" value="{{ $supervisor->name }}">
    <br>
    <select name="department_id">
        @foreach ($departments as $department)
            <option value="{{ $department->id }}" {{ $department->id == $supervisor->department_id ? 'checked' : '' }}>{{ $department->name }}</option>
        @endforeach
    </select>
    <br>
    <input type="email" name="email" value="{{ $supervisor->email }}">
    <br>
    <input type="text" name="phone" value="{{ $supervisor->phone }}">
    <br>
    <input type="submit" value="Atualizar">
</form>