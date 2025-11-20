<h1>Cadastro de supervisores</h1>
<form action="{{ route('supervisors.store') }}" method="post">
    @csrf
    @error('name')
        <p>{{ $message }}</p>
    @enderror
    <input type="text" name="name" placeholder="Insira o nome do supervisor">
    <br>
    @error('department_id')
        <p>{{ $message }}</p>
    @enderror
    <select name="department_id">
        <option disabled selected>Selecione um departamento</option>
        @foreach ($departments as $department)
            <option value="{{ $department->id }}">{{ $department->name }}</option>
        @endforeach
    </select>
    <br>
    @error('email')
        <p>{{ $message }}</p>
    @enderror
    <input type="email" name="email" placeholder="Insira o email do supervisor">
    <br>
    @error('phone')
        <p>{{ $message }}</p>
    @enderror
    <input type="text" name="phone" placeholder="Insira o telefone do supervisor">
    <br>
    <input type="submit" value="Cadastrar">
</form>