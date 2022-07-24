@extends('layouts.master')

@section('content')

<div class="container-fluid">
  <h2>Lista detalle de Productos</h2>
</div>

<?php
//Arrays de información de productos en duro que serán tomadas de la base de datos
$productos=array(
    array(
        'nombre' =>'Lápiz',
        'stock'=> 300,
        'sucursal'=> 'Arica',
    ),

    array(
        'nombre' =>'Cuaderno',
        'stock'=> 100,
        'sucursal'=> 'Santiago',
    ),

    array(
        'nombre' =>'Tijeras',
        'stock'=> 200,
        'sucursal'=> 'Punta Arenas',
    ),
    array(
        'nombre' =>'Cartulina',
        'stock'=> 400,
        'sucursal'=> 'Santiago',
    ),
    array(
        'nombre' =>'Destacadores',
        'stock'=> 300,
        'sucursal'=> 'Arica',
    ),
    array(
        'nombre' =>'Agendas',
        'stock'=> 100,
        'sucursal'=> 'Punta Arenas',
    ),
    array(
        'nombre' =>'Lapiceras',
        'stock'=> 300,
        'sucursal'=> 'Punta Arenas',
    ),
    array(
        'nombre' =>'Glitters',
        'stock'=> 50,
        'sucursal'=> 'Arica',
    ),
);

?>
<div class="container">
<table border="1" width="900">
    <tr class="table-light">
        <td>ID</td>
        <td>NOMBRE</td>
        <td>STOCK</td>
        <td>SUCURSAL</td>
    </tr>
    <?php 
    $id=1;
    foreach($productos as $p ){
        ?>

    <tr>
        <td> <?php echo $id;?> </td>
        <td><?php echo $p['nombre'];?></td>
        <td><?php echo $p['stock'];?></td>
        <td><?php echo $p['sucursal'];?></td>
    </tr>
    <?php
    $id=$id+1;} 
?>
</table>
</div>
@stop 
