<?php
$preco = 2;
if(preco >= 20){
    echo "Não posso comprar!";
}else{
    echo 'Posso comprar!';
}

$nota= 9.5;
echo "<br>";
if($nota >= 7){
    echo 'Aprovado';
}else if($nota >= 4){
    echo'Recuperação';
}else{
    echo 'Reprovado';
}
?>