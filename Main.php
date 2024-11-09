<?php
require_once 'CommissionEmployee.php';
require_once 'HourlyEmployee.php';
require_once 'PieceWorker.php';
require_once 'EmployeeRoster.php';

class Main {
    private $roster;

    public function __construct($rosterSize) {
        $this->roster = new EmployeeRoster($rosterSize);
    }

    public function addSampleEmployees() {
         Adding sample employees
        $this->roster->add(new CommissionEmployee("Alice", "123 Street", 28, "Company A", 5000, 30, 50));
        $this->roster->add(new HourlyEmployee("Bob", "456 Avenue", 35, "Company B", 45, 200));
        $this->roster->add(new PieceWorker("Charlie", "789 Boulevard", 22, "Company C", 200, 15));
    }

    public function displayAllEmployees() {
        echo "All Employees:\n";
        $this->roster->display();
    }

    public function displayByType() {
        echo "Commission Employees:\n";
        $this->roster->displayCE();
        echo "\nHourly Employees:\n";
        $this->roster->displayHE();
        echo "\nPiece Workers:\n";
        $this->roster->displayPE();
    }

    public function displayPayroll() {
        echo "Payroll:\n";
        $this->roster->payroll();
    }
}

// Usage example
$main = new Main(10);  // Create a roster with a capacity of 10 employees
$main->addSampleEmployees();
$main->displayAllEmployees();
$main->displayByType();
$main->displayPayroll();
?>
