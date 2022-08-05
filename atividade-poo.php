<?php

class pessoas{

public $id;
public $nome;
public $RG;
public $sexo;
public $etnia;
public $Datanasc;
public $nacionalidade;
public $endereço;
public $ocupação;

function __construct($idC, $nome, $RG, $sex, $etn, $DN, $nacio, $end, $ocup){
    $this->id = $idC;
    $this->nome = $nome;
    $this->RG = $RG;
    $this->sexo = $sex;
    $this->etnia = $etn;
    $this->datanasc = $DN;
    $this->nacionalidade = $nacio;
    $this->endereço = $end;
    $this->ocupação = $ocup;
}

    }

    $pessoas = new pessoas("1", "carlos", "5518964504", "masculino", "pardo", "18/10/2004", "brasileiro", "jardim paulistano", "progamador");

echo "Código: ". $pessoas->id;
echo "<br>";
echo "Nome: ". $pessoas->nome;
echo "<br>";
echo "RG: " .$pessoas->RG;
echo "<br>";
echo "sexo: " .$pessoas->sexo;
echo "<br>";
echo "etnia: " .$pessoas->etnia;
echo "<br>";
echo "datanasc: " .$pessoas->datanasc;
echo "<br>";
echo "nacionalidade: " .$pessoas->nacionalidade;
echo "<br>";
echo "endereço: " .$pessoas->endereço;
echo "<br>";
echo "ocupação: " .$pessoas->ocupação;
echo "<br>";


?>
