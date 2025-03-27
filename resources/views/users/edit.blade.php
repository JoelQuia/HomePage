<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <a href="{{route ('users.index')}}" class="btn btn-info btn-sm me-1">Listar </a>


    <a href="{{route ('users.show',['user'=> $user->id])}}" class="btn btn-info btn-sm me-1">Vizualizar </a>

    <h2>Editar Usuário</h2>



    @if ($errors->any())
    @foreach ($errors->all() as $error)
    <p style="color: red;">
        {{ $error }}
    </p>
    @endforeach
    @endif

    <br>
    <form action="{{ route('users-update', ['user'=> $user->id]) }}" method="POST">
        @csrf
        @method('PUT')



        <label>Nome:</label>
        <input type="text" name="name" placeholder="Nome Completo" value="{{ old('name', $user->name) }}">

        <br><br>
        <label>Email:</label>
        <input type="email" name="email" placeholder="Insira seu email" value="{{ old('email', $user->email) }}">
        <br><br>

        <label>Senha:</label>
        <input type="password" name="password" placeholder="Sua senha" value="{{ old('password') }}">

        <br><br>

        <button type="submit">Salvar</button>

    </form>


</body>

</html>