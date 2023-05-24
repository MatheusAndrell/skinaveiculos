@extends('layouts.navbar')
@section('title', 'Skina Veiculos')


<!-- ==========================================
    Start Navbar Section -->

@section('navbar')
@endsection

<!-- ==========================================
    End Navbar Section -->


<!-- ===========================================
    Start Filtragem -->

<section class="section-filtragem">
    <form class="filter">
        <div class="item">
            <input name="name" type="text" placeholder="Buscar Veículo">
            <button>OK</button>
        </div>
        <div class="item">
            <select name="category">
                <option value="">Selecione o tipo de Veículo</option>
                <option value="carro">Carro</option>
                <option value="moto">Moto</option>
            </select>
        </div>
        <div class="item">
            <select name="marcas">
                <option value="">Selecione a Marca</option>
                <option value="chrevolet">Chrevolet</option>
                <option value="fiat">Fiat</option>
                <option value="ford">Ford</option>
                <option value="honda">Honda</option>
                <option value="hyundai">Hyundai</option>
                <option value="jeep">Jeep</option>
                <option value="nissan">Nissan</option>
                <option value="renault">Renault</option>
                <option value="volkswagen">Volkswagen</option>
            </select>
        </div>
        <div class="item">
            <input name="year" type="text" placeholder="Digite o Ano">
            <button>OK</button>
        </div>
        <div class="item">
            <select name="cambio">
                <option value="">Selecione o Cambio</option>
                <option value="automatica">Automática</option>
                <option value="automaticaseq">Automática sequencial</option>
                <option value="automatizada">Automatizada</option>
                <option value="dct">Automatizada dct</option>
                <option value="cvt">CVT</option>
                <option value="manual">Manual</option>
                <option value="semi">Semi-automática</option>
            </select>
        </div>
        <div class="item">
            <select name="combustivel">
                <option value="">Selecione o Combustível</option>
                <option value="alcool">Álcool</option>
                <option value="alcool-gas">Álcool e gás natural</option>
                <option value="diesel">Diesel</option>
                <option value="gas">Gás natural</option>
                <option value="gasolina">Gasolina</option>
                <option value="gasolina-alcool">Gasolina e álcool</option>
                <option value="gasolina-eletrico">Gasolina e elétrico</option>
                <option value="gasolina-gas">Gasolina e gás natural</option>
                <option value="gasolina-alcool-gas">Gasolina, álcool e gás natural</option>
                <option value="gaso-alcool-gas-benzina">Gasolina, álcool, gás natural e benzina</option>
            </select>
        </div>
        <div class="item">
            <select name="carroceria">
                <option value="">Selecione a Carroceria</option>
                <option value="buggy">Buggy</option>
                <option value="conversivel">Conversível</option>
                <option value="cupe">Cupê</option>
                <option value="hatchback">Hatchback</option>
                <option value="minivan">Minivan</option>
                <option value="perua">Perua/SW</option>
                <option value="picape">Picape</option>
                <option value="seda">Sedã</option>
                <option value="suv">SUV</option>
                <option value="van">Van/Utilitário</option>
            </select>
        </div>
    </form>
</section>

<!-- ===========================================
    End Filtragem -->


<!-- ===========================================
    Start Content -->
<section class="section-widget-estoque">
    <div class="car-widget-container">
        <div class="car-widget-venda">
            <a href="caminho/para/carro1">
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
        <div class="car-widget-venda">
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

        <div class="car-widget-venda">
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

        <div class="car-widget-venda">
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

        <div class="car-widget-venda">
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

        <div class="car-widget-venda">
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

        <div class="car-widget-venda">
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
        <div class="car-widget-venda">
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
        <div class="car-widget-venda">
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
        <div class="car-widget-venda">
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
        <div class="car-widget-venda">
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
        <div class="car-widget-venda">
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
        Start Compre Conosco Estoque-->

<section class="compre-estoque">
    <div>
        <h1>Não encontrou o que procurava? Nos chame pelo WhatsApp</h1>
    </div>
    <button class="more-infos-compre-estoque"><i class="fa-brands fa-whatsapp"></i><span>Falar pelo
            Whatsapp</span></button>
</section>

<!-- ===========================================
        End Compre Conosco Estoque -->

<!-- ===========================================
        Start Footer-->

<footer class="footer">
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
