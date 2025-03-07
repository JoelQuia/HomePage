<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca Etec Zona Leste</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;

            color: white;
        }
        .top-bar {
            background: #F5F5DC;
            padding: 10px;
            display: flex;
            justify-content: flex-start;
        }
        .return-box {
            background: white;
            padding: 10px;
            border-radius: 5px;
            box-shadow: 2px 2px 5px rgba(0,0,0,0.1);
        }
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: #e9e0d1;
            padding: 15px;
        }
        .nav-links {
            list-style: none;
            display: flex;
            gap: 15px;
        }
        .nav-links a {
            text-decoration: none;
            color: black;
            font-weight: bold;
        }
        .nav-icons {
            display: flex;
            gap: 10px;
        }
        .hero {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 50px;
            background-color: #2F4F4F;
        }
        .hero-text {
            max-width: 50%;
            font-family: 'Roboto', sans-serif;
            font-size: 60px;
            padding-left: 50px;
            padding-top: 50px;
        }
        .btn {
            background: #808080;
            color: white;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
        }

        .hero-image {
            height: 400px;
            width: 400px;
            padding-right: 50px;
            background-color: #91a398;
            border-radius: 10px;
            padding-right: 30px;
            right: 50px;
            display: flex;
        }
        .hero-image img {
            width: 200px;
        }

        .books-section {
            padding: 20px;
            display: flex;
            flex-wrap: wrap;
            gap: 50px;
            justify-content: center;
        }
        .book {
            background: white;
            color: black;
            padding: 15px;
            border-radius: 5px;
            box-shadow: 2px 2px 5px rgba(0,0,0,0.1);
            text-align: center;
            width: 200px;
        }
        .book img {
            width: 100px;
            height: 150px;
        }
        .book button {
            margin-top: 10px;
            background: #808080;
            color: white;
            padding: 5px 10px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <header>

        <nav class="navbar">

            <ul class="nav-links">
                <li><a href="#">Home</a></li>
                <li><a href="#">Categorias</a></li>
                <li><a href="#">Sobre</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Contato</a></li>
            </ul>

        </nav>
    </header>
    <main>
        <section class="hero">
            <div class="hero-text">
                <h1>Bem-Vindo à biblioteca<br>Etec Zona Leste</h1>
                <button class="btn">Cadastrar Livro</button>
            </div>
            <div class="hero-image">
                <img src="books.png" alt="Livros">
                <p>Tudo que você precisa para seus estudos e conhecimento!</p>
            </div>
        </section>

        <section class="books-section">
            <div class="book">
                <img src="https://www.editoradodireito.com.br/media/catalog/product/9/7/9788536500317.154.png?optimize=low&bg-color=255,255,255&fit=bounds&height=1000&width=700&canvas=700:1000" alt="Livro 1">
                <h3>PHP 5: Conceitos e integração com banco de dados</h3>
                <p>Autor: Wallace Soares</p>
                <button>Comprar</button>
            </div>
            <div class="book">
                <img src="https://www.jurua.com.br/images/prod/s/22/22246.jpg?ts=20201205" alt="Livro 2">
                <h3>Contabilidade Geral</h3>
                <p>Autor: Anélio Berti</p>
                <button>Comprar</button>
            </div>
            <div class="book">
                <img src="https://www.editoradodireito.com.br/media/catalog/product/9/7/9788502618350.170.png?optimize=low&bg-color=255,255,255&fit=bounds&height=1000&width=700&canvas=700:1000" alt="Livro 3">
                <h3>Adiministração da Produção</h3>
                <p>Autor: Petrônio Martins & Fernando Laugeni</p>
                <button>Comprar</button>
            </div>
        </section>
    </main>
</body>
</html>
