<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php
session_start();
if($_SESSION['logueado']){
    echo "Horario de ingreso ".$_SESSION['time'];
    echo "<br>";
    echo "<br>";
    echo "<strong>"."Bienvenid@ ".$_SESSION['username']."</strong>";
    echo "<br>";
    echo "<br>";    
    echo "<a href= 'logout.php' >Logout</a>";
    
}
else{
 header('location:login.html');
}

?>