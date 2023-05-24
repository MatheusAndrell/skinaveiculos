@section('title', 'Skina Veiculos')


<!-- ===========================================
    Start Navbar -->
@extends('layouts.navbar')
@section('navbar')
@endsection
<!-- ===========================================
    Final Navbar -->

<!-- ===========================================
    Start Slide -->
<section class="image-section">
    <img src="caminho_para_imagem1.jpg" alt="Imagem 1">
    <img src="caminho_para_imagem2.jpg" alt="Imagem 2">
    <img src="caminho_para_imagem3.jpg" alt="Imagem 3">
</section>

<!-- ===========================================
    Final Slide -->

<!-- ===========================================
    Start info-car -->
<section class="widget-container">
    <div class="widget-1">
        <div class="logocar">
            <img src="caminho_para_imagem1.jpg" alt="">
            <div class="logo-info">
                <h3>Carro</h3>
                <p>Marca: Marca do Carro</p>
            </div>
        </div>
        <div class="info-widget">
            <div class="modelo">
                <h2>Modoelo</h2>
                <p>Modelo do carro</p>
            </div>
            <div class="versao">
                <h2>Versão</h2>
                <p>Versão do carro</p>
            </div>
            <div class="ano-carro">
                <h2>Ano</h2>
                <p>2023</p>
            </div>
            <div class="km-carro">
                <p>0km</p>
            </div>
            <div class="cambio-carro">
                <h2>Câmbio</h2>
                <p>Tipo de Câmbio</p>
            </div>
            <div class="carroceria-carro">
                <h2>Carroceria</h2>
                <p>Tipo de Carroceria</p>
            </div>
            <div class="placa">
                <h2>Final da Placa</h2>
                <p>1 e 2</p>
            </div>
            <div class="cor-carro">
                <h2>Cor</h2>
                <p>Cor do carro</p>
            </div>
            <div class="combustivel-carro">
                <h2>Combustível</h2>
                <p>Gasolina e Álcool</p>
            </div>
            <div class="troca">
                <h2>Aceita Troca</h2>
                <p>Sim</p>
            </div>
            <div class="donos">
                <h2>Único Dono</h2>
                <p>Sim</p>
            </div>
            <div class="ipva">
                <h2>IPVA Pago</h2>
                <p>Sim</p>
            </div>
        </div>
        <div class="line-widget">
            <span>Itens do veículo</span>
        </div>
        <div class="itens-veiculo">
            <p><i class="fa-solid fa-check check"></i>Volante Multifuncional</p>
            <p><i class="fa-solid fa-check check"></i>Volante com regulagem de altura</p>
            <p><i class="fa-solid fa-check check"></i>Vidros elétricos</p>
            <p><i class="fa-solid fa-check check"></i>Travas elétricas</p>
            <p><i class="fa-solid fa-check check"></i>Sensor de estacionamento</p>
            <p><i class="fa-solid fa-check check"></i>Rodas de liga leve</p>
            <p><i class="fa-solid fa-check check"></i>Multimídia Completa</p>
            <p><i class="fa-solid fa-check check"></i>Freio abs</p>
            <p><i class="fa-solid fa-check check"></i>Faróis Full Led</p>
            <p><i class="fa-solid fa-check check"></i>Direção Elétrica</p>
            <p><i class="fa-solid fa-check check"></i>Computador de bordo</p>
            <p><i class="fa-solid fa-check check"></i>Chave de Presença</p>
            <p><i class="fa-solid fa-check check"></i>Câmera de Ré</p>
            <p><i class="fa-solid fa-check check"></i>Bancos em couro</p>
            <p><i class="fa-solid fa-check check"></i>Banco com regulagem elétrica</p>
            <p><i class="fa-solid fa-check check"></i>Ar Condicionado Digital</p>
            <p><i class="fa-solid fa-check check"></i>Alarme</p>
            <p><i class="fa-solid fa-check check"></i>Airbag</p>
        </div>
        <div class="line-widget">
            <span>Sobre esse veículo</span>
        </div>
        <div class="sobre-veiculo">
            <p>Texto sobre o véiculo</p>
        </div>
        
    </div>

    <div class="widget-2">
        <h2>R$ 99.999,99</h2>
        <div class="line-widget-2">
            <span>Fale com o Vendedor</span>
        </div>
        <button class="atendimento-whatsapp" type="button"><i class="fa-brands fa-whatsapp whatsapp"></i>Atendimento via WhatsApp</button>
        <div class="line-widget-2">
            <span>Visitados Recentemente</span>
        </div>
        <div class="card-veiculos">
            <div class="logo-card">
                <img src="caminho_para_imagem1.jpg" alt="">
                <div class="info-card">
                    <h3>Carro</h3>
                    <p>Marca</p>
                    <h2>R$ 99.999,99</h2>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===========================================
    Final info-car -->

    <!-- ===========================================
        Start Compre Conosco Estoque-->

<section class="compre-veiculo">
    <div>
        <h1>Não encontrou o que procurava? Nos chame pelo WhatsApp</h1>
    </div>
    <button class="more-infos-compre-veiculo"><i class="fa-brands fa-whatsapp"></i><span>Falar pelo
            Whatsapp</span></button>
</section>

<!-- ===========================================

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
