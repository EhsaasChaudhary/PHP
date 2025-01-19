<?php
require_once __DIR__ . '/functions/employee_feat.php';

$employees = []; // Associative array to store employees

echo "Welcome to Employee Management System\n";

while (true) {
    echo "Choose an option:\n";
    echo "1. Add Employee\n";
    echo "2. Display All Employees\n";
    echo "3. Exit\n";
    echo "Enter your choice: ";
    $choice = trim(fgets(STDIN));

    switch ($choice) {
        case "1":
            addEmployee($employees);
            break;
        case "2":
            displayEmployees($employees);
            break;
        case "3":
            echo "Exiting Employee Management System. Goodbye!\n";
            exit;
        default:
            echo "Invalid choice. Please try again.\n";
    }
    var_dump($employees);
}

?>
