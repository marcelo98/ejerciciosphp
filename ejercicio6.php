<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>ejercicio6</title>
    </head>
    <body>
<h2>  Pedir un número entre 0 y 9.999, decir si es capicú</h2>

<form id="form1" name="form1" method="post" action="">
    <label>ingrese el numero : </label>
        <label for="numeros"></label>
        <input type="text" name="numeros" id="numeros" />
      </p>
      <p>
        <input type="submit" name="calcular" id="calcular" value="calcular" />
        
      </p>
      
          <?php
	
	 if (!empty($_POST["numeros"])) {
	  $numero = $_POST ["numeros"];
	  $numero2 = strrev ($numero);
     
          
          if ($numero == $numero2) {
	  echo "el numero $numero si es capicua";
	  } else {
	 echo "el numero $numero no es capicua";	 
	 }
 }
	?>
    </body>
</html>