<?php

declare(strict_types=1);

switch ($currentTab) {
    case 'contractors':
        include 'templates/contractors.php';
        break;

    case 'invoices':
        include 'templates/invoices.php';
        break;

    case 'delegations':
        include 'templates/delegation.php';
        break;

    case 'controls':
        include 'templates/controls.php';
        break;

    case 'employees':
        include 'templates/users.php';
        break;

    case 'add_contractor':
        include 'templates/contractorsAction/addContractors.php';
        break;

    case 'edit_contractor':
        include 'templates/contractorsAction/editContractors.php';
        break;

    case 'delete_contractor':
        include 'templates/contractorsAction/deleteContractors.php';
        break;
}
