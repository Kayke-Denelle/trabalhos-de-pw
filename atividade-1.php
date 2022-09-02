<?php

class Invoice{
    private $numeroFatura;
    private $descItem;
    private $qtdItem;
    private $preco;

    public function __construct($par1, $par2, $par3, $par4 ){
        $this->numeroFatura = $par1;
        $this->descItem = $par2;
        if($par3 <= 0){
            $this->qtdItem = 0;
        }
        else{
            $this->qtdItem = $par3;
        }

        if($par4 <= 0){
            $this->preco = 0.0; 
        }else{
            $this->preco = $par4;
        }
        $this->qtdItem = $par3;
        $this->preco = $par4;
    }


// metodo get e set

    public function __set($atributo, $value){
        $this->$atributo = $value;
    }
    public function __get($atributo){
        return $this->$atributo;
    }

    public function getInvoiceAmount() {
        return ($this->preco * $this->qtdItem);
    }

}

$informatica = new invoice( 19, "monitor", 20, 499,99);

echo "<p>Numero de Fatura : {$informatica->numeroFatura}<p>";

echo "<p>Descrição do Item : {$informatica->descItem}<p>";

echo "<p>Quantidade : {$informatica->qtdItem}<p>";

echo "<p>preço unitario : {$informatica->preco}<p>";

echo "<p>total : {$informatica->getInvoiceAmount()}<p>";


?>