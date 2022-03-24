<div class="col-8">
    <h1>Pagina Home</h1>
    <p>Lorem ipsum</p>
</div>
<!DOCTYPE html>
<!-- SIDEBAR -->
<aside id="sidebar">

    <?php if(isset($_SESSION['student'])): ?> <!-- Si existe el usuario identificado -->
        <div id="usuario-logueado" class="block-aside">
            <h3>Bienvenido, <?=$_SESSION['student'] ['name']. ' '.$_SESSION['student']['surname']; ?></h3> <!-- Se imprimen los datos por pantalla -->
            <!-- Botones -->
            <a href="/" class="boton boton-verde">Crear entradas</a>
            <a href="/" class="boton">Crear categoría</a>
            <a href="/" class="boton boton-naranja">Mis datos</a>
            <a href="/" class="boton boton-rojo">Cerrar sesión</a>
        </div>
    <?php endif; ?>

    <?php if(!isset($_SESSION['student'])): ?> <!-- Si NO existe el usuario identificado -->
        <div id="login" class="block-aside">
            <h3>Identifícate</h3>

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
            </form>
        </div>

        <div id="register" class="block-aside">

            <h3>Registrarse</h3>

            <!-- Mostrar errores -->
            <?php if(isset($_SESSION['completado'])): ?>
                <div class="alerta alerta-exito">
                    <?= $_SESSION['completado']; ?>
                </div>
            <?php elseif(isset($_SESSION['errores']['general'])): ?>
                <div class="alerta alerta-error">
                    <?= $_SESSION['errores'] ['general']; ?>
                </div>
            <?php endif; ?>

            <form action="register.php" method="POST">
                <label for="username">Nombre de usuario</label>
                <input type="text" name="username" placeholder="Nombre de usuario" />
                <?php echo isset($_SESSION['errores']) ? showError($_SESSION['errores'], 'username') : ''; ?> <!-- En el caso que exista, muestra mensaje de error -->

                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" placeholder="Nombre"/>
                <?php echo isset($_SESSION['errores']) ? showError($_SESSION['errores'], 'nombre') : ''; ?>

                <label for="apellidos">Apellidos</label>
                <input type="text" name="apellidos" placeholder="Apellidos"/>
                <?php echo isset($_SESSION['errores']) ? showError($_SESSION['errores'], 'apellidos') : ''; ?>

                <label for="nif">NIF</label>
                <input type="text" name="nif" placeholder="NIF"/>
                <?php echo isset($_SESSION['errores']) ? showError($_SESSION['errores'], 'nif') : ''; ?>

                <label for="phone">Teléfono</label>
                <input type="text" name="phone" placeholder="Teléfono"/>
                <?php echo isset($_SESSION['errores']) ? showError($_SESSION['errores'], 'phone') : ''; ?>

                <label for="email">Email</label>
                <input type="email" name="email" placeholder="Email"/>
                <?php echo isset($_SESSION['errores']) ? showError($_SESSION['errores'], 'email') : ''; ?>

                <label for="password">Contraseña</label>
                <input type="password" name="password" placeholder="Contraseña"/>
                <?php echo isset($_SESSION['errores']) ? showError($_SESSION['errores'], 'password') : ''; ?>

                <input type="submit" name="submit" value="Registrar" />
            </form>
            <?php deleteErrors(); ?>
        </div>
    <?php endif?>
</aside>
