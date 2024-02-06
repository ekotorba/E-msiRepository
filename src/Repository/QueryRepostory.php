<?php

declare(strict_types=1);

require 'src/DTO/ContractorDTO.php';
require 'src/Services/UsersDataProvider.php';
require 'src/DTO/UserDTO.php';

class QueryRepostory
{
    private Connection $databaseConn;

    public function __construct(Connection $databaseConn = null)
    {
        $this->databaseConn = $databaseConn;
    }

    /**
     * @return array<ContractorDTO>
     */
    public function getContractors(): array
    {
            $sql = 'SELECT * FROM contractors';
            $stmt = $this->databaseConn->connect()->prepare($sql);
            $stmt->execute();

            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

            $contractors = [];

            foreach ($results as $result){
                $contractorDTO = new ContractorDTO(
                    id: $result['id'],
                    nip: $result['nip'],
                    regon: $result['regon'],
                    nazwa: $result['nazwa'],
                    platnikVAT: (bool)$result['platnik_vat'],
                    ulica: $result['ulica'],
                    numerDomu: $result['numer_domu'],
                    numerMiekszkania: $result['numer_mieszkania']
                );

                $contractors[] = $contractorDTO;
            }

            return $contractors;
    }

    /**
     * @return ContractorDTO
     */
    public function getContractorById(string $contractorId): ContractorDTO
    {
            $sql = 'SELECT * FROM contractors WHERE id = :contractorId';

            $stmt = $this->databaseConn->connect()->prepare($sql);
            $stmt->bindParam(':contractorId', $contractorId);
            $stmt->execute();

            $result = $stmt->fetch(PDO::FETCH_ASSOC);

                return new ContractorDTO(
                    id: $result['id'],
                    nip: $result['nip'],
                    regon: $result['regon'],
                    nazwa: $result['nazwa'],
                    platnikVAT: (bool)$result['platnik_vat'],
                    ulica: $result['ulica'],
                    numerDomu: $result['numer_domu'],
                    numerMiekszkania: $result['numer_mieszkania']
                );
        }

    /**
     * @return array<DelegationDTO>
     */
    public function getDelegations(): array
    {
            $sql = 'SELECT * FROM delegations';

            $stmt = $this->databaseConn->connect()->prepare($sql);
            $stmt->execute();

            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

            $delegations = [];

            foreach ($results as $result){
                $delegationDTO = new DelegationDTO(
                    id: $result['id'],
                    imieINazwisko: $result['imie_i_nazwisko'],
                    dateFrom: $result['data_od'],
                    dateTo: $result['data_do'],
                    miejsceWyjazdu: $result['miejsce_wyjazdu'],
                    miejscePrzyjazdu: $result['miejsce_przyjazdu'],
                );
                $delegations[] = $delegationDTO;
            }

            return $delegations;
        }

    /**
     * @return array<UserDTO>
     */
        public function getUsers(): array
        {
            $usersDataProvider = new UsersDataProvider();
            $usersArray = $usersDataProvider->getUsers();

            $users = [];

            foreach ($usersArray as $user) {
                $userDTO = new UserDTO(
                    lp: $user['lp'],
                    imie: $user['imie'],
                    nazwisko: $user['nazwisko'],
                    stanowisko: $user['stanowisko'],
                    dataZatrudnienia: $user['data_zatrudnienia'],
                    iloscDniUrlopowych: $user['ilosc_dni_urlopowych'],
                );
                $users[] = $userDTO;
            }
            return $users;
        }

    /**
     * @return array<InvoiceDTO>
     */
    public function getInvoices(): array
    {
        $invoicesProvider = new InvoicesDataProvider();
        $invoices = $invoicesProvider->getInvoices();

        $invoicesData = [];

        foreach ($invoices as $invoice){
            $invoiceDTO = new InvoiceDTO(
                lp: $invoice['lp'],
                opis: $invoice['opis'],
                mpk: $invoice['mpk'],
                kwotaNetto: $invoice['kwotaNetto'],
                ilosc: $invoice['ilosc'],
                vat: $invoice['vat'],
            );

            $invoicesData[] = $invoiceDTO;
        }
        return $invoicesData;
    }
}


