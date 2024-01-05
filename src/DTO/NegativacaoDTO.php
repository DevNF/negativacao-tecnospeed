<?php

namespace WFPay\DTO;

class NegativacaoDTO
{
    private string $nome;
    private string $documento;
    private string $endereco;
    private ?string $enderecoComplemento;
    private string $bairro;
    private string $municipio;
    private string $uf;
    private string $cep;
    private string $nossoNumero;
    private string $especieTitulo;
    private string $numDocumento;
    private string $dataEmissao;
    private string $dataVencimento;
    private float $valorTitulo;
    private ?string $numAgencia;
    private ?string $numConta;
    private ?string $codBanco;
    private ?string $numCheque;
    private ?string $codAlinea;
    private ?string $codEndosso;
    private ?string $codAceite;

    public function __construct(
        string $nome,
        string $documento,
        string $endereco,
        ?string $enderecoComplemento,
        string $bairro,
        string $municipio,
        string $uf,
        string $cep,
        string $nossoNumero,
        string $especieTitulo,
        string $numDocumento,
        string $dataEmissao,
        string $dataVencimento,
        float $valorTitulo,
        ?string $numAgencia,
        ?string $numConta,
        ?string $codBanco,
        ?string $numCheque,
        ?string $codAlinea,
        ?string $codEndosso,
        ?string $codAceite
    ) {
        $this->nome = $nome;
        $this->documento = $documento;
        $this->endereco = $endereco;
        $this->enderecoComplemento = $enderecoComplemento;
        $this->bairro = $bairro;
        $this->municipio = $municipio;
        $this->uf = $uf;
        $this->cep = $cep;
        $this->nossoNumero = $nossoNumero;
        $this->especieTitulo = $especieTitulo;
        $this->numDocumento = $numDocumento;
        $this->dataEmissao = $dataEmissao;
        $this->dataVencimento = $dataVencimento;
        $this->valorTitulo = $valorTitulo;
        $this->numAgencia = $numAgencia;
        $this->numConta = $numConta;
        $this->codBanco = $codBanco;
        $this->numCheque = $numCheque;
        $this->codAlinea = $codAlinea;
        $this->codEndosso = $codEndosso;
        $this->codAceite = $codAceite;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            $data['nome'],
            $data['documento'],
            $data['endereco'],
            $data['enderecoComplemento'] ?? null,
            $data['bairro'],
            $data['municipio'],
            $data['uf'],
            $data['cep'],
            $data['divida']['nossoNumero'],
            $data['divida']['especieTitulo'],
            $data['divida']['numDocumento'],
            $data['divida']['dataEmissao'],
            $data['divida']['dataVencimento'],
            $data['divida']['valorTitulo'],
            $data['divida']['numAgencia'] ?? null,
            $data['divida']['numConta'] ?? null,
            $data['divida']['codBanco'] ?? null,
            $data['divida']['numCheque'] ?? null,
            $data['divida']['codAlinea'] ?? null,
            $data['divida']['codEndosso'] ?? null,
            $data['divida']['codAceite'] ?? null
        );
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function getDocumento(): string
    {
        return $this->documento;
    }

    public function getEndereco(): string
    {
        return $this->endereco;
    }

    public function getEnderecoComplemento(): ?string
    {
        return $this->enderecoComplemento;
    }

    public function getBairro(): string
    {
        return $this->bairro;
    }

    public function getMunicipio(): string
    {
        return $this->municipio;
    }

    public function getUf(): string
    {
        return $this->uf;
    }

    public function getCep(): string
    {
        return $this->cep;
    }

    public function getNossoNumero(): string
    {
        return $this->nossoNumero;
    }

    public function getEspecieTitulo(): string
    {
        return $this->especieTitulo;
    }

    public function getNumDocumento(): string
    {
        return $this->numDocumento;
    }

    public function getDataEmissao(): string
    {
        return $this->dataEmissao;
    }

    public function getDataVencimento(): string
    {
        return $this->dataVencimento;
    }

    public function getValorTitulo(): string
    {
        return $this->valorTitulo;
    }

    public function getNumAgencia(): ?string
    {
        return $this->numAgencia;
    }

    public function getNumConta(): ?string
    {
        return $this->numConta;
    }

    public function getCodBanco(): ?string
    {
        return $this->codBanco;
    }

    public function getNumCheque(): ?string
    {
        return $this->numCheque;
    }

    public function getCodAlinea(): ?string
    {
        return $this->codAlinea;
    }

    public function getCodEndosso(): ?string
    {
        return $this->codEndosso;
    }

    public function getCodAceite(): ?string
    {
        return $this->codAceite;
    }
}
