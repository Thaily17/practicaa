<?php
function sumar($a, $b) {
return $a + $b;
}
$resultado = sumar(10, 5);
echo "La suma es: " . $resultado;
?>

<?php
function calcularPromedio($a, $b, $c) {
return ($a + $b + $c) / 3;
}
$promedio = calcularPromedio(8, 9, 7);
echo "El promedio final del alumno es: " . $promedio;
?>