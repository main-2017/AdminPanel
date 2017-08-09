# AdminPanel
Panel de administración simple para sitio web

Diseñado y desarrollado por Agustín Ducca Pantaleón para Main Group
Instagram: @lordvadercito

IMPORTANTE:

Este proyecto requiere el uso de Bootstrap, el cual debe ser incluido en la carpeta 'public/'
El archivo de conexión con la bade de datos debe incluirse en el directorio '/app/controllers/' con el nombre 'conection.php' con el siguiente formato:

    <?php
        $mysqli = new mysqli('servidor', 'usuario', 'contraseña', 'base de datos');
     ?>

**Es importante respetar el nombre del objeto $mysqli**
