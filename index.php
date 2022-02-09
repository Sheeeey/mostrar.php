<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Envío de datos</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Formulario para enviar datos</h1>
    <form action="./proc/res.proc.php" method="post">
        <input type="text" name="pokemon1" placeholder="Inserte pokemon...">
        <input type="submit">
    </form>
    
    <?php
    if (isset($_GET['msg'])) {  //La exclamación niega el condicional, a veces la negación es mejor que un true//
        echo '<p>Intenta con el pokemon #'.$_GET['msg'].'</p>';
    }
   ?>
</body>

</html>