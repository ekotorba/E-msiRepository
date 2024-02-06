<?php

declare(strict_types=1);

class InvoiceDTO
{
    private string $lp;
    private string $opis;
    private string $mpk;
    private string $kwotaNetto;
    private string $ilosc;
    private string $vat;

    public function __construct(
        string $lp,
        string $opis,
        string $mpk,
        string $kwotaNetto,
        string $ilosc,
        string $vat,
    ) {
        $this->lp = $lp;
        $this->opis = $opis;
        $this->mpk = $mpk;
        $this->kwotaNetto = $kwotaNetto;
        $this->ilosc = $ilosc;
        $this->vat = $vat;
    }

    public function getLp(): string
    {
        return $this->lp;
    }

    public function getOpis(): string
    {
        return $this->opis;
    }

    public function getMpk(): string
    {
        return $this->mpk;
    }

    public function getKwotaNetto(): string
    {
        return $this->kwotaNetto;
    }

    public function getIlosc(): string
    {
        return $this->ilosc;
    }

    public function getVat(): string
    {
        return $this->vat;
    }
}
