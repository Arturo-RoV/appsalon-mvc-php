<h1 class="servicios">Nuevo servicio</h1>
<p class="descripcion-pagina">Llena los campos para añadir un nuevo servicio</p>

<?php

    include_once __DIR__ . './../templates/barra.php';
    include_once __DIR__ . './../templates/alertas.php';
?>

<form action="/servicios/crear" method="POST" class="formulario">
<?php include_once 'formulario.php'; ?>
<input type="submit" class="boton" value="Guardar servicio">
</form>