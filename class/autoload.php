/*
if (isset($_POST['action'])) {
    var_dump($_POST);
    die(); // Detiene el script aquí para ver claramente la salida
    // ... resto de tu lógica
} else {
    var_dump($_POST);
    die();
}
*/

<?php
spl_autoload_register(function($clase){
   $ruta = __DIR__.'/'.$clase.'.php';
   if (file_exists($ruta)){
       require_once $ruta;
   }
});

include_once 'database.php';

$db = new DataBase();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action'])) {
    switch ($_POST['action']) {
        case 'altaCategoria':
            $nombre = $_POST['nombre'] ?? '';
            if (!empty($nombre)) {
                $categoria = new Categorias();
                $categoria->setNombre($nombre);
                if ($categoria->guardar()) {
                    header("Location: ../views/lista_categorias.php");
                    exit;
                } else {
                    echo "<script>alert('Error al guardar la categoría'); window.history.back();</script>";
                }
            } else {
                echo "<script>alert('Debe ingresar un nombre de categoría'); window.history.back();</script>";
            }
            break;

        case 'listarCategorias':
            $categorias = $db->select("SELECT * FROM categorias");
            foreach ($categorias as $cat){
                echo "<tr>
                        <td>{$cat['id']}</td>
                        <td>{$cat['nombre']}</td>
                      </tr>";
            }
            break;

        case 'listarProductos':
            $productos = $db->select("SELECT * FROM productos");
            foreach ($productos as $prod){
                $rutaImagen = "../../assets/img/".$prod['imagen'];
                echo "<tr>
                        <td>{$prod['id']}</td>
                        <td><img src='$rutaImagen' width='80'></td>
                        <td>{$prod['nombre']}</td>
                        <td>{$prod['descripcion']}</td>
                        <td>{$prod['categoria_id']}</td>
                        <td>{$prod['precio']}</td>
                      </tr>";
            }
            break;
    }
}

