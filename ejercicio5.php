<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQ93EV1xPVkklhxNRu3b24z1a/P5z3coIGQinlOAy6/nFw1YZ6A7yQ/RyHpU/JrJ" crossorigin="anonymous"></script> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="estilos.css"> 
    <title>Ejercicio 5</title>

</head>
<body>
<?php

If($_POST) {
$A = $_POST['A'];
$B = $_POST['B'];
$C = $_POST['C'];

//Definir variables
$mayor = "";
$menor = "";
$igual = "";

//Validar si hay números repetidos
If($A ==$B || $A == $C || $B == $C) {
    $igual = "Ingresar otro número, número repetido";
} else {
    //Determinar el número mayor
if (($A > $B) and ($A > $C)) {
$mayor = "A es el mayor";
} elseif (($B > $A && $B > $C)) {
$mayor = "B es el mayor";
 } else {
$mayor = "C es el mayor";
}

 // Determinar el número menor

    If(($A < $B && $A < $C)) {
    $menor = "A es el menor";
    } elseif (($B < $A && $B < $C)) {
    $menor = "B es el menor";
     } else {
    $menor = "C es el menor";
    }
} 
}

?>


<!-- Menú -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">EJERCICIOS PRACTICOS EN PHP </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Inicio</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="ejercicio6.php">Siguiente</a>
                </li>
                 </ul>
            </div>
        </div>
    </nav>


<h1>EJERCICIO 5: IDENTIFICAR CUAL ES EL NÚMERO MAYOR Y EL NÚMERO MENOR </h1> <br>

<div class="container text-center">
<p> Desarrolle un algoritmo que permita leer tres valores y almacenarlos en las variables A, B y C respectivamente. El algoritmo debe imprimir cual es el mayor y cual es el menor. Recuerde constatar que los tres valores introducidos por el teclado sean valores distintos. Presente un mensaje de alerta en caso de que se detecte la introducción de valores iguales.  
</p>
<br>

<h3>Digite 3 números almacenados en A, B y C</h3>
<br>
<form action ="" method="post">
        <label for=""> Digite número A </label>
        <input type = "number" name = "A" id= "A"> <br> <br>
        <label for=""> Digite número B </label>
        <input type = "number" name = "B" id= "B"> <br> <br>
        <label for=""> Digite número C </label>
        <input type = "number" name = "C" id= "C"> <br> <br>
        <input type = "submit" value = "CALCULAR" class="btn btn-primary"><br> <br>
        
</form>


<h2 class = "text-center">
        <?php 
        if ($_POST) {
            echo $mayor . " y " . $menor;
        }
        ?>
</h2>


<h2 class = "text-center"> 
    <?php if ($_POST) {
    echo $igual;
  }

    ?> 
</h2>

</div>
    


</body>
</html>