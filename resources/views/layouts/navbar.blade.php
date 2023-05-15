<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title')</title>

    <link rel="stylesheet" href="/css/frontend.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/84534b9145.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
</head>
@yield('navbar')
<header>
    <div class="hero">
        <nav>
            <img src="/img/skina/skina-m.png" alt="Logo da Skina" class="logo">
            <ul>
                <li><a href="{{ route('inicio') }}">Início</a></li>
                <li><a href="{{ route('venda-carro') }}">Estoque</a></li>
                <li><a href="{{ route('sobre-nos') }}">Sobre nos</a></li>
                <li><a href="{{ route('contato') }}">Contato</a></li>
            </ul>
            <button class="atendimento" type="button"><i
                    class="fa-brands fa-whatsapp whatsapp"></i>Atendimento</button>
        </nav>
    </div>
</header>

</html>
