<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Mi Proyecto</title>
  <link rel="stylesheet" href="/assets/css/estilos.css">
 <link rel="icon" href="assets/img/favicon_1.png" type="image/x-icon">
</head>
<body>
    
<?php
$page = isset($_GET['page']) ? $_GET['page'] : 'home';

include 'views/partials/header.php';

switch ($page) {
    case 'categorias':
        include 'backend/categorias.php';
        break;

    case 'productos':
        include 'backend/productos.php';
        break;

    default:
        include 'views/home.html';
        break;
}


?>

  <main>
    <!-- contenido principal -->
  </main>

</body>
</html>



