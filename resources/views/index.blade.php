<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../assets/favicon.png" type="image/x-icon">
    <title>METEORA</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="m-0 p-0">

<nav class="navbar navbar-expand-md bg-black navbar-dark"><!-- Inicio NavBar -->
    <div class="container-fluid">
        <a class="navbar-brand" href=""><h1 class="m-0"><img class="d-block" src="../assets/logo-meteora.png" alt="logo-meteora"></h1></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/index">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/lojas">Lojas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="bombando">Bombando</a>
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

<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel"> <!-- Inicio Carrosel -->
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2" class="active" aria-current="true"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3" class=""></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="w-100 img-fluid d-md-none" src="../assets/Mobile/banner1-mobile.png"
                 alt="Modelo feminina vestindo blusa rosa fluorescente, em fundo lilás.">
            <img class="w-100 img-fluid d-none d-md-block d-xl-none" src="../assets/Tablet/banner1-tablet.png"
                 alt="Modelo feminina vestindo blusa rosa fluorescente, em fundo lilás.">
            <img class="w-100 img-fluid d-none d-xl-block" src="../assets/Desktop/banner1-desktop.png"
                 alt="Modelo feminina vestindo blusa rosa fluorescente, em fundo lilás.">
        </div>
        <div class="carousel-item position-relative">
            <img class="w-100 img-fluid d-md-none" src="../assets/Mobile/banner2-mobile.png"
                 alt="Modelo feminina utilizando óculos escuros e vestindo conjunto esportivo de blusa e calça na cor preta, sentada em um sofá preto em um fundo rosa.">
            <img class="w-100 img-fluid d-none d-md-block d-xl-none" src="../assets/Tablet/banner2-tablet.png"
                 alt="Modelo feminina utilizando óculos escuros e vestindo conjunto esportivo de blusa e calça na cor preta, sentada em um sofá preto em um fundo rosa.">
            <img class="w-100 img-fluid d-none d-xl-block" src="../assets/Desktop/banner2-desktop.png"
                 alt="Modelo feminina utilizando óculos escuros e vestindo conjunto esportivo de blusa e calça na cor preta, sentada em um sofá preto em um fundo rosa.">
            <div class="carousel-caption position-absolute posicao">
                <h5 class="fs-1">COLEÇÃO ATEMPORAL</h5>
            </div>
        </div>
        <div class="carousel-item position-relative">
            <img class="w-100 img-fluid d-md-none" src="../assets/Mobile/banner3-mobile.png"
                 alt="Modelo feminina utilizando óculos escuros e vestindo conjunto esportivo de blusa e calça na cor preta, sentada em um sofá preto em um fundo rosa.">
            <img class="w-100 img-fluid d-none d-md-block d-xl-none" src="../assets/Tablet/banner3-tablet.png"
                 alt="Modelo feminina utilizando óculos escuros e vestindo conjunto esportivo de blusa e calça na cor preta, sentada em um sofá preto em um fundo rosa.">
            <img class="w-100 img-fluid d-none d-xl-block" src="../assets/Desktop/banner3-desktop.png"
                 alt="Modelo feminina utilizando óculos escuros e vestindo conjunto esportivo de blusa e calça na cor preta, sentada em um sofá preto em um fundo rosa.">
            <div class="carousel-caption position-absolute posicao">
                <h5 class="fs-1">SEMPRE NA MODA</h5>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Anterior</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Próximo</span>
    </button>
</div> <!-- Fim Carrosel -->

<h2 class="text-center my-3 my-xl-5 titulos-com-borda">Busque por categoria:</h2>

<div class="container row mx-auto g-4"> <!-- Inicio Categorias -->

    <div class="col-6 col-md-4 col-xl-2">
        <div class="card">
            <img class="d-md-none d-block" src="../assets/Mobile/categorias/categoria-camiseta.png" alt="fds">
            <img class="d-none d-md-block d-xl-none" src="../assets/Tablet/categorias/categoria-camiseta.png" alt="fds">
            <img class="d-none d-xl-block" src="../assets/Desktop/categorias/categoria-camiseta.png" alt="fds">
            <div class="card-header bg-black">
                <p class="text-center text-light">Camisas</p>
            </div>
        </div>
    </div>

    <div class="col-6 col-md-4 col-xl-2">
        <div class="card">
            <img class="d-md-none d-block" src="../assets/Mobile/categorias/categoria-bolsas.png" alt="fds">
            <img class="d-none d-md-block d-xl-none" src="../assets/Tablet/categorias/categoria-bolsas.png" alt="fds">
            <img class="d-none d-xl-block" src="../assets/Desktop/categorias/categoria-bolsa.png" alt="fds">
            <div class="card-header bg-black">
                <p class="text-center text-light">Bolsas</p>
            </div>
        </div>
    </div>

    <div class="col-6 col-md-4 col-xl-2">
        <div class="card">
            <img class="d-md-none d-block" src="../assets/Mobile/categorias/categoria-calcados.png" alt="fds">
            <img class="d-none d-md-block d-xl-none" src="../assets/Tablet/categorias/categoria-calcados.png" alt="fds">
            <img class="d-none d-xl-block" src="../assets/Desktop/categorias/categoria-calcados.png" alt="fds">
            <div class="card-header bg-black">
                <p class="text-center text-light">Calçados</p>
            </div>
        </div>
    </div>

    <div class="col-6 col-md-4 col-xl-2">
        <div class="card">
            <img class="d-md-none d-block" src="../assets/Mobile/categorias/categoria-calcas.png" alt="fds">
            <img class="d-none d-md-block d-xl-none" src="../assets/Tablet/categorias/categoria-calcas.png" alt="fds">
            <img class="d-none d-xl-block" src="../assets/Desktop/categorias/categoria-calcas.png" alt="fds">
            <div class="card-header bg-black">
                <p class="text-center text-light">Calças</p>
            </div>
        </div>
    </div>

    <div class="col-6 col-md-4 col-xl-2">
        <div class="card">
            <img class="d-md-none d-block" src="../assets/Mobile/categorias/categoria-casacos.png" alt="fds">
            <img class="d-none d-md-block d-xl-none" src="../assets/Tablet/categorias/categoria-casacos.png" alt="fds">
            <img class="d-none d-xl-block" src="../assets/Desktop/categorias/categoria-casacos.png" alt="fds">
            <div class="card-header bg-black">
                <p class="text-center text-light">Casacos</p>
            </div>
        </div>
    </div>

    <div class="col-6 col-md-4 col-xl-2">
        <div class="card">
            <img class="d-md-none d-block" src="../assets/Mobile/categorias/categoria-oculos.png" alt="fds">
            <img class="d-none d-md-block d-xl-none" src="../assets/Tablet/categorias/categoria-oculos.png" alt="fds">
            <img class="d-none d-xl-block" src="../assets/Desktop/categorias/categoria-oculos.png" alt="fds">
            <div class="card-header bg-black">
                <p class="text-center text-light">Óculos</p>
            </div>
        </div>
    </div>

</div> <!-- Fim Categorias -->

<h2 class="container text-center my-3 my-xl-5">Produtos que estão Bombando!</h2>

<div class="container row mx-auto g-4"> <!-- Inicio Produtos -->

    <div class="col-12 col-md-6 col-lg-4 pb-4">
        <div class="card">
            <img class="d-md-none d-block" src="../assets/Mobile/produtos/camiseta.png" alt="fds">
            <img class="d-none d-md-block d-xl-none" src="../assets/Tablet/produtos/camiseta.png" alt="fds">
            <img class="d-none d-xl-block" src="../assets/Desktop/produtos/camiseta.png" alt="fds">
            <div class="card-body">
                <h5 class="card-title">Camiseta confort</h5>
                <p class="card-text">Multicores e tamanhos. Tecido de algodão 100% fresquinho para o verão.</p>
                <p>R$70,00</p>
                <a href="#" class="btn btn-dark rounded-0">Ver mais</a>
            </div>
        </div>
    </div>

    <div class="col-12 col-md-6 col-lg-4 pb-4">
        <div class="card">
            <img class="d-md-none d-block" src="../assets/Mobile/produtos/calca.png" alt="fds">
            <img class="d-none d-md-block d-xl-none" src="../assets/Tablet/produtos/calca.png" alt="fds">
            <img class="d-none d-xl-block" src="../assets/Desktop/produtos/calca.png" alt="fds">
            <div class="card-body">
                <h5 class="card-title">Calça Alfaiataria</h5>
                <p class="card-text">Modelo Wide Leg alfaiataria em linho. Uma peça para vida toda! Bem feminina.</p>
                <p>R$180,00</p>
                <a href="#" class="btn btn-dark rounded-0">Ver mais</a>
            </div>
        </div>
    </div>

    <div class="col-12 col-md-6 col-lg-4 pb-4">
        <div class="card">
            <img class="d-md-none d-block" src="../assets/Mobile/produtos/tenis.png" alt="fds">
            <img class="d-none d-md-block d-xl-none" src="../assets/Tablet/produtos/tenis.png" alt="fds">
            <img class="d-none d-xl-block" src="../assets/Desktop/produtos/tenis.png" alt="fds">
            <div class="card-body">
                <h5 class="card-title">Tênis Chunkyo</h5>
                <p class="card-text">Snicker casual com solado mais alto e modelagem robusta. Modelo unissex.</p>
                <p>R$250,00</p>
                <a href="#" class="btn btn-dark rounded-0">Ver mais</a>
            </div>
        </div>
    </div>

</div> <!-- Fim Produtos -->

<a href="links-navbar/bombando.html" type="button" class="container d-flex mb-3 w-25 justify-content-center btn btn-outline-dark rounded-0 py-2">Ver mais</a>

<section class="py-4 bg-black"><!-- Inicio Facilidades -->

    <h2 class="pb-2 text-center text-light">Conheça todas as nossas facilidades</h2>

    <div class="d-flex flex-column flex-lg-row justify-content-center align-items-center gap-3 px-3">
        <div class="divs-facilidades d-flex">
            <div><i class="bi bi-x-diamond fs-1 texto-cor-verde"></i></div>
            <div>
                <div class="ms-3 mb-1 texto-cor-verde">PAGUE PELO PIX</div>
                <div class="texto-menor ms-3 text-light">Ganhe 5% OFF em pagamentos via PIX</div>
            </div>
        </div>

        <div class="divs-facilidades d-flex">
            <div><i class="bi bi-arrow-repeat fs-1 texto-cor-verde"></i></div>
            <div>
                <div class="ms-3 mb-1 texto-cor-verde">TROCA GRÁTIS</div>
                <div class="texto-menor ms-3 text-light">Fique livre para trocar em até 30 dias</div>
            </div>
        </div>

        <div class="divs-facilidades d-flex">
            <div><i class="bi bi-flower1 fs-1 texto-cor-verde"></i></div>
            <div>
                <div class="ms-3 mb-1 texto-cor-verde">SUSTENTABILIDADE</div>
                <div class="texto-menor ms-3 text-light">Moda responsável, que respeita o meio ambiente</div>
            </div>
        </div>
    </div>

</section> <!-- Fim Facilidades -->

<div class="container"> <!-- Inicio Form -->
    <form class="container w-75 d-flex flex-column border border-secondary my-3 my-xl-5 p-3 text-center">

        <h5>Quer receber nossas novidades, promoções exclusivas e 10% OFF na primeira compra? Cadastre-se!</h5>

        <div class="input-group my-3">
            <input type="email" class="form-control border-secondary rounded-0" placeholder="Digite seu e-mail" aria-label="Digite seu e-mail" aria-describedby="button-addon2" />
            <button class="btn btn-outline-dark" type="button" id="button-addon2">Enviar</button>
        </div>

    </form>
</div> <!-- Fim Form -->

<footer class="text-center bg-black"> <!--Inicio Footer-->
    <p class="py-3 text-light">2024 <i class="bi bi-c-circle"></i> Desenvolvido por Lucas | Projeto fictício sem fins comerciais.</p>
</footer> <!--Fim Footer-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
