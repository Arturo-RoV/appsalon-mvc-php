<div class="campo">
    <Label for="nombre">Nombre:</Label>
    <input 
        type="text"
        id="nombre"
        placeholder="Nombre servicio"
        name="nombre"
        value="<?php echo $servicio->nombre; ?>"
    />
</div>

<div class="campo">
    <Label for="precio">Precio:</Label>
    <input 
        type="number"
        id="nombre"
        placeholder="Precio servicio"
        name="precio"
        value="<?php echo $servicio->precio; ?>"
    />
</div>