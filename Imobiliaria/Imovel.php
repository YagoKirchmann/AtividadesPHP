<?php

abstract class Imovel{
    protected $endereco;
    protected $preco;

    public function cadastra($endereco,$preco){
        $this->endereco=$endereco;
        $this->preco=$preco;
    }

    protected abstract function desconto();
}

class Novo extends Imovel{
    private $dataEntrega;
    private $desconto;
    private $descontoMax = 0.1;
    
    public function cadastraNovo($endereco,$preco,$dataEntrega){
        parent::cadastra($endereco,$preco);
        $this->dataEntrega=$dataEntrega;
    }

    public function descontoNovo($desconto){
        if($desconto>$this->descontoMax){ 
            $this->desconto=$this->descontoMax;
            $this->descontoMax=$this->desconto();
            echo nl2br("\nPreço maximo do desconto é R$".$this->desconto());
        } else {
            $this->desconto=$desconto;
            echo nl2br("\nPreço do desconto é R$".$this->desconto());
        }
    }

    protected function desconto(){
        return $this->preco*$this->desconto;
    }

    public function imprimeNovo(){
        echo nl2br("\n | Imovel Novo! |\n");
        echo nl2br("\nEndereço: ".$this->endereco);
        echo nl2br("\nPreço atual: R$".$this->preco);
        echo nl2br("\nData de Entrega: ".$this->dataEntrega);
    }
}

class Usado extends Imovel{
    private $pintura;
    private $desconto;
    private $descontoMax = 0.2;
    
    public function cadastraNovo($endereco,$preco,$pintura){
        parent::cadastra($endereco,$preco);
        $this->pintura=$pintura;
    }

    public function descontoNovo($desconto){
        if($desconto>$this->descontoMax){ 
            $this->desconto=$this->descontoMax;
            $this->descontoMax=$this->desconto();
            echo nl2br("\nPreço maximo do desconto é R$".$this->desconto());
        } else {
            $this->desconto=$desconto;
            echo nl2br("\nPreço do desconto é R$".$this->desconto());
        }
    }

    protected function desconto(){
        return $this->preco*$this->desconto;
    }

    public function imprimeNovo(){
        echo nl2br("\n\n | Imovel Usado! |\n");
        echo nl2br("\nEndereço: ".$this->endereco);
        echo nl2br("\nPreço atual: R$".$this->preco);
        echo nl2br("\nPintura residêncial: ".$this->pintura);
    }
}

$apartamento = new Novo();
$apartamento -> cadastraNovo("Rua Roque Calage, 280",350000,"12/07/2023");
$apartamento -> imprimeNovo();
$apartamento -> descontoNovo(0.05);

$casa = new Usado();
$casa -> cadastraNovo("Rua Jorge Lacerda, 181",460000,"Nova na cor branca");
$casa -> imprimeNovo();
$casa -> descontoNovo(0.5);

$casa2 = new Usado();
