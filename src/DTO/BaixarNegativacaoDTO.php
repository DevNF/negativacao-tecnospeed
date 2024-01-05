<?php

namespace WFPay\DTO;


class BaixarNegativacaoDTO {
    private string $protocolo;
    private string $codMotivo;

    public function __construct(
        string $protocolo,
        string $codMotivo
    ) {
        $this->protocolo = $protocolo;
        $this->codMotivo = $codMotivo;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            $data['protocolo'],
            $data['codMotivo']
        );
    }

    public function getProtocolo(): string
    {
        return $this->protocolo;
    }

    public function getCodMotivo(): string
    {
        return $this->codMotivo;
    }
}