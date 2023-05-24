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

<section class="banner">
    <div class="line">

    </div>
</section>
<!-- ==========================================
    End Banner Section -->

<!-- ===========================================
    Start Content -->
<section class="section-widget">
    <div class="car-widget-container">
        <div class="car-widget">
            <a href="{{ ('veiculo') }}">
                <img src="/img/cars/UnoEconomy.jpg" alt="Carro 1">
                <div class="car-line"></div>
                <h1>Fiat UNO </h1>
                <p>ECONOMY CELEBRATION
                    <br>
                    Manual
                </p>
                <h2>R$ 50.000,00</h2>
                <h3>2013 50.000km</h3>
            </a>
        </div>
        <div class="car-widget">
            <a href="caminho/para/carro1">
                <img src="/img/cars/Onix  1.0 (4).jpg" alt="Carro 1">
                <div class="car-line"></div>
                <h1>Chrevolet ONIX</h1>
                <p>1.0 MPFI LT
                    <br>
                    Manual
                </p>
                <h2>R$ 47.000,00</h2>
                <h3>2015 50.000km</h3>
            </a>
        </div>

        <div class="car-widget">
            <a href="caminho/para/carro1">
                <img src="/img/cars/Duster.jpg" alt="Carro 1">
                <div class="car-line"></div>
                <h1>Renault DUSTER</h1>
                <p>1.6 DYNAMIQUE 4X2
                    <br>
                    Manual
                </p>
                <h2>R$ 51.000,00</h2>
                <h3>2014 50.000km</h3>
            </a>
        </div>

        <div class="car-widget">
            <a href="caminho/para/carro1">
                <img src="/img/cars/Crossfox.jpg" alt="Carro 1">
                <div class="car-line"></div>
                <h1>Wolksagen CROSSFOX</h1>
                <p>1.6 MI FLEX
                    <br>
                    Manual
                </p>
                <h2>R$ 30.000,00</h2>
                <h3>2006 50.000km</h3>
            </a>
        </div>

        <div class="car-widget">
            <a href="caminho/para/carro1">
                <img src="/img/cars/rallye.jpg" alt="Carro 1">
                <div class="car-line"></div>
                <h1>Wolksagen GOL</h1>
                <p>1.6 RALLYE
                    <br>
                    Manual
                </p>
                <h2>R$ 29.000,00</h2>
                <h3>2008 50.000km</h3>
            </a>
        </div>

        <div class="car-widget">
            <a href="caminho/para/carro1">
                <img src="/img/cars/Prisma.jpg" alt="Carro 1">
                <div class="car-line"></div>
                <h1>Renault PRISMA</h1>
                <p> 1.4 MAX
                    <br>
                    Manual
                </p>
                <h2>R$ 28.000,00</h2>
                <h3>2011 50.000km</h3>
            </a>
        </div>

        <div class="car-widget">
            <a href="caminho/para/carro1">
                <img src="/img/cars/Gol 1.0.jpg" alt="Carro 1">
                <div class="car-line"></div>
                <h1>Wolksagen GOL</h1>
                <p>1.0 TREND
                    <br>
                    Manual
                </p>
                <h2>R$ 33.000,00</h2>
                <h3>2013 50.000km</h3>
            </a>
        </div>

        <button class="more-cars-btn">
            <i class="fa-solid fa-circle-chevron-right custom-arrow"></i>
            <span>Ver mais carros</span>
        </button>

    </div>
</section>

<!-- ===========================================
        Final Content -->

<!-- ===========================================
    Start News -->

<section class="news">
    <div class="text-news">
        <h2>Novidades</h2>
        <p>Oportunidades únicas
            <br>
            que vendem rápido.
        </p>
    </div>
    <div class="car-news-container">
        <div class="car-news">
            <a href="caminho/para/carro1">
                <img src="/img/cars/rallye.jpg" alt="Carro 1">
                <div class="car-line"></div>
                <h1>Wolksagen GOL</h1>
                <p>1.6 RALLYE
                    <br>
                    Manual
                </p>
                <h2>R$ 29.000,00</h2>
                <h3>2008 50.000km</h3>
            </a>
        </div>

        <div class="car-news">
            <a href="caminho/para/carro1">
                <img src="/img/cars/Prisma.jpg" alt="Carro 1">
                <div class="car-line"></div>
                <h1>Renault PRISMA</h1>
                <p> 1.4 MAX
                    <br>
                    Manual
                </p>
                <h2>R$ 28.000,00</h2>
                <h3>2011 50.000km</h3>
            </a>
        </div>

        <div class="car-news">
            <a href="caminho/para/carro1">
                <img src="/img/cars/Gol 1.0.jpg" alt="Carro 1">
                <div class="car-line"></div>
                <h1>Wolksagen GOL</h1>
                <p>1.0 TREND
                    <br>
                    Manual
                </p>
                <h2>R$ 33.000,00</h2>
                <h3>2013 50.000km</h3>
            </a>
        </div>
    </div>

</section>

<!-- ===========================================
        Final News-->

<!-- ===========================================
        Start News-->

<section class="testament">
    <h1>Relatos dos nossos clientes</h1>
    <div class="swiper mySwiper">
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
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
                    da esposa, filhos e toda a equipe Delta, que são uma família, e por isso, o nosso maior combustível
                    é
                    realizar sonhos em forma de carros!</p>

                <button class="more-infos"><span>Saiba mais<i class="fa-solid fa-chevron-right"></i></span></button>
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
                <button class="more-infos-venda"><span>Saiba mais<i class="fa-solid fa-car"></i></span></button>
            </div>
        </div>
    </div>
    <div class="image-container">
        <img class="image" src="/img/cars/rallye.jpg" alt="Imagem">
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
                <button class="more-infos-compre"><i class="fa-brands fa-whatsapp"></i><span>Negociar pelo Whatsapp</span></button>
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
                    <li>
                        <h3>Blog</h3>
                    </li>
                    <li>
                        <a href="#" class="footer-link">Tech</a>
                    </li>
                    <li>
                        <a href="#" class="footer-link">Adventures</a>
                    </li>
                    <li>
                        <a href="#" class="footer-link">Music</a>
                    </li>
                </ul>
        
                <ul class="footer-list">
                    <li>
                        <h3>Products</h3>
                    </li>
                    <li>
                        <a href="#" class="footer-link">App</a>
                    </li>
                    <li>
                        <a href="#" class="footer-link">Desktop</a>
                    </li>
                    <li>
                        <a href="#" class="footer-link">Cloud</a>
                    </li>
                </ul>
        
                <div id="footer_subscribe">
                    <h3>Subscribe</h3>
        
                    <p>
                        Enter your e-mail to get notified about
                        our news solutions
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
