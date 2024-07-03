<?php


class Vendas
{
    private $data;
    private $produto;
    private $quantidade;
    private $valorTotal;
    
    public function __construct($data, $produto, $quantidade, $valorTotal)
    {
        $this->data = $data;
        $this->produto = $produto;
        $this->quantidade = $quantidade;
        $this->valorTotal = $valorTotal;
    }

    public function exibiDados()
    {
        echo "Data: " . $this->data . "<br>";
        echo "Produto: " . $this->produto . "<br>";
        echo "Quantidade: " . $this->quantidade . "<br>";
        echo "Valor Total: " . $this->valorTotal . "<br>";
    }
}

$dadosVendas = new Vendas (
    '01/01/2022',
    'Mouse',
    10,
    100
);

$dadosVendas->exibiDados();
