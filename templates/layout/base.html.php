<?php

use App\Core\Constantes;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="Constantes::WEB_ROOT.'bootstrap/css/bootstrap.min.css'  -->
<link rel="stylesheet" href="../module/style.css">
    <!-- <link href="/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="<?=Constantes::WEB_ROOT.'login/css/style.css'?>">
    <link rel="stylesheet" href="<?=Constantes::WEB_ROOT.'login/bootstrap/bootstrap.min.css'?>">
    <link rel="stylesheet" href="<?=Constantes::WEB_ROOT.'css/style.css'?>">


    <!-- <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet"> -->

<link rel="stylesheet" href="<?=Constantes::WEB_ROOT.'css/style.css'?>">

<link rel="stylesheet" href="css/style.css">

    
</head>
<body>
   
<?php
 if(isset($_SESSION['user-connect'])){
     
    require_once Constantes::ROOT().'templates/acceuille/acceuille.html.php';
    
}

?>

<?=$content_for_views?>

 


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="<?=Constantes::WEB_ROOT.'bootstrap/js/bootstrap.min.js'?>"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>

<script src="<?=Constantes::WEB_ROOT. 'login/js/jquery.min.js'?>"></script>
<script src="<?=Constantes::WEB_ROOT. 'login/js/popper.min.js'?>"></script>
<script src="<?=Constantes::WEB_ROOT. 'login/js/bootstrap.min.js'?>"></script>
<script src="<?=Constantes::WEB_ROOT. 'login/js/main.min.js'?>"></script>

