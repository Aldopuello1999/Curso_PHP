<!-- Constantes :
son valores que no cambian durante la ejecucion del programa, ejemplo: pi = 3.1416, gravedad = 9.8-->

<!-- para defirnir una constante:  -->
<?
 
define('Curso','php 8 '); 

// para utilizar la constante se debe llamar y colocar el nombre

echo Curso;

// definir la constante con array 

define('equipo_futbol', [
    'Real madrid',
    'Barcelona',
    'Chelsea',
    'Arsernal'
]);

// para aceder a un valor del array

echo equipo_futbol['0'];

// constante definida por php 

echo "mi version de php es " . PHP_VERSION;
echo "<br>";
echo "Mi sistena operativo es " . PHP_OS;

// para mostrar la linea donde se encuentra
echo __LINE__;

// para mostrar la ubicacion del directorio 
echo __FILE__;