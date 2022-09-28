<?php
include 'funcao_tela.php';
$numeros = [3.5, 6, 8.75, 9, "joana", TRUE];

linha(70, "=");
echo "soma = ".soma($numeros). "<br>";
echo "soma = ".soma1(5, 6, 8, 7, 9.6, 10.63). "<br>";
linha(60, "=");


//função anonima
$mensagem = function(){
    date_default_timezone_set('America/Sao_Paulo');
    echo  "Hoje é: ". date('d/m/y - H:i:s')."<br>";
    $hora = date('H');
    if($hora > 0 && $hora <= 12){
        echo "Bom dia";
    }elseif ($hora > 12 && $hora < 18) {
        echo "boa tarde";
    }else{
        echo "boa noite";
    }
};

echo $mensagem();



//=============DECLARAÇÃO DAS FUNÇÕES============

function soma($vetor=array()){
    $resultado = 0;
    foreach ($vetor as $v){
        echo $v."<br>";
    }
    foreach ($vetor as $v){
        if(is_int($v) || is_float($v))
            $resultado += $v;
        continue;
    }
    return $resultado;
}
function soma1(float ...$vetor):int{
    $resultado = 0;
    foreach ($vetor as $v ){
        if(is_int($v) || is_float($v))
            $resultado += $v;
        continue;
    }
    return $resultado;
}



?>
