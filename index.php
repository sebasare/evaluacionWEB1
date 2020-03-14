<?php

include("funciones.php");
//Nombre: sebastian salinas restrepo

//Ejercicio 1
echo("Evaluacion web 1, elaborado por sebastian salinas restrepo  <br><br>");
echo("Ejercicio 1 <br><br>");
$n1=123;z|
$n2=456;

echo("N1 = ".$n1."<br>");
echo("N2 = ".$n2."<br><br>");

echo("Suma <br>");

$suma=$n1+$n2;

echo("la suma de los numeros n1 y n2 es : ".$suma."<br><br>");

echo("Resta <br>");
$resta=$n1-$n2;

echo("la resta de los numeros n1 y n2 es : ".$resta."<br><br>");

echo("Multipliacion <br>");
$multiplicacion=$n1*$n2;

echo("la multiplicacion de los numeros n1 y n2 es : ".$multiplicacion."<br><br>");

echo("Division <br>");
$division=$n1/$n2;
echo("la division de los numeros n1 y n2 es : ".$division."<br><br>");

//Ejercicio 2

echo("<br><br>Ejercicio 2 <br><br>");
echo("Calcular el índice de masa corporal <br>");

$peso=85;
$altura=1.78;
echo("<br>El peso del usuario es =".$peso." kg <br>");
echo("<br>la altura del usuario es =".$altura." m <br>");
$imc=$peso/($altura*$altura);

echo("<br>El Indice de masa corporal del usuario es =".$imc."<br>");

if($imc<= 18.4){
    echo("El usuario tiene Insuficiencia de peso <br>");
}else if($imc>=18.5 && $imc<=24.9){
    echo("El usuario tiene Peso normal <br>");
}else if($imc>=25 && $imc<=29.9){
    echo("El usuario tiene sobrepeso <br>");
}else if($imc>=30 && $imc<=34.9){
    echo("El usuario tiene Obesidad 1 <br>");
}else if($imc>=35 && $imc<=39.9){
    echo("El usuario tiene Obesidad 2 <br>");
}else{
    echo("El usuario tiene Obesidad 3 <br>");
}

//Ejercicio 3

echo("<br><br> Ejercicio 3 <br><br>");
echo("Promocion Descuentos <br><br>");

$Cantzapatosvendidos=5;
$Precioparzapatos=150000;
echo("Cantidad de zapatas vendidos : ".$Cantzapatosvendidos." <br>");

$valorneto=$Cantzapatosvendidos*$Precioparzapatos;
echo("Valor total sin descuento : $".$valorneto." <br>");

if($Cantzapatosvendidos== 3){
    $descuento=$valorneto*0.1;
    $valor=$valorneto-$descuento;
    echo("El valor a pagar con descuento es : $ ".$valor. " El descuento fue del 10% de : ".$descuento." <br>");
}else if($Cantzapatosvendidos> 3 && $Cantzapatosvendidos<= 5){
    $descuento=$valorneto*0.2;
    $valor=$valorneto-$descuento;
    echo("El valor a pagar con descuento es : $".$valor. " El descuento fue del 20% de : ".$descuento." <br>");
}else if($Cantzapatosvendidos> 5 ){
    $descuento=$valorneto*0.4;
    $valor=$valorneto-$descuento;
    echo("El valor a pagar con descuento es : $".$valor. " El descuento fue del 40% de : ".$descuento." <br>");
}else{
    
    echo("El valor a pagar es : $".$valorneto." <br>");
}

//Ejercicio 4

echo("<br><br> Ejercicio 4 <br><br>");
echo("Sueldo Semanal <br><br>");

$horaslaboradas=36;

echo("Horas laboradas : $".$horaslaboradas."<br>");

if($horaslaboradas<=40){
    $pago=$horaslaboradas*20000;
    echo("Sueldo Semanal es : $".$pago."<br>");
    echo("valor hora es de $20000 <br>");

}else{
    $pago=$horaslaboradas*25000;
    echo("Sueldo Semanal es : $".$pago."<br>");
    echo("valor hora es de $25000 <br>");
}


//Ejercicio 5


echo("<br><br> Ejercicio 5 <br><br>");
echo("Almacenar Datos sucursal A <br>");

$sucursalA=array('usuario1'=>array('Nombre'=>"Juan",'Telefono'=>1234567,'Direccion'=>"Calle 1",'Salario'=>1000000),
                'usuario2'=>array('Nombre'=>"Maria",'Telefono'=>2345678,'Direccion'=>"Calle 2",'Salario'=>1500000),
                'usuario3'=>array('Nombre'=>"James",'Telefono'=>3456789,'Direccion'=>"Calle 3",'Salario'=>200000),
                'usuario4'=>array('Nombre'=>"Sandra",'Telefono'=>4567890,'Direccion'=>"Calle 4",'Salario'=>2500000),
                'usuario5'=>array('Nombre'=>"David",'Telefono'=>5678901,'Direccion'=>"Calle 5",'Salario'=>3000000));


foreach($sucursalA as $clavemayorunidimensional=>$sucursalA){    
    echo ("<br>Los datos del ".$clavemayorunidimensional." de la Sucursal A, son :<br>");
    foreach ($sucursalA as $clave=>$valor){
    echo($clave." es : ".$valor."<br>");
    }
}
    $salariosSucursalA=sumatoriaSalarios(1000000,1500000,200000,2500000,3000000);
    
    
if($salariosSucursalA>20000000 && $salariosSucursalA>15000000){
    echo("<br>La mejor sumatoria de salarios la tiene la Sucursal A ");
    echo ("<br>Los salarios de la sucursal A suman : $".$salariosSucursalA."<br>");
}else{
    echo("<br>La mejor sumatoria de salarios la tiene la Sucursal B :$20'000.000");
    echo ("<br>Los salarios de la sucursal A suman : $".$salariosSucursalA."<br>");
}


echo("<br><br>................................<br><br>");


//Ejercicio 6

echo("<br><br> Ejercicio 6 <br><br>");
echo("Numeros Pares <br><br>");

$pares=array('1°'=>2,'2°'=>4,'3°'=>6,'4°'=>8,'5°'=>10,'6°'=>12,'7°'=>14,'8°'=>16,'9°'=>18,'10°'=>20);
foreach ($pares as $clavepares=>$valorpares){
    echo("El ".$clavepares." numero par es: ".$valorpares."<br>");
}

echo("<br><br>................................<br><br>");

//Ejercicio 7

echo("<br><br> Ejercicio 7 <br><br>");
echo("Salpicon<br>");

$Salpicon=array('dulce1'=>"Banano,",'dulce2'=>"Manzana,",'dulce3'=>"Durazno,",'acido1'=>"Piña,",'acido2'=>"Naranja,",'acido3'=>"Lulo");
 
    echo ("<br>El salpicon esta compuesto por: <br>");
    print_r($Salpicon);

echo("<br><br>................................<br><br>");

//Ejercicio 8

echo("<br><br> Ejercicio 8 <br><br>");
echo("Calcular Edad <br><br>");



calcularedad(1991,2020);
calcularedad(1995,2020);
calcularedad(1987,2020);


echo("<br><br>................................<br><br>");

//Ejercicio 9


echo("<br><br> Ejercicio 9 <br><br>");
echo("Establecer el biotipo de los jugadores <br><br>");

biotipojugadores(1.65);
biotipojugadores(1.78);
biotipojugadores(1.95);

echo("<br><br>................................<br><br>");

//Ejercicio 10


echo("<br><br> Ejercicio 10 <br><br>");
echo("Almacenar y Organizar la informacion de los mejores jugadores Colombianos <br><br>");

$jugadores=array(
    'Jugador 1'=>array('Nombre'=>"Radamel Falcao",'años'=>calcularedadjugadores(1986,2020),'posicion'=>"Delantero",'Biotipo'=>biotipojugadores10(1.77)),
    'Jugador 2'=>array('Nombre'=>"James Rodríguez",'años'=>calcularedadjugadores(1991,2020),'posicion'=>"Mediocampista",'Biotipo'=>biotipojugadores10(1.81)),
    'Jugador 3'=>array('Nombre'=>"Juan Cuadrado",'años'=>calcularedadjugadores(1988,2020),'posicion'=>"Delantero",'Biotipo'=>biotipojugadores10(1.78)),
    'Jugador 4'=>array('Nombre'=>"Yerry Mina",'años'=>calcularedadjugadores(1994,2020),'posicion'=>"Defensor",'Biotipo'=>biotipojugadores10(1.95)),
    'Jugador 5'=>array('Nombre'=>"David Ospina",'años'=>calcularedadjugadores(1988,2020),'posicion'=>"Portero",'Biotipo'=>biotipojugadores10(1.83)),
    'Jugador 6'=>array('Nombre'=>"Davinsón Sanchez",'años'=>calcularedadjugadores(1996,2020),'posicion'=>"Delantero",'Biotipo'=>biotipojugadores10(1.87)),
    'Jugador 7'=>array('Nombre'=>"Duvan Zapata",'años'=>calcularedadjugadores(1991,2020),'posicion'=>"Delantero",'Biotipo'=>biotipojugadores10(1.86)),
    'Jugador 8'=>array('Nombre'=>"Wilmar Barrios",'años'=>calcularedadjugadores(1993,2020),'posicion'=>"Mediocampista",'Biotipo'=>biotipojugadores10(1.78)),
    'Jugador 9'=>array('Nombre'=>"Mateus Uribe",'años'=>calcularedadjugadores(1991,2020),'posicion'=>"Mediocampista",'Biotipo'=>biotipojugadores10(1.80)));  

    foreach($jugadores as $clavemayorjugadores=>$jugadores){    
    echo ("<br>Los datos del ".$clavemayorjugadores.", son :<br>");
    foreach ($jugadores as $clave=>$valor){
    echo($clave." : ".$valor."<br>");
    }
}

echo("<br><br>................................<br><br>");


?>