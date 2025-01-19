<?php
require_once __DIR__ . '/../classes/Employee.php';

function addEmployee(&$employees) {
    echo "-----------------------------\n";
    echo "Enter Employee Name: ";
    $name = trim(fgets(STDIN));

    echo "-----------------------------\n";
    echo "Enter Employee Email: ";
    $email = trim(fgets(STDIN));

    echo "-----------------------------\n";
    echo "Enter Employee Role: ";
    $role = trim(fgets(STDIN));

    echo "-----------------------------\n";
    echo "Enter Employee Department: ";
    $department = trim(fgets(STDIN));

    echo "-----------------------------\n";
    echo "Enter Employee Salary: ";
    $salary = trim(fgets(STDIN));

    $employee = new Employee($name, $email, $role, $department, $salary);

    $employees[$name] = $employee;
    echo "-----------------------------\n";
    echo "Employee '$name' added successfully.\n";
    echo "-----------------------------\n";
}


function displayAllEmployees($employees) {
    if (empty($employees)) {
        echo "-----------------------------\n";
        echo "No employees to display.\n";
        return;
    }

    foreach ($employees as $name => $employee) {
        echo "-----------------------------\n";
        echo "Name: " . $employee->getName() . "\n";
        echo "Email: " . $employee->getEmail() . "\n";
        echo "Role: " . $employee->getRole() . "\n";
        echo "Department: " . $employee->getDepartment() . "\n";
        echo "Salary: $" . $employee->getSalary() . "\n";
        echo "-----------------------------\n";
    }
}


function deleteEmployee(&$employees) {
    if (empty($employees)) {
        echo "-----------------------------\n";
        echo "No employees to delete.\n";
        return;
    }
    echo "-----------------------------\n";
    echo "Select an employee to delete:\n";
    $index = selectEmployee($employees);

    if ($index !== null) {
        $name = array_keys($employees)[$index];
        unset($employees[$name]);
        echo "-----------------------------\n";
        echo "Employee '$name' deleted successfully.\n";
        echo "-----------------------------\n";
    }
}


function editEmployee(&$employees) {
    if (empty($employees)) {
        echo "-----------------------------\n";
        echo "No employees to edit.\n";
        echo "-----------------------------\n";
        return;
    }
    echo "-----------------------------\n";
    echo "Select an employee to edit:\n";
    $index = selectEmployee($employees);

    if ($index !== null) {
        $oldName = array_keys($employees)[$index];
        $employee = $employees[$oldName];
        echo "-----------------------------\n";
        echo "Editing Employee: $oldName\n";
        echo "-----------------------------\n";

        echo "Enter new name (leave blank to keep): ";
        $newName = trim(fgets(STDIN));
        if ($newName) {
            unset($employees[$oldName]); 
            $employee->setName($newName);
            $employees[$newName] = $employee;
        }
        echo "-----------------------------\n";
        echo "Enter new email (leave blank to keep): ";
        $email = trim(fgets(STDIN));
        if ($email) $employee->setEmail($email);

        echo "-----------------------------\n";
        echo "Enter new role (leave blank to keep): ";
        $role = trim(fgets(STDIN));
        if ($role) $employee->setRole($role);

        echo "-----------------------------\n";
        echo "Enter new department (leave blank to keep): ";
        $department = trim(fgets(STDIN));
        if ($department) $employee->setDepartment($department);

        echo "-----------------------------\n";
        echo "Enter new salary (leave blank to keep): ";
        $salary = trim(fgets(STDIN));
        if ($salary) $employee->setSalary($salary);

        echo "-----------------------------\n";
        echo "Employee '$newName' edited successfully.\n";
        echo "-----------------------------\n";
        displayEmployee($employee);
    }
}


function searchEmployee($employees) {
    if (empty($employees)) {
        echo "-----------------------------\n";
        echo "No employees to search.\n";
        echo "-----------------------------\n";
        return;
    }

    echo "-----------------------------\n";
    echo "Select an employee to display:\n";
    $index = selectEmployee($employees);

    if ($index !== null) {
        $name = array_keys($employees)[$index];
        $employee = $employees[$name];
        displayEmployee($employee);
    }
}


function displayEmployee($employee) {
    echo "-----------------------------\n";
    echo "Name: " . $employee->getName() . "\n";
    echo "Email: " . $employee->getEmail() . "\n";
    echo "Role: " . $employee->getRole() . "\n";
    echo "Department: " . $employee->getDepartment() . "\n";
    echo "Salary: $" . $employee->getSalary() . "\n";
    echo "-----------------------------\n";
}


function selectEmployee($employees) {
    $names = array_keys($employees);
    echo "-----------------------------\n";
    foreach ($names as $index => $name) {
        echo ($index + 1) . ". $name\n"; // Start numbering from 1
    }
    echo "-----------------------------\n";
    echo "Enter the employee number (or 'q' to cancel): ";
    $input = trim(fgets(STDIN));

    if (strtolower($input) === 'q') {
        echo "-----------------------------\n";
        echo "Operation canceled.\n";
        echo "-----------------------------\n";
        return null;
    }

    $inputIndex = (int) $input - 1;

    if (is_numeric($input) && isset($names[$inputIndex])) {
        return $inputIndex;
    } else {
        echo "-----------------------------\n";
        echo "Invalid selection. Please try again.\n";
        echo "-----------------------------\n";
        return selectEmployee($employees);
    }
}

?>
