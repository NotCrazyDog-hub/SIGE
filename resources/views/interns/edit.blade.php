<h1>Edição de estagiários</h1>
@if( session('error') )
    <p>{{ session('error') }}</p>
@endif
<form action="{{ route('interns.update', ['intern' => $intern->id]) }}" method="post">
    @csrf
    @method('PUT')
    @error('name')
        <p>{{ $message }}</p>
    @enderror
    <input type="text" name="name" value="{{ $intern->name }}">
    <br>
    @error('email')
        <p>{{ $message }}</p>
    @enderror
    <input type="email" name="email" value="{{ $intern->email }}">
    <br>
    @error('course')
        <p>{{ $message }}</p>
    @enderror
    <input type="text" name="course" value="{{ $intern->course }}">
    <br>
    @error('phone')
        <p>{{ $message }}</p>
    @enderror
    <input type="text" name="phone" value="{{ $intern->phone }}">
    <br>
    <input type="hidden" name="status" value="0">
    <input type="checkbox" name="status" value="1" {{ $intern->status ? 'checked' : '' }}>
    <br>
    <input type="submit" value="Atualizar">
</form>