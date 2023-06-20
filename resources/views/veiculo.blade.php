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
    @foreach($veiculo->imagens as $imagem)
        <img src="{{ Storage::url($imagem->url) }}" alt="Imagem 1">
    @endforeach
</section>

<!-- ===========================================
    Final Slide -->

<!-- ===========================================
    Start info-car -->
<section class="widget-container">
    <div class="widget-1">
        <div class="logocar">
            <img src="{{ Storage::url(\App\Helpers\ImagemHelper::get($veiculo->imagens)) }}" alt="">
            <div class="logo-info">
                <h3>{{ $veiculo->tipo->nome }}</h3>
                <p>Marca: {{ $veiculo->marca->nome }}</p>
            </div>
        </div>
        <div class="info-widget">
            <div class="modelo">
                <h2>Modelo</h2>
                <p>{{ $veiculo->modelo }}</p>
            </div>
            <div class="ano-carro">
                <h2>Ano</h2>
                <p>{{ $veiculo->ano }}</p>
            </div>
            <div class="km-carro">
                <h2>Quilometragem</h2>
                <p>{{ $veiculo->quilometragem }}km</p>
            </div>
            <div class="placa">
                <h2>Final da Placa</h2>
                <p>{{ substr($veiculo->placa, -2)}}</p>
            </div>
            <div class="cor-carro">
                <h2>Cor</h2>
                <p>{{ $veiculo->cor }}</p>
            </div>
            <div class="troca">
                <h2>Aceita Troca</h2>
                <p>{{ $veiculo->aceita_troca ? 'Sim' : 'Não' }}</p>
            </div>
            <div class="ipva">
                <h2>IPVA Pago</h2>
                <p>{{ $veiculo->ipva_pago ? 'Sim' : 'Não' }}</p>
            </div>
        </div>
        <div class="line-widget">
            <span>Itens do veículo</span>
        </div>
        <div class="itens-veiculo">
            @foreach($veiculo->funcoes as $funcoes)
                <p><i class="fa-solid fa-check check"></i>{{ $funcoes->funcao->nome }}</p>
            @endforeach
        </div>
        <div class="line-widget">
            <span>Sobre esse veículo</span>
        </div>
        <div class="sobre-veiculo">
            <p>{{ $veiculo->sobre }}</p>
        </div>
        
    </div>

    <div class="widget-2">
        <h2>R$ {{ number_format($veiculo->preco, 2) }}</h2>
        <div class="line-widget-2">
            <span>Fale com um Vendedor</span>
        </div>
        <button class="atendimento-whatsapp" type="button"><i class="fa-brands fa-whatsapp whatsapp"></i>Atendimento via WhatsApp</button>
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
                        <h3>Endereço: Rua Frei Caneca 236, Três Pontas, MG, Brazil</h3>
                </ul>
        
                <ul class="footer-list">
                    <li>
                        <h3>Segunda a Sexta-feira: 09:00 - 18:00
                            <br>
                            Sábado: 09:00 - 12:00</h3>
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
