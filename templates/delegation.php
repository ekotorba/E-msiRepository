<?php

declare(strict_types=1);

require 'src/DTO/DelegationDTO.php';

$database = new Connection();
$conn = $database->connect();

$query = new QueryRepostory($database);
$delegations = $query->getDelegations();
?>

<div class="page-title">
    <h1>Delegacje</h1>
</div>
<table class="table table-bordered">
    <thead>
        <tr>
            <th scope="col">Lp</th>
            <th scope="col">Imię i Nazwisko</th>
            <th scope="col">Data od</th>
            <th scope="col">Data do</th>
            <th scope="col">Miejsce Wyjazdu</th>
            <th scope="col">Miejsce Przyjazdu</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($delegations as $delegation) : ?>
            <tr>
                <th scope="row"><?php echo $delegation->getId() ?></th>
                <td><?php echo $delegation->getImieINazwisko() ?></td>
                <td><?php echo $delegation->getDateFrom() ?></td>
                <td><?php echo $delegation->getDateTo() ?></td>
                <td><?php echo $delegation->getMiejsceWyjazdu() ?></td>
                <td><?php echo $delegation->getMiejscePrzyjazdu() ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

