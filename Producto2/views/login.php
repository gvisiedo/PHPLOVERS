<?php

// Iniciar la sesión y la conexión a bd:
require_once './app/db.php';

// Recoger datos del formulario - Se ejecuta el bloque solo si se ha pulsado el botón del formulario de login
if (isset($_POST)) {

    // Borrar error login anterior:
    if (isset($_SESSION['error_login'])) {
        unset($_SESSION['error_login']);
    }

    // Recoger datos del formulario:
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    // Consulta para comprobar las credenciales del usuario:
    $sql_stdnt = "SELECT * FROM students WHERE email = '$email'";
    $login_stdnt = mysqli_query($db, $sql_stdnt);

    $sql_admin = "SELECT * FROM users_admin WHERE email = '$email'";
    $login_admin = mysqli_query($db, $sql_admin);

    if ($login_stdnt && mysqli_num_rows($login_stdnt) == 1) { // Si login = true y al contar num filas de login = 1
        $student = mysqli_fetch_assoc($login_stdnt); // Extrae array asociativo de los datos del estudiante

        // Cifrar y comprobar la contraseña:
        $verify = password_verify($password, $student['pass']);

        if ($verify) {
            // Utilizar una sesión para guardar los datos del estudiante logueado:
            $_SESSION['student'] = $student;

            // Redirigir al panel principal.php
            header('Location: calendar-view.php');

        } else {
            // Si algo falla enviar una sesión con el fallo:
            $_SESSION['error_login'] = "¡Login incorrecto!";

            // Redirigir a form-login
            header('Location: form-login.php');
        }
    } else if ($login_admin && mysqli_num_rows($login_admin) == 1) {
        $admin = mysqli_fetch_assoc($login_admin); // Extrae array asociativo de los datos del administrador

        // Cifrar y comprobar la contraseña:
        /*$verify = password_verify($password, $admin['password']);*/

        if ($password == $admin['password']) {
            $verify = true;
        }

        if ($verify) {
            // Utilizar una sesión para guardar los datos del administrador logueado:
            $_SESSION['admin'] = $admin;

            // Redirigir al panel principal.php
            header('Location: control-panel-view.php');

        } else {
            // Si algo falla enviar una sesión con el fallo:
            $_SESSION['error_login'] = "¡Login incorrecto!";

            // Redirigir a form-login
            header('Location: form-login.php');
        }
    } else {
        // Mensaje de error:
        $_SESSION['error_login'] = "¡Login incorrecto!";
        // Redirigir a form-login
        header('Location: form-login.php');
    }
}