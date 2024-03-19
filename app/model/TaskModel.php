<?php

namespace App\model;

class TaskModel
{
    public function getPosts()
    {
        $url = "https://docs.github.com/users/romassoares";
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Accept: application/vnd.github+json', 'X-GitHub-Api-Version: 2022-11-28'));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $posts = json_decode(curl_exec($ch), true);
        curl_close($ch);

        // foreach ($posts as $key => $value) {
            var_dump($posts);
        // }
        
        return $posts;
    }
}
