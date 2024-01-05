<?php

namespace WFPay\DTO;

class EmpresaClienteDTO
{
    private string $nomeFantasia;
    private string $razaoSocial;
    private string $cnpj;
    private string $nomeRepresentante;
    private string $cpfRepresentante;
    private string $telefone;
    private string $email;
    private string $endereco;
    private string $numeroEndereco;
    private ?string $complementoEndereco;
    private string $bairro;
    private string $cep;
    private string $cidade;
    private string $uf;
    private string $nomeResponsavelContrato;
    private string $telefoneResponsavelContrato;
    private string $emailResponsavelContrato;


    public function __construct(
        string $nomeFantasia,
        string $razaoSocial,
        string $cnpj,
        string $nomeRepresentante,
        string $cpfRepresentante,
        string $telefone,
        string $email,
        string $endereco,
        string $numeroEndereco,
        ?string $complementoEndereco,
        string $bairro,
        string $cep,
        string $cidade,
        string $uf,
        string $nomeResponsavelContrato,
        string $telefoneResponsavelContrato,
        string $emailResponsavelContrato
    ) {
        $this->nomeFantasia = $nomeFantasia;
        $this->razaoSocial = $razaoSocial;
        $this->cnpj = $cnpj;
        $this->nomeRepresentante = $nomeRepresentante;
        $this->cpfRepresentante = $cpfRepresentante;
        $this->telefone = $telefone;
        $this->email = $email;
        $this->endereco = $endereco;
        $this->numeroEndereco = $numeroEndereco;
        $this->complementoEndereco = $complementoEndereco;
        $this->bairro = $bairro;
        $this->cep = $cep;
        $this->cidade = $cidade;
        $this->uf = $uf;
        $this->nomeResponsavelContrato = $nomeResponsavelContrato;
        $this->telefoneResponsavelContrato = $telefoneResponsavelContrato;
        $this->emailResponsavelContrato = $emailResponsavelContrato;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            $data['nomeFantasia'],
            $data['razaoSocial'],
            $data['cnpj'],
            $data['nomeRepresentante'],
            $data['cpfRepresentante'],
            $data['telefone'],
            $data['email'],
            $data['endereco'],
            $data['numeroEndereco'],
            $data['complementoEndereco'],
            $data['bairro'],
            $data['cep'],
            $data['cidade'],
            $data['uf'],
            $data['nomeResponsavelContrato'],
            $data['telefoneResponsavelContrato'],
            $data['emailResponsavelContrato']
        );
    }

    public function getNomeFantasia(): string
    {
        return $this->nomeFantasia;
    }

    public function getRazaoSocial(): string
    {
        return $this->razaoSocial;
    }

    public function getCnpj() : string
    {
        return $this->cnpj;
    }

    public function getNomeRepresentante(): string
    {
        return $this->nomeRepresentante;
    }

    public function getCpfRepresentante() : string
    {
        return $this->cpfRepresentante;
    }

    public function getTelefone(): string
    {
        return $this->telefone;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getEndereco(): string
    {
        return $this->endereco;
    }

    public function getNumeroEndereco(): string
    {
        return $this->numeroEndereco;
    }

    public function getComplementoEndereco(): ?string
    {
        return $this->complementoEndereco;
    }

    public function getBairro(): string
    {
        return $this->bairro;
    }

    public function getCep() : string
    {
        return $this->cep;
    }

    public function getCidade(): string
    {
        return $this->cidade;
    }

    public function getUf(): string
    {
        return $this->uf;
    }

    public function getNomeResponsavelContrato(): string
    {
        return $this->nomeResponsavelContrato;
    }

    public function getTelefoneResponsavelContrato(): string
    {
        return $this->telefoneResponsavelContrato;
    }

    public function getEmailResponsavelContrato(): string
    {
        return $this->emailResponsavelContrato;
    }
}
