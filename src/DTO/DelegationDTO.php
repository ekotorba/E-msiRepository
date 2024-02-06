<?php

class DelegationDTO
{
    private int $id;
    private string $imieINazwisko;
    private string $dateFrom;
    private string $dateTo;
    private string $miejsceWyjazdu;
    private string $miejscePrzyjazdu;

    public function __construct(
        int $id,
        string $imieINazwisko,
        string $dateFrom,
        string $dateTo,
        string $miejsceWyjazdu,
        string $miejscePrzyjazdu
    ) {
        $this->id = $id;
        $this->imieINazwisko = $imieINazwisko;
        $this->dateFrom = $dateFrom;
        $this->dateTo = $dateTo;
        $this->miejsceWyjazdu = $miejsceWyjazdu;
        $this->miejscePrzyjazdu = $miejscePrzyjazdu;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getImieINazwisko(): string
    {
        return $this->imieINazwisko;
    }

    public function getDateFrom(): string
    {
        return $this->dateFrom;
    }

    public function getDateTo(): string
    {
        return $this->dateTo;
    }

    public function getMiejsceWyjazdu(): string
    {
        return $this->miejsceWyjazdu;
    }

    public function getMiejscePrzyjazdu(): string
    {
        return $this->miejscePrzyjazdu;
    }
}

