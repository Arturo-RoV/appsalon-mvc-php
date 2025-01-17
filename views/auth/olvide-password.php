<h1 class="nombre-pagina">Olvidé password</h1>
<p class="descripcion-pagina">Restablece tu password escribiendo tu E-mail a continuación</p>

<?php 
    include_once __DIR__ . "/../templates/alertas.php";
?>

<form action="/olvide" method="POST" class="formulario">
    <div class="campo">
        <label for="email">E-mail:</label>
        <input
        type="email"
        id="email"
        name="email"
        placeholder="Tu E-mail"
        />
    </div>

    <input type="submit" value="Enviar instrucciones" class="boton">
</form>

<div class="acciones">
    <a href="/">¿Ya tienes una cuenta? Inicia sesión</a>
    <a href="/crear-cuenta">¿Aún no tienes una cuenta? Crear una</a>
</div>