<link rel="stylesheet" href="../css/header.css">
<link rel="stylesheet" href="../css/reset.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<header>
    <div class="header">
        <div class="header__container">
            <figure class="header__logo">
                <img src="../img/png/logotipo-normal.png" alt="">
                <h1>ELLO</h1>
            </figure>
            <nav class="header__nav--main">
                <ul>
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="tienda.php">Tienda</a></li>
                    <li><a href="nosotros.php">Nosotros</a></li>
                    <li><a href="contacto.php">Contacto</a></li>
                </ul>
            </nav>
            <div class="header__searcher">
                <!-- cambiar por un input -->
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                    <path d="M17.545 15.467l-3.779-3.779c0.57-0.935 0.898-2.035 0.898-3.21 0-3.417-2.961-6.377-6.378-6.377s-6.186 2.769-6.186 6.186c0 3.416 2.961 6.377 6.377 6.377 1.137 0 2.2-0.309 3.115-0.844l3.799 3.801c0.372 0.371 0.975 0.371 1.346 0l0.943-0.943c0.371-0.371 0.236-0.84-0.135-1.211zM4.004 8.287c0-2.366 1.917-4.283 4.282-4.283s4.474 2.107 4.474 4.474c0 2.365-1.918 4.283-4.283 4.283s-4.473-2.109-4.473-4.474z"></path>
                </svg>                    
                <span class="header__searcher--placeholder">Buscar</span>
            </div>
            <div class="header__nav--useroptions">
                <div class="header__nav--useroptions--button">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 71.04 76.96"><defs></defs>
                        <g id="Capa_2" data-name="Capa 2">
                        <g id="Layer_1" data-name="Layer 1">
                        <path class="cls-1" d="M47.76,40.7a22.2,22.2,0,1,0-24.48,0A35.53,35.53,0,0,0,0,74v3H71V74A35.53,35.53,0,0,0,47.76,40.7ZM19.24,22.2A16.28,16.28,0,1,1,35.52,38.48,16.29,16.29,0,0,1,19.24,22.2ZM6.07,71A29.6,29.6,0,0,1,65,71Z"/>
                        </g></g>
                    </svg>
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path d="M4.516 7.548c0.436-0.446 1.043-0.481 1.576 0l3.908 3.747 3.908-3.747c0.533-0.481 1.141-0.446 1.574 0 0.436 0.445 0.408 1.197 0 1.615-0.406 0.418-4.695 4.502-4.695 4.502-0.217 0.223-0.502 0.335-0.787 0.335s-0.57-0.112-0.789-0.335c0 0-4.287-4.084-4.695-4.502s-0.436-1.17 0-1.615z"></path>
                    </svg>
                </div>
                <!-- menu desplegable -->
                <div class="menu-opciones-usuario">
                    <?php
                        include 'user-options-menu-header.php';

                        $logueado = true; // Esto cambia según la lógica de la aplicación
                        $esAdmin = false; // Esto cambia según la lógica de la aplicación

                        // Llamar a la función para generar e imprimir la lista de opciones
                        generarListaOpciones($logueado, $esAdmin);
                    ?>

                </div>
            </div>
        </div>
    </div>
</header>