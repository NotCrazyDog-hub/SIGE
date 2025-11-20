<h1>Registro de relatórios</h1>
<form action="{{ route('reports.store') }}" method="post">
    @csrf
     @error('title')
        <p>{{ $message }}</p>       
    @enderror 
    <input type="text" name="title" placeholder="Insira o título do relatório">
    <br>
    @error('intern_id')
        <p>{{ $message }}</p>       
    @enderror 
    <select name="intern_id">
        <option disabled selected>Selecione um estagiário</option>
        @foreach ($interns as $intern)
            <option value="{{ $intern->id }}">{{ $intern->name }}</option>
        @endforeach
    </select>
    <br>
    @error('work_description')
        <p>{{ $message }}</p>       
    @enderror 
    <textarea name="work_description" placeholder="Insira a descrição das atividades"></textarea>
    <br>
    @error('grade')
        <p>{{ $message }}</p>       
    @enderror  
    <input type="number" name="grade" placeholder="Insira a nota das atividades">
    <br>
    <input type="submit" value="Registrar">
</form>