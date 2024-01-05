<?php

namespace WFPay\Services;
use WFPay\DTO\EmpresaClienteDTO;
use WFPay\apiNegativacao;
use WFPay\DTO\TaxasEmpresaClienteDTO;


class EmpresaCliente
{
    public function __construct(private apiNegativacao $client)
    {
    }

    public function consultaEmpresa(string $cnpj)
    {
        try {
            return $this->client->getHttpClient()->exec('GET', 'cadastros', [
                'query' => [
                    'cnpj' => $cnpj
                ]
            ]);
        } catch (\Exception $e) {
            throw new \Exception($e->getMessage());
        }
    }

    public function consultaTaxas(string $cnpj)
    {
        try {
            return $this->client->getHttpClient()->exec('GET', 'cadastro/taxa', [
                'query' => [
                    'cnpj' => $cnpj
                ]
            ]);
        } catch (\Exception $e) {
            throw new \Exception($e->getMessage());
        }
    }

    public function cadastrarEmpresa(array $data)
    {
        $EmpresaClienteDTO = EmpresaClienteDTO::fromArray($data);

        try {
            return $this->client->getHttpClient()->exec('POST', 'cadastros', [
                'json' => [
                    'nomeFantasia' => $EmpresaClienteDTO->getNomeFantasia(),
                    'razaoSocial' => $EmpresaClienteDTO->getRazaoSocial(),
                    'cnpj' => $EmpresaClienteDTO->getCnpj(),
                    'nomeRepresentante' => $EmpresaClienteDTO->getNomeRepresentante(),
                    'cpfRepresentante' => $EmpresaClienteDTO->getCpfRepresentante(),
                    'telefone' => $EmpresaClienteDTO->getTelefone(),
                    'email' => $EmpresaClienteDTO->getEmail(),
                    'endereco' => $EmpresaClienteDTO->getEndereco(),
                    'numeroEndereco' => $EmpresaClienteDTO->getNumeroEndereco(),
                    'complementoEndereco' => $EmpresaClienteDTO->getComplementoEndereco(),
                    'bairro' => $EmpresaClienteDTO->getBairro(),
                    'cep' => $EmpresaClienteDTO->getCep(),
                    'cidade' => $EmpresaClienteDTO->getCidade(),
                    'uf' => $EmpresaClienteDTO->getUf(),
                    'nomeResponsavelContrato' => $EmpresaClienteDTO->getNomeResponsavelContrato(),
                    'telefoneResponsavelContrato' => $EmpresaClienteDTO->getTelefoneResponsavelContrato(),
                    'emailResponsavelContrato' => $EmpresaClienteDTO->getEmailResponsavelContrato()
                ]
            ]);
        } catch (\Exception $e) {
            throw new \Exception($e->getMessage());
        }
    }

    public function cadastroComTaxas(array $data)
    {
        $TaxasEmpresaClienteDTO = TaxasEmpresaClienteDTO::fromArray($data);

        try {
            return $this->client->getHttpClient()->exec('POST', 'cadastro/taxa', [
                'json' => [
                    'nomeFantasia' => $TaxasEmpresaClienteDTO->getNomeFantasia(),
                    'razaoSocial' => $TaxasEmpresaClienteDTO->getRazaoSocial(),
                    'cnpj' => $TaxasEmpresaClienteDTO->getCnpj(),
                    'nomeRepresentante' => $TaxasEmpresaClienteDTO->getNomeRepresentante(),
                    'cpfRepresentante' => $TaxasEmpresaClienteDTO->getCpfRepresentante(),
                    'telefone' => $TaxasEmpresaClienteDTO->getTelefone(),
                    'email' => $TaxasEmpresaClienteDTO->getEmail(),
                    'endereco' => $TaxasEmpresaClienteDTO->getEndereco(),
                    'numeroEndereco' => $TaxasEmpresaClienteDTO->getNumeroEndereco(),
                    'complementoEndereco' => $TaxasEmpresaClienteDTO->getComplementoEndereco(),
                    'bairro' => $TaxasEmpresaClienteDTO->getBairro(),
                    'cep' => $TaxasEmpresaClienteDTO->getCep(),
                    'cidade' => $TaxasEmpresaClienteDTO->getCidade(),
                    'uf' => $TaxasEmpresaClienteDTO->getUf(),
                    'nomeResponsavelContrato' => $TaxasEmpresaClienteDTO->getNomeResponsavelContrato(),
                    'telefoneResponsavelContrato' => $TaxasEmpresaClienteDTO->getTelefoneResponsavelContrato(),
                    'emailResponsavelContrato' => $TaxasEmpresaClienteDTO->getEmailResponsavelContrato(),
                    'taxas' => [
                        "codConsulta1PF" => $TaxasEmpresaClienteDTO->getCodConsulta1PF(),
                        "codConsulta2PF" => $TaxasEmpresaClienteDTO->getCodConsulta2PF(),
                        "codConsulta3PF" => $TaxasEmpresaClienteDTO->getCodConsulta3PF(),
                        "codConsulta4PF" => $TaxasEmpresaClienteDTO->getCodConsulta4PF(),
                        "codConsulta1PJ" => $TaxasEmpresaClienteDTO->getCodConsulta1PJ(),
                        "codConsulta2PJ" => $TaxasEmpresaClienteDTO->getCodConsulta2PJ(),
                        "codConsulta3PJ" => $TaxasEmpresaClienteDTO->getCodConsulta3PJ(),
                        "codConsulta4PJ" => $TaxasEmpresaClienteDTO->getCodConsulta4PJ(),
                        "codConsultaNegativacao" => $TaxasEmpresaClienteDTO->getCodConsultaNegativacao()
                    ]
                ]
            ]);
        } catch (\Exception $e) {
            throw new \Exception($e->getMessage());
        }
    }
}
