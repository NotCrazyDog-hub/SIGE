<h1>Registro de relatórios</h1>
<form action="{{ route('reports.store') }}" method="post">
    @csrf
    <input type="text" name="title" placeholder="Insira o título do relatório">
    <br>
    <select name="intern_id">
        <option disabled selected>Selecione um estagiário</option>
        @foreach ($interns as $intern)
            <option value="{{ $intern->id }}">{{ $intern->name }}</option>
        @endforeach
    </select>
    <br>
    <textarea name="work_description" placeholder="Insira a descrição das atividades"></textarea>
    <br>
    <input type="number" name="grade" placeholder="Insira a nota das atividades">
    <br>
    <input type="submit" value="Registrar">
</form>