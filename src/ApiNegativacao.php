<?php

namespace WFPay;
use WFPay\Services\EmpresaCliente;
use WFPay\Services\Negativacao;

class ApiNegativacao
{
    private bool $isProduction = false;
    private bool $debug = false;
    private HttpClient $httpClient;

    public function __construct(
        private string $cnpjSH,
        private string $tokenSH,
        private string $cnpjUsuario,
        private string $login,
        private string $senha,
        $isProduction = false,
        $debug = false)
    {
        $this->cnpjSH = $cnpjSH;
        $this->tokenSH = $tokenSH;
        $this->cnpjUsuario = $cnpjUsuario;
        $this->login = $login;
        $this->senha = $senha;
        $this->isProduction = $isProduction;
        $this->debug = $debug;
        $this->httpClient = new HttpClient($this);
    }

    public function EmpresaCliente(): EmpresaCliente
    {
        return new EmpresaCliente($this);
    }
    public function Negativacao(): Negativacao
    {
        return new Negativacao($this);
    }

    public function getHttpClient(): HttpClient
    {
        return $this->httpClient;
    }

    public function getIsProduction(): bool
    {
        return $this->isProduction;
    }

    public function setIsProduction(bool $isProduction): void
    {
        $this->isProduction = $isProduction;
    }

    public function getDebug(): bool
    {
        return $this->debug;
    }

    public function setDebug(bool $debug): void
    {
        $this->debug = $debug;
    }

    public function getCnpjSH(): string
    {
        return $this->cnpjSH;
    }

    public function getTokenSH(): string
    {
        return $this->tokenSH;
    }

    public function getCnpjUsuario(): string
    {
        return $this->cnpjUsuario;
    }
    public function getLogin(): string
    {
        return $this->login;
    }

    public function getSenha(): string
    {
        return $this->senha;
    }

}
