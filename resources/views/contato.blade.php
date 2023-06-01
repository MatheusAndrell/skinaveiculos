@extends('layouts.navbar')

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
<section class="contato">
    <div class="contactUs">
        <div class="title">
            <h2> Get in Touch</h2>
        </div>
        <div class="box">
            <!-- Form -->
            <div class="contact form">
                <h3>Envie uma Mensagem</h3>
                <form>
                    <div class="formBox">
                        <div class="row50">
                            <div class="inputBox">
                                <span>First Name</span>
                                <input type="text" placeholder="John">
                            </div>
                            <div class="inputBox">
                                <span>Last Name</span>
                                <input type="text" placeholder="Doe">
                            </div>
                        </div>
                        <div class="row50">
                            <div class="inputBox">
                                <span>Email</span>
                                <input type="text" placeholder="Johndoe@example.com">
                            </div>
                            <div class="inputBox">
                                <span>Celular</span>
                                <input type="text" placeholder="(__) _____-____">
                            </div>
                        </div>
                        <div class="row100">
                            <div class="inputBox">
                                <span>message</span>
                                <textarea placeholder="Escreva sua mensagem aqui..."></textarea>
                            </div>
                        </div>
                        <div class="row100">
                            <div class="inputBox">
                                <input type="submit" value="send">
                            </div>
                        </div>
                </form>
            </div>

            <!-- Info Box -->
            <div class="contact info">
                <h3>Contact Info</h3>
                <div class="infobox">
                    <div>
                        <span><i class="fa-solid fa-map-location-dot location"></i></span>
                        <p>Lorem ipsum dolor sit amet.</p>
                    </div>
                    <div>
                        <span><i class="fa-regular fa-envelope mail"></i></span>
                        <a href="mailto:teste@email.com">teste@email.com</a>
                    </div>
                    <div>
                        <span><i class="fa-solid fa-phone call"></i></span>
                        <a href="tel:+13123123">11984808474</a>
                    </div>
                    <!-- Social Media Links -->
                    <ul class="sci">
                        <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-whatsapp"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>

       </div>
    </div>
</section>
