<h1>Cadastro de vagas</h1>
@if( session('error') )
    <p>{{ session('error') }}</p>
@endif
<form action="{{ route('vacancies.store') }}" method="post">
    @csrf
    <input type="text" name="title" placeholder="Insira o título da vaga" value="{{ old('title') }}">
    @error('title')
        <p>{{ $message }}</p>
    @enderror
    <br>
    <select name="department_id">
        <option disabled selected>Selecione um departamento</option>
        @foreach ($departments as $department)
            <option value="{{ $department->id }}" {{ old('department_id') == $department->id ? 'selected' : '' }}>{{ $department->name }}</option>
        @endforeach
    </select>
    @error('department_id')
        <p>{{ $message }}</p>
    @enderror
    <br>
    <textarea name="description" placeholder="Insira a descrição da vaga">{{ old('description') }}</textarea>
    @error('description')
        <p>{{ $message }}</p>
    @enderror
    <br>
    <input type="number" name="workload" placeholder="Insira a carga horária" value="{{ old('workload') }}">
    @error('workload')
        <p>{{ $message }}</p>
    @enderror
    <br>
    <input type="submit" value="Cadastrar">
</form>