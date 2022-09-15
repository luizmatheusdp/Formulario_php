<?php
$vlcompra=$_POST['vlcompra'];
$parcela=$_POST['parcela'];
$valordeparcela=($vlcompra/$parcela);
if ($parcela==0) {
     echo "erro, sem parcela ou valor";
}else{
echo "<br><h1>";
echo("o valor total é de ".$vlcompra." reais parcelado em ".$parcela." vezes de ".$valordeparcela." reais");
echo "<br></h1>";
}

?>