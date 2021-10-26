<?php

require("Todo.php");

interface TodoInterface
{
    public function create(Todo $todo);
    public function getAll();
    public function getById(int $id);
    public function update(int $id);
    public function delete(int $id);
}
