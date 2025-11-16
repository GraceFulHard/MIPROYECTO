//$(document).ready (function( ) { 
//    alert ("Listo")
//})

$(".form-categoria").submit(function(event){
  var nombre = $("#categoria_nombre").val();   
  if ($.trim(nombre) === ''){
    alert("Debe completar la categoría\nGraciela Richetta");
    event.preventDefault(); // cancela el envío
  }
});

$(".form-producto").submit(function(event){
  var producto   = $("#nombre_producto").val();
  var imagen     = $("#imagen_producto").val();
  var descripcion= $("#descripcion_producto").val();
  var precio     = $("#precio_producto").val();
  var categoria  = $("#categoria_producto").val();
  
  var errores = [];
    
  if ($.trim(producto) === '') {
    errores.push("Debe ingresar el nombre del producto");
  }
  if ($.trim(imagen) === '') {
    errores.push("Debe ingresar la imagen");
  }
  if ($.trim(descripcion) === '') {
    errores.push("Debe ingresar la descripción");
  }
  if ($.trim(precio) === '') {
    errores.push("Debe ingresar el precio");
  }
  if ($.trim(categoria) === '') {
    errores.push("Debe ingresar la categoría");
  }
      
  if (errores.length > 0) {
    errores.push("Graciela Richetta");
    alert(errores.join("\n"));
    event.preventDefault(); // cancela el envío
  }
});

/*
$(".form-categoria").submit(function(){
  var nombre = $("#categoria_nombre").val();
  if ($.trim(nombre) === ''){
    alert("Debe completar la categoria \n Graciela Richetta");
    return false;
  }
  return true;
})
*/



