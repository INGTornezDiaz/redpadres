<?php
    echo '<style>
        .navbar {
            background-color: white;
            padding: 10px 40px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
            display: flex;
            align-items: center;
            justify-content: space-between;
            width: 100%;
            height: 70px; /* Asegura alineación */
        }
        .navbar-brand img {
            width: 60px;
            height: auto;
        }
        .navbar-nav {
            display: flex;
            justify-content: center;
            flex-grow: 1;
            padding-left: 0;
            margin: 0;
            list-style: none; 
            align-items: center; 
        }
        .nav-item {
            margin: 0 15px;
        }
        .nav-link {
            color: black !important;
            font-size: 16px;
            position: relative;
            padding: 5px 10px;
        }
        .nav-link.active::after {
            content: "";
            display: block;
            width: 100%;
            height: 2px;
            background-color: #0056b3;
            position: absolute;
            bottom: -2px;
            left: 0;
        }
        .btn-register {
            border: 1px solid #0056b3;
            color: #0056b3;
            border-radius: 20px;
            padding: 5px 15px;
            font-size: 14px;
            white-space: nowrap;
        }
        .btn-register:hover {
            background-color: #0056b3;
            color: white;
        }
    </style>

    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <!-- Logo alineado a la izquierda -->
            <a class="navbar-brand" href="#">
                <img src="logo.png" alt="Logo">
            </a>

            <!-- Menú centrado -->
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link active" href="#">Inicio</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Noticias</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Eventos</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Contactos</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Sobre nosotros</a></li>
            </ul>

            <!-- Botón de registro alineado a la derecha -->
            <a href="#" class="btn btn-register">Regístrate</a>
        </div>
    </nav>';
?>
