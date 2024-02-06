<?php

declare(strict_types=1);

$database = new Connection();
$conn = $database->connect();

$command = new CommandRepository($database);
$command->addContractors();
?>

<div>
    <div class="page-title">
        <h1>Dodaj Kontrahenta</h1>
        <a href="?tab=contractors" class="btn btn-danger" style="margin: auto 0; padding: 8px 25px"><i class="bi bi-arrow-left"></i> Wróć</a>
    </div>
    <form action="?tab=add_contractor" method="post">
        <div class="row">
            <div class="col-md-4">
                <label for="nip">NIP:</label>
                <input class="form-control" type="text" name="nip" id="nip" required><br>
            </div>
            <div class="col-md-4">
                <label for="regon">Regon:</label>
                <input class="form-control" type="text" name="regon" id="regon" required><br>
            </div>
            <div class="col-md-4">
                <label for="nazwa">Nazwa:</label>
                <input class="form-control" type="text" name="nazwa" id="nazwa" required><br>
            </div>
            <div class="col-md-4">
                <label for="platnikVAT">Czy płatnik VAT:</label>
                <select class="form-control" name="platnikVAT" id="platnikVAT" required>
                    <option value="1">Tak</option>
                    <option value="0">Nie</option>
                </select><br>
            </div>
            <div class="col-md-4">
                <label for="ulica">Ulica:</label>
                <input class="form-control" type="text" name="ulica" id="ulica" required><br>
            </div>
            <div class="col-md-4">
                <label for="numerDomu">Numer Domu:</label>
                <input class="form-control" type="text" name="numerDomu" id="numerDomu" required><br>
            </div>
            <div class="col-md-4">
                <label for="numerMieszkania">Numer Mieszkania:</label>
                <input class="form-control" type="text" name="numerMieszkania" id="numerMieszkania"><br>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Dodaj Kontrahenta</button>
            </div>
    </form>
</div>
