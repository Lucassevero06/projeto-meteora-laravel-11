<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../assets/favicon.png" type="image/x-icon">
    <title>Lojas - METEORA</title>
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
        <a class="navbar-brand" href=""><h1 class="m-0"><img class="d-block" src="../assets/logo-meteora.png" alt="logo-meteora"></h1></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Home</a>
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
                    <a class="nav-link" href="/suporte">Suporte</a>
                </li>
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2 rounded-0" type="search" placeholder="Digite o produto" aria-label="Pesquisar">
                <button class="btn btn-outline-light rounded-0" type="submit">Buscar</button>
            </form>
        </div>
    </div>
</nav><!-- Fim NavBar -->

<main> <!--Inicio Maps-->
    <h2 class="container text-center my-3 my-xl-3">Encontre a loja mais <mark class="mark-cor-verde">próxima de você!</mark></h2>
    <p class="container text-center">
        Compre online e retire na loja mais conveniente para você. Utilize o mapa abaixo para ver qual loja fica mais próxima da sua casa ou trabalho.
    </p>
    <p class="container text-center">
        Aproveite a praticidade de retirar seu pedido em uma de nossas unidades físicas. Escolha a loja que te oferecer
        a melhor experiência de compra, seja pela localização, horário de
        funcionamento ou facilidade de acesso.
    </p>
    <ul class="container text-center list-group w-50 border border-warning mb-4 p-0 rounded-0">
        <li class="list-group-item">Utilize o zoom do mapa para visualizar as lojas com mais detalhes.</li>
        <li class="list-group-item">Clique no marcador de cada loja para ver o endereço, telefone e horário de
            funcionamento.</li>
        <li class="list-group-item">O tempo de entrega para retirada na loja pode variar de acordo com a disponibilidade
            do produto.</li>
    </ul>
    <iframe class="container-fluid" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4035570.9734693305!2d-67.1666685664737!3d-8.973316835741208!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x922d328ca4a88c47%3A0x4380950ed6230760!2sPorto%20Velho%20-%20RO!5e0!3m2!1spt-BR!2sbr!4v1716986156011!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</main> <!--Fim Maps-->

<footer class="text-center bg-black"> <!--Inicio Footer-->
    <p class="py-3 text-light">2024 <i class="bi bi-c-circle"></i> Desenvolvido por Lucas | Projeto fictício sem
        fins comerciais.</p>
</footer>
<!--Fim Footer-->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
