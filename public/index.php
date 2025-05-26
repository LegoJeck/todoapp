<?php
require_once __DIR__ . '/../config/Database.php';
require_once __DIR__ . '/../src/Controllers/TaskController.php';

$controller = new TaskController();

// Маршрутизация
$action = $_GET['action'] ?? 'index';

switch ($action) {
    case 'add':
        $controller->addTask();
        break;
    case 'update':
        $controller->updateTask();
        break;
    case 'delete':
        $controller->deleteTask();
        break;
    default:
        $controller->index();
        break;
}
?>