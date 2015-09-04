
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h2> Realizar un algoritmo que pida los coeficientes de una 
            ecuación de 2º grado, y de las posibles soluciones reales. 
            Si no existen reales, debe indicarlo. </h2>
        
        <?php
        $a = $_POST['txtA'];
        $b = $_POST['txtB'];
        $c = $_POST['txtC'];
        $xuno = 0;
        $xdos = 0;
        $xuno = (-$b + sqrt (pow($b, 2) - (4 * $a * $c))) / (2 * $a);
        $xdos = (-$b - sqrt (pow($b, 2) - (4 * $a * $c))) / (2 * $a);
        ?>
        
        <br/>
        <?php 
        
        if (is_nan ($xuno) || is_nan ($xdos)){
            if (is_nan ($xuno) && is_nan ($xdos)){
		echo "la ecuacion con signo Positivo no tiene una solucion Real <br/>";
		echo " la ecuacion con signo Negativo no tiene una solucion Real <br/>";
	}else if (is_nan ($xuno)){
		echo "la ecuacion con signo Positivo no tiene una solucion Real.";
		echo "El valor de X2 es: ".$xdos;
	}else{
		echo "El valor de la ecuacion con signo Neativo no tiene una solucion Real.";
		echo "El valor de X1 es: ".$xuno;
	}
        }else {
            echo  "El resultado de X1 es: ".$xuno." y el de X2 es: ".$xdos;
            }
        ?>
        ?>
    </body>
</html>
