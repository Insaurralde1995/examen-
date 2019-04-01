<?

/**
 * =====================================
 * 1 - Cuanto vale $a en los tres casos:
 * =====================================
 */

//a
$a = 10;
function ej1_a() {
  $a = 11;
}
ej1_a();
//cuanto vale a?
//$a=10 respuesta

//b
$b = 10;
function ej1_b() {
  global $b;
  $b = 11;
}
ej1_b();
//cuanto vale b?
//b igual 11

//c
$c = 10;
function ej1_c() {
  $c = 11;
  global $c;
}
ej1_c();
//cuanto vale c?
// c =10
//d
$d = 10;
function ej1_d() {
  global $d;
  $d = 11;
}
//cuanto vale d?
// d=10

/**
 * =====================================
 * 2 - imprimir secuencias con bucles
 * =====================================
 */

//a - Escribir un bucle for y un while donde se
//    imprimen solo los valores pares desde 0 a 20

/*con for
for ($i=2;$i<=20;$i=$i+2)
{
    echo $i. "<br>";
}
$i = 0;
while ($i<=20)
{
    echo $i. "<br>";
    $i= $i+2;

}
*/

//b - Igual al punto a pero en orden inverso
/*
for ($i=20;$i>=0;$i=$i-2)
{
    echo $i. "<br>";
}
$i = 20;
while ($i>=0)
{
    echo $i. "<br>";
    $i= $i-2;

}
*/

//c - Crear un arreglo de 10 elementos y recorrerlo
//    con un foreach en ambos sentidos

/*$array= array (1,2,3,4,5,6,7,8,9,10);

foreach($array as $valor){
    echo $valor."<br>";
}
echo "<br>";
$arrayreverse= array_reverse($array);
foreach($arrayreverse as $gato){
    echo $gato."<br>";
}
/*
//    (hint: puede usar funciones de array antes de entrar al foreach)


/**
 * =====================================
 * 3 - Arreglos
 * =====================================
 */

//a - Crear un arreglo de una dimensión de mil elementos
//    con claves consecutiva
/*
$array=array();
for ($i=0;$i<=10000;$i++)
    {$array [$i]=$i;
        echo $i."<br>";
    }
*/

//b - Crea un arreglo de 100elementos con claves numericas pero pares
//    Ej: $a[0], $a[2], $a[3] deben existir, $a[1], $a[3] no deben existir
/*
for ($i=0;$i<200;$i++)
{
if ($i%2==0)
{
 $array [$i]=$i;       
}  
}
var_dump($array);

*/

//c - Si nos pasan un arreglo y no sabemos el contenido, cual suele ser la mejor
//    forma de recorrerlo? Se puede de más formas?

 
/**
 * =====================================
 * 4 - funciones
 * =====================================
 */

//a - Crear una funcion que dado un arreglo/array duplica todos los valores
$ar = array();
function ej4_a($arreglo) {
  // codigo
}
ej4_a($ar); // tiene que modificar todos los valores y duplicarlos

//b - Crea una funcion que dado un arreglo/array te devuelve un nuevo arreglo
//    con los valores duplicados pero no modifica el original (debe crear un
//    nuevo arreglo)

//c - De un ejemplo de función recursiva


/**
 * =====================================
 * 5 - A desarrollar
 * =====================================
 */

//a - Arregle el siguiente codigo
$a = array(1,2,3);
$b = array(4,5,6);
echo "Las keys del arreglo a son: \n";
foreach ($a as $v) {
  echo $v . "\n";
}
echo "\n\n";

// duplico todos los elementos sin agregar nuevos
foreach ($b as $v) {
  $b[$v] = $v*2;
}

//b - Plantee la idea de juego truco donde dado una mano
//    de 3 cartas te diga cuantos tantos tiene para el envido
//    (Vamos a asumir que todas las cartas son del mismo palo, por ej oro)
//
//    ej:
//       $mano = array(4, 5, 10);    // 4 de oro, 5 de oro, 10 de oro
//                                   // tiene 29
//
//       $mano = array(1, 11, 12);  // tiene 21
//
//       $mano = array(6, 7, 5);    // tiene 33