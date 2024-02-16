<?php

use App\controller\TaskController;

if (isset($_GET['action']) && !empty($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'index';
}

$taskController = new TaskController();
switch ($action) {
    case 'index':
        $taskController->index();
        break;
    default:
        echo "404 Not Found";
        break;
}
