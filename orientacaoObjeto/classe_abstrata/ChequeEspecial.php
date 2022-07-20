<?php

class ChequeEspecial extends Cheque
{
    public function calcularJuro(): string
    {
        $valorComJuro = $this->valor + (0.40 * $this->valor);
        // $valorConvReal = parent::converterReal($this->valor);
        $valorConvReal = $this->converterReal($valorComJuro);
        return "Valor do cheque {$this->tipo} sem juro é de R$ {$this->converterReal($this->valor)} e com juro é de R$ {$valorConvReal} <hr>";
    }
}