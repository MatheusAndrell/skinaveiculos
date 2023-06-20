<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title')</title>

    <link rel="stylesheet" href="/css/frontend.css">
    <script src="/js/button.js"></script>
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
        <nav class="nav-bar">
            <input type="checkbox" id="menu-toggle" class="menu-toggle">
            <label for="menu-toggle" class="menu-icon">
                <span></span>
                <span></span>
                <span></span>
            </label>
            <img src="/img/skina/skina-m.png" alt="Logo da Skina" class="logo">
            <ul class="nav-menu">
                <li><a href="{{ route('home') }}">Início</a></li>
                <li><a href="{{ route('venda-carro') }}">Estoque</a></li>
                <li><a href="{{ route('sobre-nos') }}">Sobre nós</a></li>
                <li><a href="{{ route('contato') }}">Contato</a></li>
            </ul>
            <button class="atendimento" type="button"><i class="fa-brands fa-whatsapp whatsapp"></i>Atendimento</button>
        </nav>
    </div>
</header>


</html>
