<?php
class ContaBancaria
{
    /**
     * @var string
     */
    private string $banco;
    /**
     * @var string
     */
    private string $nomeTitular;
    /**
     * @var string
     */
    private string $numeroAgencia;
    /**
     * @var string
     */
    private string $numeroConta;
    /**
     * @var float
     */
    private float $saldo;

    public function __construct(
        string $banco,
        string $nomeTitular,
        string $numeroAgencia,
        string $numeroConta,
        float $saldoInicial = 0
    ) {
        $this->banco = $banco;
        $this->nomeTitular = $nomeTitular;
        $this->numeroAgencia = $numeroAgencia;
        $this->numeroConta = $numeroConta;
        $this->saldo = $saldoInicial;
    }

    public function obterSaldo(): string
    {
        return "Banco: " .
            $this->banco .
            "\nTitular: " .
            $this->nomeTitular .
            "\nAgência: " .
            $this->numeroAgencia .
            "\nConta: " .
            $this->numeroConta .
            "\nSaldo: R$ " .
            number_format($this->saldo, 2, ",", ".");
    }

    public function depositar(float $valor): string
    {
        if ($valor > 0) {
            $this->saldo += $valor;
            return "Depósito de R$ " .
                number_format($valor, 2, ",", ".") .
                " efetuado com sucesso.";
        } else {
            return "Valor de depósito inválido.";
        }
    }

    public function sacar(float $valor): string
    {
        if ($valor > 0 && $valor <= $this->saldo) {
            $this->saldo -= $valor;
            return "Saque de R$ " .
                number_format($valor, 2, ",", ".") .
                " efetuado com sucesso.";
        } else {
            return "Saldo insuficiente ou valor de saque inválido.";
        }
    }
}

// Criando uma conta
$conta = new ContaBancaria(
    "Banco do Brasil",
    "André Dimitrin",
    "1234-2",
    "5678460-1"
);

// Testando as operações
echo nl2br($conta->obterSaldo()); // Saldo inicial: 0
echo "<br>";
echo $conta->depositar(350);
echo "<br>";
echo nl2br($conta->obterSaldo()); // Saldo após depósito: 350
echo "<br>";
echo $conta->sacar(150);
echo "<br>";
echo nl2br($conta->obterSaldo()); // Saldo após saque: 200
?>
