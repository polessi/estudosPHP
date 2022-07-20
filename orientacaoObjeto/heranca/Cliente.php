<?php

class Cliente
{
    public string $logradouro;
    public string $bairro;
    public int $numero;

    public function verEndereco() :string
    {
        return "
                    <h3>Endereço Cliente</h3>
                    <p>Endereço: {$this->logradouro} </br> 
                    Bairro: {$this->bairro} <br> 
                    Número: {$this->numero}</p>
               ";
    }
}
