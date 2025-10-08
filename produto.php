<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style1.css">
    <title>Document</title>
</head>
<body>
     <div class="resultado-container">
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


echo "o produto $produto com o valor $valor teve um desconte de ".$desconto*100 ."% e saiu por $".number_format($valor_final,3,".",",");
echo "<br><br>";
echo "<a href='index.html'>volta</a>";
?>

</div>
</body>
</html>
