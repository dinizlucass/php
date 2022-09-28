<?php
$numero1 = 52;
$numero2 = 3;
echo "Função multiplica do is valores internos e exibe o resultado<br>";
multiplica();
multiplican1($numero1, $numero2);
linha();
//$calculo = multiplica2();
//echo "muplicação = $calculo<br>";
echo "multiplicação = ".multiplica2()."<br>";
echo "2 multiplicação = ".multiplica3($numero1, $numero2)."<br>";

//=================DECLARAÇÂO DAS FUNÇÕES=========
function multiplican1($n1, $n2){
    $resultado = $n1 * $n2;
    echo "Resultado de $n1 * $n2 = $resultado <br>";
}
function multiplica(){
    $num1 = 23;
    $num2 = 4;
    $resultado = $num1 * $num2;
    echo "Resultado de $num1 * $num2 = $resultado <br>";
}
function linha(){
    for ($i = 1; $i <= 40; $i++){
        echo "-";
    }
    echo "<br>";
}
function multiplica2(){
    $num1 = 3;
    $num2 = 42;
    $resultado = $num1 * $num2;
    return $resultado;
}
function multiplica3($n1, $n2){
    $resultado = $n1 * $n2;
    return $resultado;
}






?>