<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Lista de Tarefas</title>
</head>

<body>
    <h1>Lista de Tarefas</h1>
    <ul>
        <?php
        // if(isset($posts)){
        // echo "ID: " . $post['id'] . "<br>";
        // echo "Título: " . $post['title'] . "<br>";
        // echo "Corpo: " . $post['body'] . "<br>";
        // echo "<hr>";
        // }
        ?>

        <?php var_export($number_sorted); ?>
        <hr>
        <?php echo $elementFound; ?>
        <hr>
        <?php echo $smaller; ?>
    </ul>
</body>

</html>