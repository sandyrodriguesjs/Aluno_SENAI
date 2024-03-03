<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <script src="{{ asset('js/bootstrap.js') }}"></script>
    <title>Aluno Senai</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-primary">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="#">Minha<br>Aprendizagem</a>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item border border-dark mx-2 rounded">
                <a class="nav-link active" aria-current="page" href="#">Inicio</a>
                </li>
                <li class="nav-item border border-dark mx-2 rounded">
                <a class="nav-link" href="#">Sobre</a>
                </li>
                <li class="nav-item border border-dark mx-2 rounded">
                <a class="nav-link" href="#">Contato</a>
                </li>
                <li class="nav-item border border-dark rounded">
                <a class="nav-link" href="#">Já tem uma conta?</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>
    <main class="p-3">
        <div class="row align-items-start">
            <div class="card shadow col-6">
                <div class="card-body">
                    <aside> <h1>Inscreva-se agora!</h1>
                            <h2>Acompanhe sua trajetória no período de Aprendizagem</h2>
                        <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only fiv
                        </p>
                        <form class="row align-items-start mb-3">
                            <div class="col-7">
                                <input type="text" placeholder="Nome" class="form-control rounded-pill">
                            </div>
                            <div class="col-7 mt-2">
                                <input type="email" placeholder="E-mail" class="form-control rounded-pill">
                            </div>
                            <div class="mt-2">
                                <button type="submit" class="btn btn-primary rounded-pill">Enviar</button>
                            </div>
                        </form>
                    
                    </aside>
                </div>
            </div>
    
            <article class="col-3">
                <img src="{{ asset('img/example.svg') }}" height="400px" alt="notebook-mulher"></img>
            </article>
        </div>
    </main>
</body>
</html>