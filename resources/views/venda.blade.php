@section('title', 'Skina Veiculos')


<!-- ===========================================
    Start Navbar -->
@extends('layouts.navbar')
@section('navbar')
@endsection
<!-- ===========================================
    Final Navbar -->

<!-- ===========================================
    Start Imagem -->
<section class="venda-carro">
    <div class="image-venda">
        <img class="" src="{{ Storage::url($imagemAleatoria) }}" alt="Imagem">
    </div>
    <div class="venda-contact">
        <div class="contact-venda">
            <form action="cc" autocomplete="off">
                <div class="input-container">
                    <input type="text" name="name" class="input">
                    <label for="">Nome</label>
                </div>
                <div class="input-container">
                    <input type="email" name="email" class="input">
                    <label for="">Email</label>
                </div>
                <div class="input-container">
                    <input type="tel" name="phone" class="input">
                    <label for="">Telefone</label>
                </div>
                <div class="input-container textarea">
                    <textarea name="message" class="input"></textarea>
                    <label for="">Mensagem</label>
                </div>
                <input type="submit" value="Enviar" class="btnn">
            </form>
        </div>
        </div>
        </div>
    </div>
</section>
<!-- ===========================================
    End Imagem -->
