<h1>Registro de relatórios</h1>
@if( session('error') )
    <p>{{ session('error') }}</p>
@endif
<form action="{{ route('reports.store') }}" method="post">
    @csrf
    <input type="text" name="title" placeholder="Insira o título do relatório" value="{{ old('title') }}">
    @error('title')
        <p>{{ $message }}</p>       
    @enderror 
    <br> 
    <select name="intern_id">
        <option disabled selected>Selecione um estagiário</option>
        @foreach ($interns as $intern)
            <option value="{{ $intern->id }}" {{ old('intern_id') == $intern->id ? 'selected' : '' }}>{{ $intern->name }}</option>
        @endforeach
    </select>
    @error('intern_id')
        <p>{{ $message }}</p>       
    @enderror
    <br>
    <textarea name="work_description" placeholder="Insira a descrição das atividades">{{ old('work_description') }}</textarea>
    @error('work_description')
        <p>{{ $message }}</p>       
    @enderror 
    <br>
    <input type="number" name="grade" placeholder="Insira a nota das atividades"value="{{ old('grade') }}">
    @error('grade')
        <p>{{ $message }}</p>       
    @enderror  
    <br>
    <input type="submit" value="Registrar">
</form>