<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title')</title>

    <link rel="stylesheet" href="/css/frontend.css">
    <script src="https://kit.fontawesome.com/84534b9145.js" crossorigin="anonymous"></script>
</head>
@yield('footer')
<footer class="galaxy-footer">
    <div id="footer_content">
        <div id="footer_contacts">
            <h1>Logo</h1>
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
        2023 all rights reserved
    </div>
</footer>