<?php include 'views/partials/header.php'; ?>


  <?php
  $page = $_GET['page'] ?? 'home';

  switch ($page) {
      case 'categorias':
          include 'backend/views/categorias.html';
          break;
      case 'productos':
          include 'backend/views/productos.html';
          break;
      default:
          include 'views/home.html';
          break;
  }
  ?>






