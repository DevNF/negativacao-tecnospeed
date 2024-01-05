<?php 

namespace WFPay;
use GuzzleHttp\Client;
use WFPay\Config\ProductionData;
use WFPay\Config\SandboxData;

class HttpClient
{
    private Client $clientHttp;

    public function __construct(private apiNegativacao $client)
    {
        $baseUri = $this->client->getIsProduction() ? ProductionData::BASE_URI : SandboxData::BASE_URI;

        $this->clientHttp = new Client([
            'base_uri' => $baseUri,
            'headers' => [
                'Content-Type' => 'application/json',
                'cnpjSH' => $this->client->getCnpjSH(),
                'tokenSH' => $this->client->getTokenSH(),
                'cnpjUsuario' => $this->client->getCnpjUsuario(),
                'login' => $this->client->getLogin(),
                'password' => $this->client->getSenha()
            ],
        ]);
    }

    public function exec($method, $uri, $options = [])
    {
        $res = $this->clientHttp->request($method, $uri, array_merge([
            'debug' => $this->client->getDebug(),
            'http_errors' => false,
            ],$options))->getBody()->getContents();

        return json_decode($res, true);
    }
}