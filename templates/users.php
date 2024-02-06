<?php

declare(strict_types=1);

$database = new Connection();
$conn = $database->connect();

$usersDataProvider = new UsersDataProvider();
$userArray = $usersDataProvider->getUsers();

$queryRepository = new QueryRepostory($database);
$users = $queryRepository->getUsers();

?>

<div class="page-title">
    <h1>Pracownicy</h1>
    <div class="colors-picker">
        <input type="color" class="color-picker" data-property-name="--even-row-color" value="#f2f2f2">
        <input type="color" class="color-picker" data-property-name="--odd-row-color" value="#ffffff">
    </div>
</div>

<table class="table table-bordered">
    <thead>
        <tr>
            <th scope="col">lp</th>
            <th scope="col">Imię</th>
            <th scope="col">Nazwisko</th>
            <th scope="col">Stanowisko</th>
            <th scope="col">Data Zatrudnienia</th>
            <th scope="col">Ilosć dni urlopowych</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($users as $key => $user) : ?>
            <tr class="<?php echo $key % 2 === 0 ? 'even' : 'odd'; ?>">
             <th scope="row"><?php echo $user->getLp(); ?></th>
             <td><?php echo $user->getImie(); ?></td>
             <td><?php echo $user->getNazwisko(); ?></td>
             <td><?php echo $user->getStanowisko(); ?></td>
             <td><?php echo $user->getDataZatrudnienia(); ?></td>
             <td><?php echo $user->getIloscDniUrlopowych(); ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const colorPickers = document.querySelectorAll('.color-picker');

        colorPickers.forEach(function(picker) {
            picker.addEventListener('input', function() {
                const root = document.documentElement;
                const propertyName = picker.dataset.propertyName;
                const newColor = picker.value;

                root.style.setProperty(propertyName, newColor);
            });
        });
    });
</script>

