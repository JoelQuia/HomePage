<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criando</title>
</head>

<body>

    <a href="{{route ('users.index')}}" >Listar </a>

    <br>
    <br>
    <h1> Cadastrar Usuários</h1>


    @if ($errors->any())
    @foreach ($errors->all() as $error)
    <p style="color: red;">
        {{ $error }}
    </p>
    @endforeach
    @endif

    <br>
    <form action="{{ route('users-store') }}" method="POST">
        @csrf
        @method('POST')



        <label>Nome:</label>
        <input type="text" name="name" placeholder="Nome Completo" value="{{ old('name') }}">

        <br><br>
        <label>Email:</label>
        <input type="email" name="email" placeholder="Insira seu email" value="{{ old('email') }}">
        <br><br>

        <label>Senha:</label>
        <input type="password" name="password" placeholder="Sua senha" value="{{ old('password') }}">

        <br><br>

        <button type="submit">Cadastrar</button>

    </form>




</body>

</html>