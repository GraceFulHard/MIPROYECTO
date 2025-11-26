<?php
require_once '../class/categorias.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'] ?? '';
    
    if (!empty($nombre)) {
        $categoria = new Categorias();
        $categoria->setNombre($nombre);
        $categoria->guardar();
        
        echo "<script>alert('Categoria guardada correctamente'); window.location.href='views/lista_categorias.html';</script>";    
    } else {
        echo "<script>alert('Debe ingresar un nombre de categoria'); window.history.back();</script>";
    }
}
?>
