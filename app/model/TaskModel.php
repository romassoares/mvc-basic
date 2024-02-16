<?php

namespace App\model;

class TaskModel
{
    public function getPosts()
    {
        $url = "https://jsonplaceholder.typicode.com/posts";
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $posts = json_decode(curl_exec($ch), true);
        curl_close($ch);

        return $posts;
    }
}
