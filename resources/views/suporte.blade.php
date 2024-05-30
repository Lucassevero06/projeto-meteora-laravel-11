<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/assets/favicon.png" type="image/x-icon">
    <title>Suporte - METEORA</title>
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style> {{--Inicio style geral--}}
        body {
            height: 100vh;
        }

        h1, h2, h3, h4, h5, p, a {
            font-family: "Montserrat", sans-serif;
        }

        .texto-menor {
            font-size: 13px;
        }

        .divs-facilidades{
            width: 325px;
        }

        .texto-cor-verde {
            color: #DAFF01;
        }

        .mark-cor-verde {
            background-color: #DAFF01;
        }

        .botao-lilas {
            background-color: #9353FF;
        }

        .posicao{
            top: 40%;
        }

        @media(max-width: 767px){
            .posicao{
                top:60%;
            }
        }
    </style> {{--Fim style geral--}}
</head>
<body>

<nav class="navbar navbar-expand-md bg-black navbar-dark"><!-- Inicio NavBar -->
    <div class="container-fluid">
        <a class="navbar-brand" href="/"><h1 class="m-0"><img class="d-block" src="../assets/logo-meteora.png" alt="logo-meteora"></h1></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/lojas">Lojas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/bombando">Bombando</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/promocao">Promoção</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="/suporte">Suporte</a>
                </li>
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2 rounded-0" type="search" placeholder="Digite o produto" aria-label="Pesquisar">
                <button class="btn btn-outline-light rounded-0" type="submit">Buscar</button>
            </form>
        </div>
    </div>
</nav><!-- Fim NavBar -->

<main style="min-height: 100%;" class=" w-100 container d-flex flex-column align-items-center justify-content-center"> <!--Inicio Form-->
    <form action="#" class=" form-control border border-dark p-4 rounded-4 w-75 shadow-lg p-3 mb-5 bg-body-tertiary rounded" style="max-width: 600px;">
        <div>
            <h3 class="text-center text-dark mb-4">Fale Conosco</h3>
            <div class="form-floating mb-3">
                <input type="email" class="form-control focus-ring focus-ring-light px-2 text-decoration-none border rounded-2" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email:</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control focus-ring focus-ring-light px-2 text-decoration-none border rounded-2" id="floatingInput" placeholder="Seu nome">
                <label for="floatingInputName">Seu nome:</label>
            </div>
            <div>
                <textarea class="form-control focus-ring focus-ring-light py-1 px-2 text-decoration-none border rounded-2" placeholder="Escreva aqui:" id="floatingTextarea2" rows="6"></textarea>
            </div>
        </div>
        <button type="button" class="mt-3 btn btn-outline-dark w-100">Enviar</button>
    </form>
</main> <!--Fim Form-->

<footer class="text-center bg-black"><!--Inicio Footer-->
    <p class="py-3 text-light">2024 Projeto fictício sem
        fins comerciais.</p>
</footer> <!--Fim Footer-->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>
</body>
