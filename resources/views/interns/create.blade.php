<h1>Cadastro de estagiários</h1>
@if( session('error') )
    <p>{{ session('error') }}</p>
@endif
<form action="{{ route('interns.store') }}" method="post">
    @csrf
    <input type="text" name="name" placeholder="Insira seu nome" value="{{ old('name') }}">
    @error('name')
        <p>{{ $message }}</p>
    @enderror
    <br>
    <input type="email" name="email" placeholder="Insira seu email" value="{{ old('email') }}">
    @error('email')
        <p>{{ $message }}</p>
    @enderror
    <br>
    <input type="text" name="course" placeholder="Insira seu curso" value="{{ old('course') }}">
    @error('course')
        <p>{{ $message }}</p>
    @enderror
    <br>
    <input type="text" name="phone" placeholder="Insira seu telefone"  value="{{ old('phone') }}">
    @error('phone')
        <p>{{ $message }}</p>
    @enderror
    <br>
    <input type="hidden" name="status" value="0">
    <input type="checkbox" name="status" value="1"  {{ old('status') == 1 ? 'checked' : '' }}>
    <br>
    <input type="submit" value="Cadastrar">
</form>