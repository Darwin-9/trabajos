<?php

$tienda = array();
$nuevoProducto = array();
$listaBusqueda = array();

$tienda = array(
    array('producto' => 'Arroz', 'tipoProducto' => 'granos', 'tipoUnidad' => 'gramos', 'cantidad' => 1000, 'precio' => 2450),
    array('producto' => 'Papa', 'tipoProducto' => 'fruver', 'tipoUnidad' => 'gramos', 'cantidad' => 500, 'precio' => 1000),
    array('producto' => 'Mora', 'tipoProducto' => 'fruver', 'tipoUnidad' => 'gramos', 'cantidad' => 500, 'precio' => 1500),
    array('producto' => 'Trucha', 'tipoProducto' => 'carnes', 'tipoUnidad' => 'gramos', 'cantidad' => 1000, 'precio' => 9000),
    array('producto' => 'Pollo Entero', 'tipoProducto' => 'carnes', 'tipoUnidad' => 'gramos', 'cantidad' => 1000, 'precio' => 4500)
);

$nuevoProducto = array('producto' => 'Res', 'tipoProducto' => 'carnes', 'tipoUnidad' => 'gramos', 'cantidad' => 1000, 'precio' => 7500);
array_push($tienda, $nuevoProducto);

$tienda[]= $nuevoProducto;
$numeroRegistro=count($tienda);
echo "matriz tienda:<br>";
foreach ($tienda as $producto) {
    echo implode(", ",$producto)."<br>";
};
echo "<br>";
$listaBusqueda=[];
for($iteracion=0;$iteracion<$numeroRegistro;$iteracion++){
    if($tienda[$iteracion]['tipoProducto']=='fruver'){
        $listaBusqueda[]= $tienda[$iteracion];
    }else{
        echo'';
    }
};
echo "Busqueda por tipo de producto fruver: <br>";
foreach ($listaBusqueda as $producto) {
echo implode(", ",$producto)."<br>";
};


?>
