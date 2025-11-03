<h1>Listagem de departamentos</h1>
<a href="">+ Adicionar</a>
@foreach ($departments as $department)
    <p>{{ $department->name }} | <a href="">✏</a> | <form action="" method=""></form> </p>
@endforeach