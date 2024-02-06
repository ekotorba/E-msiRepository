<?php

declare(strict_types=1);

$database = new Connection();
$conn = $database->connect();

$contractorId = $_GET['id'];

$command = new CommandRepository($database);
$command->deleteContractorById($contractorId);
