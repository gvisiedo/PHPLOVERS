<?php require_once './helpers.php'; ?>


<div id="main-box-2">
    <div class="block-aside">

        <h3>Formulario alta estudiante</h3>

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
    </div>
    <?php deleteErrors(); ?>
</div>
