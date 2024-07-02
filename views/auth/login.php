<h1 class="nombre-pagina">Login</h1>
<p class="descripcion-pagina">Introduzca sus datos para iniciar sesión</p>

<?php
    include_once __DIR__ . "/../templates/alertas.php";
?>

<form action="/" class="formulario" method="POST">

    <div class="campo">
        <label for="email">Email</label>
        <input type="email" id="email" placeholder="Tu email" name="email" value="<?php echo s($auth->email); ?>">
    </div>

    <div class="campo">
        <label for="password" class="password">Password</label>
        <input type="password" id="password" name="password" placeholder="********">
    </div>

    <input type="submit" class="boton" value="Iniciar Sesión">
</form>

<div class="acciones">
    <a href="/crear-cuenta">¿Aún no tienes una cuenta? Crear una</a>
    <a href="/olvide">¿Olvidaste tu password?</a>
</div>