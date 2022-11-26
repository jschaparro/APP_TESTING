<h1 class="nombre-pagina">Recuperar Contraseña</h1>
<p class="descripcion-pagina">Digita tu correo para reestablecer tu contraseña</p>


<?php 
    include_once __DIR__ . "/../templates/alertas.php";         //incluir template de alertas
?>


<form class="formulario" action="/olvide" method="POST">

    <div class="campo">
        <!-- <label for="email">E-mail</label> -->
        
        <input 
            type="email"
            id="email"
            placeholder="Tu Email"
            name="email"
        />
    </div>

    <input type="submit" value="Enviar" class="boton">

</form>

<div class="acciones">
    <b><a href="/">Iniciar Sesión</a></b>
    <b><a href="/crear-cuenta">Regístrate</a></b>
</div>