<?php

declare(strict_types=1);

$database = new Connection();
$conn = $database->connect();

$query = new QueryRepostory($database);
$contractors = $query->getContractors();
?>

<div class="page-title">
    <h1>Dane Kontrahentów</h1>
    <a href="?tab=add_contractor"><button class="btn btn-primary" style="padding: 8px 14px;"><i class="bi bi-person-plus-fill"></i> Dodaj Kontrahenta</button></a>
</div>

<table class="table table-bordered">
    <thead class="thead-dark ">
        <tr>
            <th scope="col">NIP</th>
            <th scope="col">Regon</th>
            <th scope="col">Nazwa</th>
            <th scope="col">Płatnik Vat</th>
            <th scope="col">Ulica</th>
            <th scope="col">Numer Domu</th>
            <th scope="col">Numer Mieszkania</th>
            <th scope="col">Akcje</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($contractors as $key => $contractor): ?>
            <tr>
                <td><?php echo $contractor->getNip(); ?></>
                <td><?php echo $contractor->getRegon(); ?></td>
                <td><?php echo $contractor->getNazwa(); ?></td>
                <td><?php echo $contractor->getPlatnikVAT() ? 'Tak' : 'Nie'; ?></td>
                <td><?php echo $contractor->getUlica(); ?></td>
                <td><?php echo $contractor->getNumerDomu(); ?></td>
                <td><?php echo $contractor->getNumerMiekszkania(); ?></td>
                <td><a href="?tab=edit_contractor&id=<?php echo $contractor->getId(); ?>" class="btn btn-warning">Edytuj</a></td>
                <td>
                    <form action="?tab=delete_contractor&id=<?php echo $contractor->getId(); ?>" method="post">
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Jesteś pewien, że chcesz usunąć kontrahenta <?php echo $contractor->getNazwa(); ?> ?')">Usuń</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
