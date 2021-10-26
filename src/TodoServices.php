<?php

require("TodoInterface.php");

class TodoServices implements TodoInterface
{
    private array $todos;

    public function create($todo)
    {
        echo "Create new todo of id: " . $todo->id;
    }

    public function __construct(array $todos)
    {
        $this->todos = $todos;
    }

    public function getAll()
    {
        return $this->todos;
    }

    public function getById(int $id)
    {
        echo "Get todo of id: " . $id[0];
    }

    public function update(int $id)
    {
        echo "Set todo of id: " . $id . "to true";
    }

    public function delete(int $id)
    {
        echo "Set todo of id: " . $id . "to true";
    }
}
