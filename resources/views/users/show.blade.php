<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <a href="{{route ('users.index')}}" class="btn btn-info btn-sm me-1">Listar </a>
    <a href="{{route ('users.edit',['user'=> $user->id])}}" class="btn btn-info btn-sm me-1">Editar </a>
    <h2>Vizualizar Usuário</h2>
    @if (session('success'))
    <p style="color: green;">
        {{ session('success') }}
    </p>
    @endif


    <p>ID: {{ $user->id }}</p>
    <p>Nome: {{ $user->name }}</p>
    <p>Email: {{ $user->email }}</p>


</body>

</html>