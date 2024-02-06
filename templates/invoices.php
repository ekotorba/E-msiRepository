<?php

declare(strict_types=1);

require 'src/Services/InvoicesDataProvider.php';
require 'src/Services/InvoiceService.php';

$database = new Connection();

$invoicesProvider = new InvoicesDataProvider();

$invoiceService = new InvoiceService($invoicesProvider);
$queryRepository = new QueryRepostory($database);
$invoices = $queryRepository->getInvoices();
?>

<div class="page-title">
    <h1>Tabela Faktur</h1>
    <button class="btn btn-secondary" style="margin: auto 0;" onclick="toggleHighlightColumns()">Powyżej 1000zł netto</button>
</div>
<table class="table table-bordered">
    <thead>
        <tr>
            <th scope="col">LP</th>
            <th scope="col">Opis</th>
            <th scope="col">MPK</th>
            <th scope="col">Kwota Netto</th>
            <th scope="col">Ilość</th>
            <th scope="col">VAT</th>
            <th scope="col">Kwota Brutto</th>
            <th scope="col">Wartość Netto</th>
            <th scope="col">Wartość Brutto</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($invoices as $invoice) { ?>
            <tr>
                <th scope="row"><?php echo $invoice->getLp(); ?></th>
                <td><?php echo $invoice->getOpis(); ?></td>
                <td><?php echo $invoice->getMpk(); ?></td>
                <td class="kwota-netto"><?php echo $invoice->getKwotaNetto(); ?></td>
                <td><?php echo $invoice->getIlosc(); ?></td>
                <td><?php echo $invoice->getVat(); ?></td>
                <td><?php echo $invoiceService->getKwotaBrutto($invoice); ?></td>
                <td><?php echo $invoiceService->getWartoscNetto($invoice); ?></td>
                <td><?php echo $invoiceService->getWartoscBrutto($invoice); ?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>

<script>
    const highlightField = column => {
        column.classList.toggle("highlighted");
        column.style.backgroundColor = "#c8e6c9";
    }

    const disableHighlightField = column => {
        column.classList.remove("highlighted");
        column.style.backgroundColor = "";
    }

    function toggleHighlightColumns() {
        const columns = document.querySelectorAll(".kwota-netto");

        columns.forEach(function(column) {
            const kwotaNetto = parseFloat(column.innerText);
            const isHighlighted = column.classList.contains("highlighted");

            kwotaNetto > 1000 && !isHighlighted
                ? highlightField(column)
                : disableHighlightField(column)
        });
    }
</script>
