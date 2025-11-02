<h1>Listagem de estagiários</h1>
<a href="">+ Adicionar</a>
@foreach ($interns as $intern)
    <p>{{ $intern->name }} | <a href="">✏</a> | <form action="" method="post"></form> </p>
@endforeach