<?php
require_once 'Main.php';

$main = new Main(10);
$main->addSampleEmployees();

$action = isset($_GET['action']) ? $_GET['action'] : '';

switch ($action) {
    case 'displayAll':
        echo "<pre>";
        $main->displayAllEmployees();
        echo "</pre>";
        break;

    case 'displayByType':
        echo "<pre>";
        $main->displayByType();
        echo "</pre>";
        break;

    case 'payroll':
        echo "<pre>";
        $main->displayPayroll();
        echo "</pre>";
        break;

    default:
        echo "<h1>Employee Roster System</h1>";
        echo "<ul>";
        echo "<li><a href='?action=displayAll'>Display All Employees</a></li>";
        echo "<li><a href='?action=displayByType'>Display Employees by Type</a></li>";
        echo "<li><a href='?action=payroll'>Display Payroll</a></li>";
        echo "</ul>";
        break;
}
?>
