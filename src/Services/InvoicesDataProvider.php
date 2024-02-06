<?php

declare(strict_types=1);

class InvoicesDataProvider
{
    public function getInvoices(): array
    {
        return [
            [
                'lp' => '1',
                'opis' => 'Produkt A',
                'mpk' => '12345',
                'kwotaNetto' => '1001.00',
                'ilosc' => '2',
                'vat' => '23%',
            ],
            [
                'lp' => '2',
                'opis' => 'Produkt B',
                'mpk' => '67890',
                'kwotaNetto' => '75.50',
                'ilosc' => '3',
                'vat' => '8%',
            ],
            [
                'lp' => '3',
                'opis' => 'Usługa C',
                'mpk' => '54321',
                'kwotaNetto' => '1999',
                'ilosc' => '2',
                'vat' => '0%',
            ],
            [
                'lp' => '4',
                'opis' => 'Produkt D',
                'mpk' => '98765',
                'kwotaNetto' => '50.00',
                'ilosc' => '5',
                'vat' => '5%',
            ],
            [
                'lp' => '5',
                'opis' => 'Usługa E',
                'mpk' => '13579',
                'kwotaNetto' => '120.75',
                'ilosc' => '2',
                'vat' => '18%',
            ],
        ];
    }

}
