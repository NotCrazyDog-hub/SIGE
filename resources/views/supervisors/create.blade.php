<h1>Cadastro de supervisores</h1>
@if( session('error') )
    <p>{{ session('error') }}</p>
@endif
<form action="{{ route('supervisors.store') }}" method="post">
    @csrf
    <input type="text" name="name" placeholder="Insira o nome do supervisor">
    @error('name')
        <p>{{ $message }}</p>
    @enderror
    <br>
    <select name="department_id">
        <option disabled selected>Selecione um departamento</option>
        @foreach ($departments as $department)
            <option value="{{ $department->id }}">{{ $department->name }}</option>
        @endforeach
    </select>
    @error('department_id')
        <p>{{ $message }}</p>
    @enderror
    <br>
    <input type="email" name="email" placeholder="Insira o email do supervisor">
    @error('email')
        <p>{{ $message }}</p>
    @enderror
    <br>
    <input type="text" name="phone" placeholder="Insira o telefone do supervisor">
    @error('phone')
        <p>{{ $message }}</p>
    @enderror
    <br>
    <input type="submit" value="Cadastrar">
</form>