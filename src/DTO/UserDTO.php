<?php

declare(strict_types=1);

class UserDTO
{
    private int $lp;
    private string $imie;
    private string $nazwisko;
    private string $stanowisko;
    private string $dataZatrudnienia;
    private int $iloscDniUrlopowych;

    public function __construct(
        int $lp,
        string $imie,
        string $nazwisko,
        string $stanowisko,
        string $dataZatrudnienia,
        int $iloscDniUrlopowych
    ) {
        $this->lp = $lp;
        $this->imie = $imie;
        $this->nazwisko = $nazwisko;
        $this->stanowisko = $stanowisko;
        $this->dataZatrudnienia = $dataZatrudnienia;
        $this->iloscDniUrlopowych = $iloscDniUrlopowych;
    }

    public function getLp(): int
    {
        return $this->lp;
    }

    public function getImie(): string
    {
        return $this->imie;
    }

    public function getNazwisko(): string
    {
        return $this->nazwisko;
    }

    public function getStanowisko(): string
    {
        return $this->stanowisko;
    }

    public function getDataZatrudnienia(): string
    {
        return $this->dataZatrudnienia;
    }

    public function getIloscDniUrlopowych(): int
    {
        return $this->iloscDniUrlopowych;
    }
}

