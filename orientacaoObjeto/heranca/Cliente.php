<?php

class Cliente
{
    public string $logradouro;
    public string $bairro;
    public int $numero;

    public function verEndereco() :string{
        return "<p>Endereço: {$this->logradouro} </br> Bairro: {$this->bairro} <br> Número: {$this->numero}</p>";
    }
}
