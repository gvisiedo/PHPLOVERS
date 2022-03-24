
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light mb-4">
    <div class="container">
        <a href="login.php" class="navbar-brand h1">Login</a>
    </div>
</nav>
<div class="container">
    <div class="row">
        <?php echo "home"; ?>
    </div>
</div>
<!-- MAIN -->
<div id="main-box">

    <h2>Bienvenidos a la web de gestión docente de la UOC.</h2>
    <h3>Una vez que te registres podrás apuntarte a las asignaturas que tú elijas, consultar su temario y
        ver fechas de comienzo y fin de las mismas para que puedas gestionar tu evolución en el curso.</h3>

    <!--Cuadros de presentación-->
    <div class="contenedorColumnas">
        <div class="columna">
            <h2>Registro-Login</h2>
            <img src="" alt="login" class="col-img">
            <p>Sistemas de alta del usuario en el sistema y de acceso (una vez dado de alta) a la aplicación web. En los casos que no se pueda dar de alta o acceder,
                el sistema debe mostrar los mensajes de error correspondientes. Si no es un usuario administrador, seleccionar qué cursos o ciclos está inscrito.</p>
        </div>
        <div class="columna">
            <h2>Panel administración</h2>
            <img src="" alt="login" class="col-img">
            <p>Accediendo como administrador, tendrá acceso al Panel Administración donde podrá crear nuevas asignaturas y cursos y configurar nuevas
                asignaturas en el horario. En este apartado se podrá configurar el día y hora de las clases, el color, junto con el profesor que la imparte y el curso al que pertenece. Se dará la opción de poder añadir, modificar y eliminar profesores, clases y cursos.</p>

        </div>
        <div class="columna">
            <h2>Panel principal</h2>
            <img src="" alt="login" class="col-img" style="height:250px">
            <p>Una vez el usuario ha accedido correctamente a través del login, podrá ver un horario con las diferentes clases. Posibilidad de mostrar vista por semana, p
                por día y por mes. Cada usuario solo tendrá la opción de ver el calendario de los cursos que está impartiendo.</p>
        </div>
    </div>
</div>


</body>
</html>
