
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    .completed {
        text-decoration: line-through;
    }
</style>
<body>
    <h1>
       Tasks
    </h1>
    <?php
    echo "<ul>";

    foreach($tasks as $task):

        if( $task->completed){
            echo "<li><strike>{$task->description}</strike></li>";
        } else {
            echo "<li>{$task->description}</li>";
        }
    endforeach;

    echo "<ul>";
    ?>
</body>
</html>