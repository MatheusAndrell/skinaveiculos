@section('title', 'Skina Veiculos')


<!-- ===========================================
    Start Navbar -->
@extends('layouts.navbar')
@section('navbar')
@endsection
<!-- ===========================================
    Final Navbar -->

<!-- ==========================================
    Start Banner -->

<section class="banner-section">
    <div class="banner">
    </div>
    <div class="line">
    </div>
</section>
<!-- ==========================================
    End Banner Section -->

<!-- ===========================================
    Start Content -->
<section class="section-widget">
    <div class="car-widget-container">

        @foreach ($veiculos as $veiculo)
            <div class="car-widget">
                <a href="{{ route('visualizar', ['slug' => $veiculo->slug]) }}">
                    <img src="{{ Storage::url(App\Helpers\ImagemHelper::get($veiculo->imagens)) }}" alt="Carro 1">
                    <div class="car-line"></div>
                    <h1>{{ $veiculo->marca->nome }} {{ $veiculo->modelo }} </h1>
                    <p>
                        {{ $veiculo->sobre }}
                    </p>
                    <h2>R$ {{ number_format($veiculo->preco, 2) }}</h2>
                    <h3>{{ $veiculo->ano }} {{ number_format($veiculo->quilometragem) }}km</h3>
                </a>
            </div>
        @endforeach


        <a href="{{ route('estoque') }}" class="more-cars-btn">
            <i class="fa-solid fa-circle-chevron-right custom-arrow"></i>
            <span>Ver mais carros</span>
        </a>
        </a>
    </div>
</section>

<!-- ===========================================
        Final Content -->

<!-- ===========================================
    Start News -->
<section class="news">
    <div class="text-news">
        <h2>Novidades</h2>
        <p>Oportunidades únicas<br>que vendem rápido.</p>
    </div>
    <div class="buttons-widget">
        <button class="prev-buttonn"><i class="fa-solid fa-chevron-left"></i></button>
        <button class="next-buttonn"><i class="fa-solid fa-chevron-right"></i></button>
    </div>
    <div class="car-news-container">
        @foreach ($novidades as $novidade)
            <div class="car-news">
                <a href="{{ route('visualizar', ['slug' => $veiculo->slug]) }}">
                    <img src="{{ Storage::url(App\Helpers\ImagemHelper::get($novidade->imagens)) }}" alt="Carro 2">
                    <div class="car-line"></div>
                    <h1>{{ $novidade->marca->nome }} {{ $novidade->modelo }}</h1>
                    <p>{{ $novidade->sobre }}</p>
                    <h2>R$ {{ number_format($novidade->preco, 2) }}</h2>
                    <h3>{{ $novidade->ano }} {{ number_format($novidade->quilometragem) }}km</h3>
                </a>
            </div>
        @endforeach
    </div>
</section>
<!-- ===========================================
        Final News-->

<!-- ===========================================
        Start News-->

<section class="testament">
    <h1>Relatos dos nossos clientes</h1>
    <div class="swiper mySwiper">
        <div class="swiper-button-next next-button"></div>
        <div class="swiper-button-prev prev-button"></div>
        <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="/img/depoiments/depoiment1.jpeg" alt="Carro 1"></div>
            <div class="swiper-slide"><img src="/img/depoiments/depoiment2.jpeg" alt="Carro 1"></div>
            <div class="swiper-slide"><img src="/img/depoiments/depoiment3.jpeg" alt="Carro 1"></div>
            <div class="swiper-slide"><img src="/img/depoiments/depoiment4.jpeg" alt="Carro 1"></div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".mySwiper", {
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            loop: true,
            watchOverflow: true,
        });
    </script>
</section>

<!-- ===========================================
        Final News-->

<!-- ===========================================
        Start About us-->
<section class="aboutus">
    <div class="text-aboutus">
        <div class="content">
            <div class="text">
                <h1>Quem Somos</h1>
                <p>A Skina Veiculos surgiu de um sonho de criança, que foi construído com muita persistência e
                    concretizado com o apoio
                    da esposa, filhos e toda a equipe Skina, que são uma família, e por isso, o nosso maior combustível
                    é
                    realizar sonhos em forma de carros!</p>

                <a href="{{ route('sobre-nos') }}"><button class="more-infos"><span>Saiba mais<i
                                class="fa-solid fa-chevron-right"></i></span></button></a>
            </div>
            <div class="map-container">
                <iframe class="maps"
                    src="https://www.google.com/maps/embed?pb=!4v1684190438840!6m8!1m7!1s8-r2QcSw5PhbhbElfVKA7Q!2m2!1d-21.36726905910468!2d-45.50984525742897!3f244.01803130009793!4f-4.323649900489144!5f0.4000000000000002"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</section>


<!-- ===========================================
        Final About us-->


<!-- ===========================================
        Start venda seu carro-->

<section class="venda">
    <div class="text-venda">
        <div class="content-venda">
            <div class="text-venda">
                <h1>VENDA SEU CARRO DE FORMA RÁPIDA.</h1>
                <p>Receba uma proposta da nossa equipe em seu carro.
                    Analisamos seu usado em minutos com a melhor avaliação do mercado.</p>
                    <a href="{{ route('contato.index') }}"><button class="more-infos-venda"><span>Saiba mais<i class="fa-solid fa-car"></i></span></button></a>
            </div>
        </div>
    </div>
    <div class="image-container">
        <img class="image" src="{{ Storage::url($imagemAleatoria) }}" alt="Imagem">
    </div>
</section>


<!-- ===========================================
        End venda seu carro-->

<!-- ===========================================
        Start Compre Conosco-->

<section class="compre">
    <div>
        <h1>Agora que já nos conhece vamos fazer negócio?</h1>
    </div>
    <button class="more-infos-compre"><i class="fa-brands fa-whatsapp"></i><span>Negociar pelo
            Whatsapp</span></button>
</section>

<!-- ===========================================
        End Compre Conosco-->

<!-- ===========================================
        Start Footer-->
<footer class="galaxy-footer">
    <div id="footer_content">
        <div id="footer_contacts">
            <h1>Skina Veiculos</h1>
            <p>It's all about your dreams.</p>

            <div id="footer_social_media">
                <a href="#" class="footer-link" id="instagram">
                    <i class="fab fa-instagram"></i>
                </a>

                <a href="#" class="footer-link" id="facebook">
                    <i class="fab fa-facebook-f"></i>
                </a>

                <a href="#" class="footer-link" id="whatsapp">
                    <i class="fab fa-whatsapp"></i>
                </a>
            </div>
        </div>

        <ul class="footer-list">
            <h3>Endereço: Rua Frei Caneca 236, Três Pontas, MG, Brazil</h3>
        </ul>

        <ul class="footer-list">
            <li>
                <h3>Segunda a Sexta-feira: 09:00 - 18:00
                    <br>
                    Sábado: 09:00 - 12:00
                </h3>
            </li>
        </ul>
        <div id="footer_subscribe">
            <h3>Subscribe</h3>

            <p>
                Envie sua mensagem para nós
            </p>

            <div id="input_group">
                <input type="email" id="email">
                <button>
                    <i class="fas fa-mail-bulk"></i>
                </button>
            </div>
        </div>
    </div>

    <div id="footer_copyright">
        &#169
        2023 Todos os Direitos Reservados
    </div>
</footer>
<!-- ===========================================
        End Footer-->
