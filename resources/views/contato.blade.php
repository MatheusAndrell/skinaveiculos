@extends('layouts.navbar')
@section('title', 'Skina Veiculos')

<!-- ==========================================
    Start Navbar Section -->

@section('navbar')
@endsection

<!-- ==========================================
    End Navbar Section -->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato</title>
</head>
<body>

    <div class="contato_titulo_estilizacao">  
        <div class="contato_maps_flexbox">
            <div class="contato_texto_flexbox">    
                    <h1 class="contato__titulo">Contato</h1>
                    <p class="contato_titulo_descricao">Se você tiver alguma dúvida, sugestão ou precisar entrar em contato com a Skina Veículos.</p>
                    <ul class="contato_dados_contato">
                        <li>Endereço: Rua Frei Caneca 236, Três Pontas, MG, Brazil</li>
                        <li>Telefone: (35) 3266-1112</li>
                        <li>E-mail: guto.vmiranda@gmail.com</li>
                        <li>Segunda a sexta-feira: 09:00 - 18:00</li>
                        <li>Sábado: 09:00 - 12:00</li>
                    </ul>

                    <div class="contato_redessociais_posicionamento">
                        
                        <div id="footer_social_media">
                            <a href="https://www.instagram.com/skinaveiculostrespontas/" class="footer-link" id="instagram">
                            <i class="fab fa-instagram"></i>
                            </a>
        
                            <a href="https://www.facebook.com/profile.php?id=100063786510443" class="footer-link" id="facebook">
                            <i class="fab fa-facebook-f"></i>
                            </a>
        
                            <a href="https://api.whatsapp.com/send?phone=%2B5535999716343&data=AWAAcjTdpliP_GRRItl-GwARpze8WP3iNXm98Y4jyvwl4uqnqjCCrAttLc1xagFjrwekg1LJ4Npxw-kNTNy8Syh0-PVfoEZs-3dXnatrZbPQzt6gceq0oov2Qi21HH21Vav9okFzITcsptLnHMyXASM-BtuCiW-afhSgOgXhqzmfCQEwbt9c9KaMWGAij7cyoNn51bQRnOyDJRIcA0bwDQz0DrPDcX5VoHnMZfJvsyNS-Vkfy9vLkJYO7relQwn457H8LbHab_8aP9rfhSlLMj70nfnJmOy7UqRoELiRP7LcGoiMKWg&source=FB_Page&app=facebook&entry_point=page_cta&fbclid=IwAR0ChCNlGT5wLASxwi0utYYI-Mj0y4FqgniqA4NcDrgDJK2KUDIgysPu5dk" class="footer-link" id="whatsapp">
                            <i class="fab fa-whatsapp"></i>
                            </a>
                        </div>
                </div>
            </div> 

                <div class="contato_mapa_localizacao">
                    <iframe src="https://www.google.com/maps/embed?pb=!4v1684190438840!6m8!1m7!1s8-r2QcSw5PhbhbElfVKA7Q!2m2!1d-21.36726905910468!2d-45.50984525742897!3f244.01803130009793!4f-4.323649900489144!5f0.4000000000000002" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

        </div>
    </div>

        <div class="contato__container">
            <div class="contato_formulario_form">
                <section class="contato_contact_form">
                    <h1 class="contato_contactform_descricao">Entre em contato</h1>
                        <form action="enviar.php" method="POST">
                                <div class="contato__form-group">
                                    <label for="nome">Nome:</label>
                                    <input type="text" id="nome" name="nome" required>
                                </div>
         
                                <div class="contato__form-group">
                                    <label for="email">Email:</label>
                                    <input type="email" id="email" name="email" required>
                                </div>
                  
                                <div class="contato__form-group">
                                    <label for="telefone">Telefone:</label>
                                    <input type="telefone" id="telefone" name="telefone" required>
                                </div>
                  
                                <div class="contato__form-group">
                                    <label for="mensagem">Mensagem:</label>
                                    <textarea id="mensagem" name="mensagem" rows="3" required></textarea>
                                </div>
                  
                                <input type="submit" value="Enviar">
                        </form>
                </section>
            </div>
        </div>

</body>
</html>
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
        