<?php

namespace WFPay\DTO;

class TaxasEmpresaClienteDTO
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
    private float $codConsulta1PF;
    private float $codConsulta2PF;
    private float $codConsulta3PF;
    private float $codConsulta4PF;
    private float $codConsulta1PJ;
    private float $codConsulta2PJ;
    private float $codConsulta3PJ;
    private float $codConsulta4PJ;
    private float $codConsultaNegativacao;


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
        string $emailResponsavelContrato,
        float $codConsulta1PF,
        float $codConsulta2PF,
        float $codConsulta3PF,
        float $codConsulta4PF,
        float $codConsulta1PJ,
        float $codConsulta2PJ,
        float $codConsulta3PJ,
        float $codConsulta4PJ,
        float $codConsultaNegativacao
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
        $this->codConsulta1PF = $codConsulta1PF;
        $this->codConsulta2PF = $codConsulta2PF;
        $this->codConsulta3PF = $codConsulta3PF;
        $this->codConsulta4PF = $codConsulta4PF;
        $this->codConsulta1PJ = $codConsulta1PJ;
        $this->codConsulta2PJ = $codConsulta2PJ;
        $this->codConsulta3PJ = $codConsulta3PJ;
        $this->codConsulta4PJ = $codConsulta4PJ;
        $this->codConsultaNegativacao = $codConsultaNegativacao;
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
            $data['emailResponsavelContrato'],
            $data['taxas']['codConsulta1PF'],
            $data['taxas']['codConsulta2PF'],
            $data['taxas']['codConsulta3PF'],
            $data['taxas']['codConsulta4PF'],
            $data['taxas']['codConsulta1PJ'],
            $data['taxas']['codConsulta2PJ'],
            $data['taxas']['codConsulta3PJ'],
            $data['taxas']['codConsulta4PJ'],
            $data['taxas']['codConsultaNegativacao']
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

    public function getCodConsulta1PF(): float
    {
        return $this->codConsulta1PF;
    }

    public function getCodConsulta2PF(): float
    {
        return $this->codConsulta2PF;
    }

    public function getCodConsulta3PF(): float
    {
        return $this->codConsulta3PF;
    }

    public function getCodConsulta4PF(): float
    {
        return $this->codConsulta4PF;
    }

    public function getCodConsulta1PJ(): float
    {
        return $this->codConsulta1PJ;
    }

    public function getCodConsulta2PJ(): float
    {
        return $this->codConsulta2PJ;
    }

    public function getCodConsulta3PJ(): float
    {
        return $this->codConsulta3PJ;
    }

    public function getCodConsulta4PJ(): float
    {
        return $this->codConsulta4PJ;
    }

    public function getCodConsultaNegativacao(): float
    {
        return $this->codConsultaNegativacao;
    }
}
