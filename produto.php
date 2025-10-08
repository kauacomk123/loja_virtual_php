<?php 

$produto = $_POST ['nome_produto'];
$valor = $_POST ['valor'];
$categoria = $_POST ['categoria'];

$desconto = 0;

switch($categoria){
    case 1 :
        $desconto =0.10;
        break;
    case 2 :
        $desconto = 0.20;
        break;
    case 3 :
        $desconto = 0.05;
        break;
}

$valor_desconto = $valor*$desconto;
$valor_final = $valor - $valor_desconto;


echo "o produto $produto com o valor $valor teve um desconte de $desconto e saiu por $$valor_final";


?>
<br>
<a href="index.html">volta</a>