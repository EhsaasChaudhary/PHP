<?php
require_once __DIR__ . '/functions/employee_feat.php';

$employees = [];

echo "-------------------------------------\n";
echo "Welcome to Employee Management System\n";
echo "-------------------------------------\n";

while (true) {
    echo "Choose an option number:\n";
    echo "-----------------------------\n";
    echo "1. Add Employee\n";
    echo "2. Display All Employees\n";
    echo "3. Delete Employee\n";
    echo "4. Edit Employee\n";
    echo "5. Search Employee\n";
    echo "6. Exit\n";
    echo "-----------------------------\n";
    echo "Enter your choice: ";
    $choice = trim(fgets(STDIN));

    switch ($choice) {
        case "1":
            addEmployee($employees);
            break;
        case "2":
            displayAllEmployees($employees);
            break;
        case "3":
            deleteEmployee($employees);
            break;
        case "4":
            editEmployee($employees);
            break;
        case "5":
            searchEmployee($employees);
            break;
        case "6":
            echo "-----------------------------\n";
            echo "Exiting Employee Management System. Goodbye!\n";
            exit;
        default:
            echo "-----------------------------\n";
            echo "Invalid choice. Please try again.\n";
            echo "-----------------------------\n";
    }
    // var_dump($employees);
}
?>
