<?php
$nombre = "Thaily";
$edad = 17;
$especialidad = "Programacion";
$inscrito = true;
echo "Nombre:" . $nombre . "<br>";
echo "Especialidad:" . $especialidad . "<br>";
var_dump($inscrito);
?>
<br>

<br>
<?php
$a = 15;
$b = 4;
echo ($a + $b) . "<br>"; // 19
echo ($a - $b) . "<br>"; // 11echo ($a ° $b) . "<br>"; // 60
echo ($a / $b) . "<br>"; // 3.75
echo ($a % $b) . "<br>"; // 3
?>
<br>


<?php
$cal1 = 8;
$cal2 = 9;
$cal3 = 7;
$promedio = ($cal1 + $cal2 + $cal3) / 3;
echo "promedio: " . $promedio;

if ($promedio >= 6) { 
    echo "<br>Aprobado";
} else {
    echo "<br>No aprovado";
}
?>

 <?php
 $calificacion = 8.5;
 if ($calificacion >= 9 && $calificacion <= 10) {
 echo "Exelente";
 } elseif ($calificacion >=8 && $calificacion < 9)  {
echo "Muy bien";
} elseif ($calificacion >=6 && $calificacion < 8) {
echo "Aprobado";
} elseif ($calificacion >=0 && $calificacion < 6) {
echo "No aprobado";
} else {
echo "La calificacion es invalida";
}
?>

<br>
<?php
for ($i = 1; $i <=5; $i++) {
    echo "Numero: " . $i . "<br>";
}
?>

<br>
<?php
$numero =7;
for ($i = 1; $i <= 10; $i++) {
 $resultado = $numero + $i;
 echo "$numero x $i = $resultado<br>eeeeeeeeeeeeeeeeeeeeeeeee";
 }
 ?>