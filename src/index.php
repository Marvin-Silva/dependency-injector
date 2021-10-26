<?php

require_once("Todo.php");
require_once("TodoServices.php");
require_once("Logger.php");

$todo1 = new Todo(1, "Premier todo", "voila", false);
$todo2 = new Todo(2, "Deuxième todo", "voila", true);
$todo3 = new Todo(3, "Troisième todo", "voila", true);

$todoServices = new TodoServices([
    $todo1, $todo2, $todo3
]);

$logger = new Logger($todoServices);

$logger->getCompleted();
$logger->getAll();
