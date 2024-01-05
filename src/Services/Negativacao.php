<?php

namespace WFPay\Services;
use WFPay\DTO\BaixarNegativacaoDTO;
use WFPay\apiNegativacao;
use WFPay\DTO\NegativacaoDTO;


class Negativacao
{
    public function __construct(private apiNegativacao $client)
    {
    }

    public function cadastrarNegativacao(array $data)
    {
        $negativacaoDTO = NegativacaoDTO::fromArray($data);

        try {
            return $this->client->getHttpClient()->exec('POST', 'negativacao', [
                'json' => [
                    'nome' => $negativacaoDTO->getNome(),
                    'documento' => $negativacaoDTO->getDocumento(),
                    'endereco' => $negativacaoDTO->getEndereco(),
                    'enderecoComplemento' => $negativacaoDTO->getEnderecoComplemento(),
                    'bairro' => $negativacaoDTO->getBairro(),
                    'municipio' => $negativacaoDTO->getMunicipio(),
                    'uf' => $negativacaoDTO->getUf(),
                    'cep' => $negativacaoDTO->getCep(),
                    'divida' => [
                        'nossoNumero' => $negativacaoDTO->getNossoNumero(),
                        'especieTitulo' => $negativacaoDTO->getEspecieTitulo(),
                        'numDocumento' => $negativacaoDTO->getNumDocumento(),
                        'dataEmissao' => $negativacaoDTO->getDataEmissao(),
                        'dataVencimento' => $negativacaoDTO->getDataVencimento(),
                        'valorTitulo' => $negativacaoDTO->getValorTitulo(),
                        'numAgencia' => $negativacaoDTO->getNumAgencia(),
                        'numConta' => $negativacaoDTO->getNumConta(),
                        'codBanco' => $negativacaoDTO->getCodBanco(),
                        'numCheque' => $negativacaoDTO->getNumCheque(),
                        'codAlinea' => $negativacaoDTO->getCodAlinea(),
                        'codEndosso' => $negativacaoDTO->getCodEndosso(),
                        'codAceite' => $negativacaoDTO->getCodAceite()
                    ]
                ]
            ]);
        } catch (\Exception $e) {
            throw new \Exception($e->getMessage());
        }
    }

    public function consultarNegativacao(string $protocolo)
    {
        try {
            return $this->client->getHttpClient()->exec('GET', 'negativacao', [
                'query' => [
                    'protocolo' => $protocolo
                ]
            ]);
        } catch (\Exception $e) {
            throw new \Exception($e->getMessage());
        }
    }

    public function baixarNegativacao(array $data)
    {
        $baixarNegativacaoDTO = BaixarNegativacaoDTO::fromArray($data);
        try {
            return $this->client->getHttpClient()->exec('POST', 'negativacao/remover', [
                'json' => [
                    'protocolo' => $baixarNegativacaoDTO->getProtocolo(),
                    'codMotivo' => $baixarNegativacaoDTO->getCodMotivo()
                ]
            ]);
        } catch (\Exception $e) {
            throw new \Exception($e->getMessage());
        }
    }
}
