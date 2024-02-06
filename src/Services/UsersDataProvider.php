<?php

declare(strict_types=1);

class UsersDataProvider
{
    public function getUsers(): array
    {
        return [
            [
                'lp' => 1,
                'imie' => 'Jan',
                'nazwisko' => 'Kowalski',
                'stanowisko' => 'Programista',
                'data_zatrudnienia' => '2022-01-01',
                'ilosc_dni_urlopowych' => 20,
            ],
            [
                'lp' => 2,
                'imie' => 'Anna',
                'nazwisko' => 'Nowak',
                'stanowisko' => 'Księgowa',
                'data_zatrudnienia' => '2022-03-15',
                'ilosc_dni_urlopowych' => 25,
            ],
            [
                'lp' => 3,
                'imie' => 'Piotr',
                'nazwisko' => 'Wiśniewski',
                'stanowisko' => 'Specjalista ds. marketingu',
                'data_zatrudnienia' => '2021-08-10',
                'ilosc_dni_urlopowych' => 18,
            ],
            [
                'lp' => 4,
                'imie' => 'Magdalena',
                'nazwisko' => 'Jankowska',
                'stanowisko' => 'Specjalista ds. HR',
                'data_zatrudnienia' => '2022-05-20',
                'ilosc_dni_urlopowych' => 22,
            ],
            [
                'lp' => 5,
                'imie' => 'Adam',
                'nazwisko' => 'Nowicki',
                'stanowisko' => 'Analityk Finansowy',
                'data_zatrudnienia' => '2021-11-03',
                'ilosc_dni_urlopowych' => 18,
            ],
        ];
    }
}
