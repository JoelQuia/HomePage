<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>

    <a href="{{route ('users.create')}}">Cadastrar </a>
    <br>

    <h1> Listar Usuários</h1>

    @if (session('success'))
    <p style="color: green;">
        {{ session('success') }}
    </p>
    @endif



    @forelse($users as $user)
    ID: {{ $user->id }} <br>
    Nome: {{ $user->name }} <br>
    Email: {{ $user->email }} <br>
    <a href="{{ route('users.show', ['user'=> $user->id]) }}">Vizualizar</a>
    <a href="{{ route('users.edit', ['user'=> $user->id]) }}">Editar</a>
    <hr>
    @empty

    @endforelse
</body>

</html>