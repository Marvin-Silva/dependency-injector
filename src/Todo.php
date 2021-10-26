<?php

class Todo
{
    protected int $id;
    protected string $title;
    protected string $description;
    protected bool $completed;

    public function __construct($id, $title, $description, $completed)
    {
        $this->id = $id;
        $this->title = $title;
        $this->description = $description;
        $this->completed = $completed;
    }
}
