<?php
session_start();
//echo $_POST['pokemon'];
if (isset($_POST['pokemon1'])) {
    if (strtolower($_POST['pokemon1'])=='pikachu') {
        $_SESSION['pantalla1']='check';
        header('Location: ../view/pantalla1.php');
        // Creo la sesión por primera vez.
       
    }else {
        header('Location: ../index.php?msg=25');
    }

}

elseif (isset($_POST['pokemon2'])) {
    if (strtolower($_POST['pokemon2'])=='ponyta') {
        $_SESSION['pantalla2']='check';
        header('Location: ../view/pantalla2.php');
    }else {
        header('Location: ../view/pantalla1.php?msg=Es%20de%20tipo%20fuego');
    }
}

?>