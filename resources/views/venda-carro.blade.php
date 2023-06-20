@extends('layouts.navbar')
@section('title', 'Skina Veiculos')


<!-- ==========================================
    Start Navbar Section -->

@section('navbar')
@endsection

<!-- ==========================================
    End Navbar Section -->




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
</section>

{{-- @foreach ($veiculos as $veiculo)
<div class="car-widget-venda">
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
@endforeach --}}
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

        <footer class="footer-venda">
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
