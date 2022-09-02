<?php

class Empregado{
    private $nome;
    private $sobrenome;
    private $salarioMensal;
    

    public function __construct($par1, $par2, $par3){
        $this->nome = $par1;
        $this->sobrenome = $par2;
        $this->salarioMensal = $par3;

        if($par3 <= 0){
            $this->salarioMensal = 0.0; 
        }else{
            $this->salarioMensal = $par3;
        }
        
    }

    public function __set($atributo, $value){
        $this->$atributo = $value;
    }
    public function __get($atributo){
        return $this->$atributo;
    }
    public function getEmpregadosAmount() {
        return ($this->salarioMensal * 12);
    }
    public function getAumentoAmount() {
        return ($this->salarioMensal / 10 + $this->salarioMensal);
    }
    
}

$funcionarios = new Empregado( "kayke", "Denelle", 1500,00);

echo "<p>Nome : {$funcionarios->nome}<p>";

echo "<p>sobrenome : {$funcionarios->sobrenome}<p>";

echo "<p>salario mensal : {$funcionarios->salarioMensal}<p>";

echo "<p>salario anual : {$funcionarios->getEmpregadosAmount()}<p>";

echo "<p>Aumento do salario : {$funcionarios->getAumentoAmount()}<p>";

?>