<?php
class Employee {
    private $name;
    private $email;
    private $role;
    private $department;
    private $salary;

    // Constructor
    public function __construct($name, $email, $role, $department, $salary) {
        $this->name = $name;
        $this->email = $email;
        $this->role = $role;
        $this->department = $department;
        $this->salary = $salary;
    }

    // Getter and Setter for Name
    public function getName() {
        return $this->name;
    }
    public function setName($name) {
        $this->name = $name;
    }

    // Getter and Setter for Email
    public function getEmail() {
        return $this->email;
    }
    public function setEmail($email) {
        $this->email = $email;
    }

    // Getter and Setter for Role
    public function getRole() {
        return $this->role;
    }
    public function setRole($role) {
        $this->role = $role;
    }

    // Getter and Setter for Department
    public function getDepartment() {
        return $this->department;
    }
    public function setDepartment($department) {
        $this->department = $department;
    }

    // Getter and Setter for Salary
    public function getSalary() {
        return $this->salary;
    }
    public function setSalary($salary) {
        $this->salary = $salary;
    }
}
?>
