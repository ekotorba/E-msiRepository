<?php

declare(strict_types=1);

class CommandRepository
{
    private Connection $databaseConn;

    public function __construct(Connection $databaseConn)
    {
        $this->databaseConn = $databaseConn;
    }

    public function addContractors(): bool
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && !isset($_GET['id'])) {
            $nip = $_POST['nip'];
            $regon = $_POST['regon'];
            $nazwa = $_POST['nazwa'];
            $platnikVAT = $_POST['platnikVAT'];
            $ulica = $_POST['ulica'];
            $numerDomu = $_POST['numerDomu'];
            $numerMieszkania = $_POST['numerMieszkania'];

            if (!empty($nip) && !empty($regon) && !empty($nazwa) && isset($platnikVAT) && !empty($ulica) && !empty($numerDomu) && !empty($numerMieszkania)) {
                $stmt = $this->databaseConn->connect()->prepare("INSERT INTO contractors (nip, regon, nazwa, platnik_vat, ulica, numer_domu, numer_mieszkania) VALUES (:nip, :regon, :nazwa, :platnikVAT, :ulica, :numerDomu, :numerMieszkania)");

                $stmt->bindParam(':nip', $nip);
                $stmt->bindParam(':regon', $regon);
                $stmt->bindParam(':nazwa', $nazwa);
                $stmt->bindParam(':platnikVAT', $platnikVAT);
                $stmt->bindParam(':ulica', $ulica);
                $stmt->bindParam(':numerDomu', $numerDomu);
                $stmt->bindParam(':numerMieszkania', $numerMieszkania);

                if ($stmt->execute()) {
                    echo "Record inserted successfully.";
                    header("Location: ?tab=contractors");
                    exit();
                } else{
                    echo 'Record inserted failure';
                }
            }
        }

        return true;
    }

    public function deleteContractorById(string $id): bool
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $stmt = $this->databaseConn->connect()->prepare("DELETE FROM contractors WHERE id = :contractorIdToDelete");
            $stmt->bindParam(':contractorIdToDelete', $id);

            if ($stmt->execute()) {
                echo "Record deleted successfully.";
                header("Location: ?tab=contractors");
                return true;
            }

            header("Location: ?tab=contractors");
            exit();
        }

        return true;
    }

    public function editContractorById(string $contractorId): void
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_GET['id'])) {
            $nip = $_POST['nip'];
            $regon = $_POST['regon'];
            $nazwa = $_POST['nazwa'];
            $platnikVAT = $_POST['platnikVAT'];
            $ulica = $_POST['ulica'];
            $numerDomu = $_POST['numerDomu'];
            $numerMieszkania = $_POST['numerMieszkania'];

            if (!empty($nip) && !empty($regon) && !empty($nazwa) && isset($platnikVAT) && !empty($ulica) && !empty($numerDomu) && !empty($numerMieszkania)) {
                $stmt = $this->databaseConn->connect()->prepare("UPDATE contractors SET nip = :nip, regon = :regon, nazwa = :nazwa, platnik_vat = :platnikVAT, ulica = :ulica, numer_domu = :numerDomu, numer_mieszkania = :numerMieszkania WHERE id = :contractorId");

                $stmt->bindParam(':contractorId', $contractorId);

                $stmt->bindParam(':nip', $nip);
                $stmt->bindParam(':regon', $regon);
                $stmt->bindParam(':nazwa', $nazwa);
                $stmt->bindParam(':platnikVAT', $platnikVAT);
                $stmt->bindParam(':ulica', $ulica);
                $stmt->bindParam(':numerDomu', $numerDomu);
                $stmt->bindParam(':numerMieszkania', $numerMieszkania);

                if ($stmt->execute()) {
                    header("Location: ?tab=contractors");
                    exit();
                }
            } else {
                echo 'Please fill out all fields';
            }
        }
    }
}
