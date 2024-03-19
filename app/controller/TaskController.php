<?php

namespace App\controller;

use App\model\BubbleSortModel;
use App\model\FindElementArrayModel;
use App\model\LeasterNumberModel;
use App\model\TaskModel;

class TaskController
{
    public function index()
    {
        $number_sorted = BubbleSortModel::index([64, 34, 25, 12, 22, 11, 90]);
        $elementFound = FindElementArrayModel::index([2, 3, 4, 10, 40], 10);
        $smaller = LeasterNumberModel::index([9, 5, 3, 7, 2]);

        require 'view/home.php';
    }
}
