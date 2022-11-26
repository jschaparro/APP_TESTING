<h1 class="nombre-pagina">Iniciar Sesión</h1>
<p class="descripcion-pagina">Por favor, digite sus credenciales de acceso</p>

<?php 
    include_once __DIR__ . "/../templates/alertas.php";         //incluir template de alertas
?>


<form class="formulario" method="POST" action="/">
    <div class="campo">
        <!--<label for="email">Email</label>-->
        <input 
            type="email"
            id="email"
            placeholder="Digita tu correo electrónico"
            name="email"
        />
    </div>

    <div class="campo">
        <!--<label for="password">Password</label>-->
        <input 
                type="password"
                id="password"
                placeholder="Digita tu contraseña"
                name="password"
        />
    </div>

    <input type="submit" class="boton boton-centrar" value="Iniciar Sesión">
    
</form>

<div class="acciones">
    <b><a href="/crear-cuenta">Crear Cuenta</a></b>
    <b><a href="/olvide">Reestablecer Contraseña</a></b>
</div>