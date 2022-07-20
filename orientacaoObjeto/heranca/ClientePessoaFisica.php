<?php

class ClientePessoaFisica extends Cliente
{
    public string $nome;
    public int $cpf;

    public function verInformacaoUsuario() :string
    {
        $dados = "<h3>Dados da Pessoa Física</h3>";
        $dados .= "Nome: {$this->nome} <br>";
        $dados .= "CPF: {$this->cpf} ";

        return "<p>$dados</p>";
    }

}
