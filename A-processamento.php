<?php
echo "<h1> Suas Informações</h1>";

$nome =  $_REQUEST["nome"]; 
$Logradouro = $_REQUEST["Logradouro"];
$Número =  $_REQUEST["NumResidencia"];
$CEP =  $_REQUEST["cep"];
$Complemento =  $_REQUEST["Complemento"];
$Bairro =  $_REQUEST["Bairro"];
$Cidade =  $_REQUEST["Cidade"];
$Estado =  $_REQUEST["Estado"];



if( empty($nome)){
     echo "CAMPO NOME OBRIGATÓRIO!!!";
     header("Location: A-FormulárioDePw.php?erro=nome");
}elseif( strlen($Logradouro)<=4){
    echo "CAMPO Logradouro OBRIGATÓRIO!!!";
    header("Location: A-FormulárioDePw.php?erro=Logradouro");
}elseif( strlen($Número)<=1){
    echo "CAMPO Número OBRIGATÓRIO!!!";
    header("Location: A-FormulárioDePw.php?erro=Número");
}elseif( strlen($CEP)<=7){
    echo "CAMPO CEP OBRIGATÓRIO!!!";
    header("Location: A-FormulárioDePw.php?erro=CEP");
}elseif( strlen($Complemento)<=3){
    echo "CAMPO Complemento OBRIGATÓRIO!!!";
    header("Location: A-FormulárioDePw.php?erro=Complemento");
}elseif( strlen($Bairro)<=2){
    echo "CAMPO Bairro OBRIGATÓRIO!!!";
    header("Location: A-FormulárioDePw.php?erro=Bairro");
}elseif( strlen($Cidade)<=2){
    echo "CAMPO Cidade OBRIGATÓRIO!!!";
    header("Location: A-FormulárioDePw.php?erro=Cidade");
}elseif( strlen($Estado)<=1){
    echo "CAMPO Estado OBRIGATÓRIO!!!";
    header("Location: A-FormulárioDePw.php?erro=Estado");
}else{
    echo "Nome: ".$nome;
    echo "<br>";
    echo "Logradouro:".$Logradouro;
    echo "<br>";
    echo "Número: ".$Número;
    echo "<br>";
    echo "CEP: ".$CEP;
    echo "<br>";
    echo "Complemento: ".$Complemento;
    echo "<br>";
    echo "Bairro: ".$Bairro;
    echo "<br>";
    echo "Cidade: ".$Cidade;
    echo "<br>";
    echo "Estado: ".$Estado;
    echo "<br>";
}
?>
<BR>
<?php

	echo "<h1> Informações Comprovante de endereço </h1>";

$arq = "./imagem/".$_FILES["arq"]["name"];
$tmp = $_FILES["arq"]["tmp_name"];
$tipoImg = $_FILES["arq"]["type"];

	if($tipoImg == "image/jpeg" || $tipoImg == "image/png"){
	if (move_uploaded_file($tmp, $arq)){
		echo "<h4> arquivo enviado com sucesso!! </h4>";

		echo "<br>";

		echo "nome :" .$_FILES["arq"]["name"]. "<br>";
		echo "tipo :" .$_FILES["arq"]["type"]. "<br>";
		echo "tamanho :" .$_FILES["arq"]["size"]. "<br>";
		echo "error :" .$_FILES["arq"]["error"]. "<br>";
		echo "diretório :" .$arq. "<br>";
		echo "<br>";
	}
		}
	else{
		echo "arquivo não compatível";	
		}
?>


