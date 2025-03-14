<?php
    echo '<style>
        footer {
            background-color: #1e3a5f;
            color: white;
            padding: 40px 0;
        }
        footer h5 {
            font-size: 18px;
            margin-bottom: 15px;
            font-weight: bold;
        }
        footer p, footer a {
            font-size: 14px;
            color: white;
            text-decoration: none;
        }
        footer a:hover {
            text-decoration: underline;
        }
        .footer-container {
            display: flex;
            justify-content: space-around;
            align-items: start;
            flex-wrap: wrap;
            text-align: left;
        }
        .footer-section {
            width: 22%;
        }
        .social-icons {
            display: flex;
            gap: 10px;
            align-items: center;
        }
        .social-icons img {
            width: 32px;
            height: 32px;
        }
    </style>
    <footer>
        <div class="container footer-container">
            <div class="footer-section">
                <h5>Sobre nosotros</h5>
                <p>Somos una organización, que ayuda a dar terapias gratuitas a personas con problemas de discapacidad.</p>
            </div>
            <div class="footer-section">
                <h5>Enlaces rápidos</h5>
                <ul class="list-unstyled">
                    <li><a href="#">Eventos</a></li>
                    <li><a href="#">Noticias</a></li>
                    <li><a href="#">Intégrate</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h5>Contactos</h5>
                <p>San Marcos, Guerrero, México.</p>
                <p>Tel. 7451043812</p>
                <p>Email: red_padres@gmail.com</p>
            </div>
            <div class="footer-section">
                <h5>Redes</h5>
                <p>Síguenos en nuestras diferentes redes sociales.</p>
                <div class="social-icons">
                    <a href="#"><img src="../icons/facebook.png" alt="Facebook"></a>
                    <a href="#"><img src="../icons/youtube.png" alt="YouTube"></a>
                    <a href="#"><img src="../icons/x.png" alt="Twitter X"></a>
                </div>
            </div>
        </div>
    </footer>';
?>