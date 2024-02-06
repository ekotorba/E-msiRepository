<?php

declare(strict_types=1);

require 'src/DTO/InvoiceDTO.php';

class InvoiceService
{
    private InvoicesDataProvider $invoicesProvider;

    public function __construct(InvoicesDataProvider $invoicesArray)
    {
        $this->invoicesProvider = $invoicesArray;
    }

    public function getKwotaBrutto(InvoiceDTO $invoice): string
    {
        $kwotaNetto = floatval($invoice->getKwotaNetto());
        $vatPercentage = floatval($invoice->getVat());

        $kwotaBrutto = $kwotaNetto + ($kwotaNetto * $vatPercentage / 100);

        return number_format($kwotaBrutto, 2, '.', '');
    }

    public function getWartoscNetto(InvoiceDTO $invoice): string
    {
        $kwotaNetto = $invoice->getKwotaNetto();
        $ilosc = $invoice->getIlosc();

        $wartoscNetto = $kwotaNetto * $ilosc;

        return number_format($wartoscNetto, 2, '.', '');
    }

    public function getWartoscBrutto(InvoiceDTO $invoice): string
    {
        $kwotaNetto = floatval($invoice->getKwotaNetto());
        $ilosc = intval($invoice->getIlosc());
        $vat = floatval($invoice->getVat()) / 100;

        $wartoscBrutto = ($kwotaNetto * $ilosc) * (1 + $vat);

        return number_format($wartoscBrutto, 2, '.', '');
    }
}
