<?php
require_once ("../Modelo/mantenerSesion.php");

$idTipoIntercambio = 1;
$codigo_producto = $_POST['idProducto'];
$nombre = $_POST['nombre_prod'];
$descripcion = $_POST['desc_prod'];
$cantidad = $_POST['cantidad'];
$fecha_entrada = $_POST['fecha_entrada'];
$categoria_desc = $_POST['cate_prod'];
$estado_desc = $_POST['estado_prod'];
//$imagen = $_FILES['foto']['name'];   
    if ($tipoIntercambio == 'Donacion') {
        $TipoEntrada = 1;    
    }
    else {
        $TipoEntrada = 2;
    }
    if ($categoria_desc == 'Juguetes') {
        $categoria = 1;    
    }
    else {
        $categoria = 2;
    }
    if ($estado_desc == 'Bueno') {
        $estado = 1;    
    }
    else {
        $estado = 2;
    }


/* $categoria = $_POST['cate_prod'];
$estado = $_POST['estado_prod']; */
include "../Modelo/conectar.php";
include "../Modelo/Mproducto.php";
    $producto = new ProductoModelo();//llamada al metodo constructor
    
    $resultado = $producto -> insertar_producto($codigo_producto,$nombre,$descripcion,$cantidad,$fecha_entrada,$TipoEntrada,$categoria,$estado,$idTipoIntercambio);
include "CsalidaDonacion.php";

?>