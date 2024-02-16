<?php

namespace App\controller;

use App\model\TaskModel;

class TaskController
{
    public static function index()
    {
        $taskModel = new TaskModel();
        $posts = $taskModel->getPosts();

        require 'view/home.php';
    }
}
