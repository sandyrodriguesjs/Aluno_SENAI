<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Aluno Senai</title>
</head>
<body class="body">
    <header> 
        <div id = "title">
            <h1> Minha </h1>
            <h1> Aprendizagem </h1>
        </div> 

        <ul>
            <a href="#"><li>Inicio</li></a>
            <a href="#"><li>Sobre</li></a>
            <a href="#"><li>Contato</li></a>
            <a href="#"><li>Já tem uma conta?</li></a>
        </ul>
    </header>

    <main>
        <aside> <h1>Inscreva-se agora!</h1>
                <h2>Acompanhe sua trajetória no período de Aprendizagem</h2>
            <p>
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only fiv
            </p>
            <form>
                <input type="text" placeholder="Nome">
                <input type="email" placeholder="E-mail">
                <input type="submit" value="Enviar >">
            </form>
        
        </aside>

        <article>
            <img src="{{ asset('img/example.svg') }}"alt="notebook-mulher"></img>
            </article>
    </main>
</body>
</html>