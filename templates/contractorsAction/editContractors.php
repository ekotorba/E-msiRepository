<?php

declare(strict_types=1);

$database = new Connection();
$conn = $database->connect();
$contractorId = $_GET['id'];

$commandRepository = new CommandRepository($database);
$commandRepository->editContractorById($contractorId);

$queryRepository = new QueryRepostory($database);
$contractor = $queryRepository->getContractorById($contractorId);
?>


<div class="container">
    <div class="page-title">
        <h1>Edytuj Kontrahenta</h1>
        <a href="?tab=contractors" class="btn btn-danger" style="margin: auto 0; padding: 8px 25px"><i class="bi bi-arrow-left"></i> Wróć</a>
    </div>
    <form action="?tab=edit_contractor&id=<?php echo $contractorId; ?>" method="post">
        <div class="row">
            <div class="col-lg-4">
                <div class="form-group">
                    <label for="nip">NIP:</label>
                    <input type="text" class="form-control" name="nip" id="nip"
                           value="<?php echo $contractor->getNip(); ?>" required>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="form-group">
                    <label for="regon">Regon:</label>
                    <input type="text" class="form-control" name="regon" id="regon"
                           value="<?php echo $contractor->getRegon(); ?>" required>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="form-group">
                    <label for="nazwa">Nazwa:</label>
                    <input type="text" class="form-control" name="nazwa" id="nazwa"
                           value="<?php echo $contractor->getNazwa(); ?>" required>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="form-group">
                    <label for="platnikVAT">Czy płatnik VAT:</label>
                    <select class="form-control" name="platnikVAT" id="platnikVAT" required>
                        <option value="1" <?php echo ($contractor->getPlatnikVAT() == 1) ? 'selected' : ''; ?>>
                            Tak
                        </option>
                        <option value="0" <?php echo ($contractor->getPlatnikVAT() == 0) ? 'selected' : ''; ?>>
                            Nie
                        </option>
                    </select>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="form-group">
                    <label for="ulica">Ulica:</label>
                    <input type="text" class="form-control" name="ulica" id="ulica"
                           value="<?php echo $contractor->getUlica(); ?>" required>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="form-group">
                    <label for="numerDomu">Numer Domu:</label>
                    <input type="text" class="form-control" name="numerDomu" id="numerDomu"
                           value="<?php echo $contractor->getNumerDomu(); ?>" required>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="form-group">
                    <label for="numerMieszkania">Numer Mieszkania:</label>
                    <input type="text" class="form-control" name="numerMieszkania" id="numerMieszkania"
                           value="<?php echo $contractor->getNumerMiekszkania(); ?>" required>
                </div>
            </div>
        </div>
        <div class="form-group mt-3">
            <input type="submit" class="btn btn-primary" value="Zapisz zmiany">
        </div>
    </form>
</div>
