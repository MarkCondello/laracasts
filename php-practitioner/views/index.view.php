<?php
include 'partials/head.php';

$content =  "<h1>Tasks</h1><ul>";
foreach($tasks as $task):
    if( $task->completed){
      $content .=  "<li><strike>{$task->description}</strike></li>";
        } else {
        $content .= "<li>{$task->description}</li>";
        }
endforeach;
$content .= "<ul>";

echo $content;

//include 'templates/site.php';

include 'partials/footer.php';