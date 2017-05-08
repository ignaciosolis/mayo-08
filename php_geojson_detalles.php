<?php include('header.php')?>
<section>

<?php
  $la_url = $_GET['url'];
  $json = file_get_contents($la_url);
  $datos = json_decode($json,true);
?>

<h3>PHP+GeoJSON:</h3>

<p>En esta página vemos el detalle de: </p>
<h1><?php print($datos['properties']['mag']);?></h1>
<h2><?php print($datos['properties']['place']);?></h2>


<?php if($datos["properties"]["mag"] >=6 ){?>
    <div class="alert alert-danger"><p>¡EVACUACIÓN! Dirígete a zonas de seguridad.</p></div>
    <?php };?>

<?php if($datos["properties"]["mag"] >=5 ){?>
        <div class="alert alert-danger"><p>¡TRANQUILOS! No es nada</p></div>
        <?php };?>

<?php if($datos["properties"]["mag"] >=7 ){?>
                <div class="alert alert-danger"><p>¡CORRAN POR SUS VIDAS!</p></div>
                <?php };?>






<strong><?php print($datos['properties']['place']);?></strong>




<pre><?php print_r($datos)?></pre>


<div class="alert alert-danger">
<p>Genere una ficha donde se muestren los datos más importantes del movimiento sístimo que se observa en detalle.</p>
</div>

</section>
<?php include('footer.php');?>
