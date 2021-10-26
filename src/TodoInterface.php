<?php

interface TodoInterface
{
    public function create($todo);
    public function getAll();
    public function getById(int $id);
    public function update(int $id);
    public function delete(int $id);
}
