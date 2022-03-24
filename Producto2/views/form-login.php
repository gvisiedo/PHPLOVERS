
<?php require_once 'app/helpers.php'; ?>


<?php if(isset($_SESSION['student'])): ?> <!-- Si existe el usuario identificado -->
    <div id="usuario-logueado" class="block-aside">

        <a href="/" class="boton boton-naranja">Mis datos</a>
    </div>
<?php endif; ?>

<div id="main-box-2">
    <?php if(!isset($_SESSION['student'])): ?> <!-- Si NO existe el usuario identificado -->
    <div id="login" class="block-aside">
        <h3>Inicia sesión</h3>

        <?php if(isset($_SESSION['error_login'])): ?> <!-- Si existe el usuario identificado -->
            <div class="alerta alerta-error">
                <?=$_SESSION['error_login']; ?>
            </div>
        <?php endif; ?>

        <form action="login.php" method="POST">
            <label for="email">Email</label>
            <input type="email" name="email">

            <label for="password">Contraseña</label>
            <input type="password" name="password">

            <input type="submit" value="Entrar">

            <br/>
            <!--Llamada a la acción y link al formulario de registro de estudiantes-->
            <p>¿Aún no tienes una cuenta? <a href="register.php">Regístrate</a>
        </form>
    </div>
    <?php endif; ?>
</div>