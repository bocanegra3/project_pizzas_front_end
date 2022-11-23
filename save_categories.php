<?php

$category=$_POST['categoria'];

include_once"config_products.php";
include_once"db.php";

$link=new Db();/*Objeto*/
$sql="INSERT into categories (category_name) values ('$category')";
$stmt = $link->prepare($sql);
if ($stmt->execute()){
    ?>
    <script>
    alert("Categoria Ingresado!");
    window.location="insert_products.php";
    </script>
    <?php
}

?>