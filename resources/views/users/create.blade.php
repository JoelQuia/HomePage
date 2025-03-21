

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criando</title>
</head>
<body>

<h1> Cadastrar Usuários</h1>

<a href="{{route ('user.create')}}" >Listar   </a>

<form action="a" methood="POST">
    @scrf
    @method('POST')

    <label>Nome:</label>
        <input type="text" placeholder="Nome Completo">

        <br>
    <label>Email:</label>
        <input type="email" placeholer="Seu melhor email">
<br>
    
        <label>Senha:</label>
        <input type="password" placeholer="Sua senha">

<br>

    <button>Cadastrar</button>

</form>



    
</body>
</html>

