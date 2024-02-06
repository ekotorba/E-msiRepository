<?php

declare(strict_types=1);

class ContractorDTO
{
    private int $id;
    private string $nip;
    private string $regon;
    private string $nazwa;
    private bool $platnikVAT;
    private string $ulica;
    private string $numerDomu;
    private string $numerMiekszkania;

    public function __construct(
        int $id,
        string $nip,
        string $regon,
        string $nazwa,
        bool $platnikVAT,
        string $ulica,
        string $numerDomu,
        string $numerMiekszkania
    ) {
        $this->id = $id;
        $this->nip = $nip;
        $this->regon = $regon;
        $this->nazwa = $nazwa;
        $this->platnikVAT = $platnikVAT;
        $this->ulica = $ulica;
        $this->numerDomu = $numerDomu;
        $this->numerMiekszkania = $numerMiekszkania;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getNip(): string
    {
        return $this->nip;
    }

    public function getRegon(): string
    {
        return $this->regon;
    }

    public function getNazwa(): string
    {
        return $this->nazwa;
    }

    public function getPlatnikVAT(): bool
    {
        return $this->platnikVAT;
    }

    public function getUlica(): string
    {
        return $this->ulica;
    }

    public function getNumerDomu(): string
    {
        return $this->numerDomu;
    }

    public function getNumerMiekszkania(): string
    {
        return $this->numerMiekszkania;
    }
}

