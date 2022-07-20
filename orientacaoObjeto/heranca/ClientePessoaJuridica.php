<?php

class ClientePessoaJuridica extends Cliente
{

    public string $nomeFantasia;
    public int $cnpj;

    public function verInformacaoEmpresa() :string
    {
        $dados = "Nome fantasia: {$this->nomeFantasia} <br> ";
        $dados .= "CNPJ: {$this->cnpj}";

        return "<p>$dados</p>";
    }

}
