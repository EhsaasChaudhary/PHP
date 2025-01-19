<?php
require_once __DIR__ . '/../classes/Employee.php';

/**
 * Add a new employee to the associative array of employees.
 * 
 * @param array $employees Reference to the employees array.
 */
function addEmployee(&$employees) {
    echo "Enter Employee Name: ";
    $name = trim(fgets(STDIN));

    echo "Enter Employee Email: ";
    $email = trim(fgets(STDIN));

    echo "Enter Employee Role: ";
    $role = trim(fgets(STDIN));

    echo "Enter Employee Department: ";
    $department = trim(fgets(STDIN));

    echo "Enter Employee Salary: ";
    $salary = trim(fgets(STDIN));

    // Create an Employee object
    $employee = new Employee($name, $email, $role, $department, $salary);

    // Add to the employees array using name as the key
    $employees[$name] = $employee;

    echo "Employee '$name' added successfully.\n";
}


/**
 * Display all employees in the array.
 * 
 * @param array $employees Associative array of employees.
 */
function displayEmployees($employees) {
    if (empty($employees)) {
        echo "No employees to display.\n";
        return;
    }

    foreach ($employees as $name => $employee) {
        echo "Name: " . $employee->getName() . "\n";
        echo "Email: " . $employee->getEmail() . "\n";
        echo "Role: " . $employee->getRole() . "\n";
        echo "Department: " . $employee->getDepartment() . "\n";
        echo "Salary: $" . $employee->getSalary() . "\n";
        echo "-----------------------------\n";
    }
}
?>
