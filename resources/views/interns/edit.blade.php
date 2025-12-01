<h1>Edição de estagiários</h1>
@if( session('error') )
    <p>{{ session('error') }}</p>
@endif
<form action="{{ route('interns.update', ['intern' => $intern->id]) }}" method="post">
    @csrf
    @method('PUT')
    <input type="text" name="name" value="{{ old('name', $intern->name) }}">
    @error('name')
        <p>{{ $message }}</p>
    @enderror
    <br>
    <input type="email" name="email" value="{{ old('email', $intern->email) }}">
    @error('email')
        <p>{{ $message }}</p>
    @enderror
    <br>
    <input type="text" name="course" value="{{ old('course', $intern->course) }}">
    @error('course')
        <p>{{ $message }}</p>
    @enderror
    <br>
    <input type="text" name="phone" value="{{ old('phone', $intern->phone) }}">
    @error('phone')
        <p>{{ $message }}</p>
    @enderror
    <br>
    <input type="hidden" name="status" value="0">
    <input type="checkbox" name="status" value="1" {{ old('status', $intern->status) ? 'checked' : '' }}>
    <br>
    <input type="submit" value="Atualizar">
</form>