<?php
require_once("TodoServices.php");

class Logger
{
    private TodoServices $todoService;

    public function __construct(TodoServices $todoService)
    {
        $this->todoService = $todoService;
    }


    public function getCompleted()
    {
        //$todos = $this->todoService->getAll()
        // then filter to get completed todos
        echo "Return completed todos";
    }


    public function notCompleted()
    {
        //$todos = $this->todoService->getAll()
        // then filter to get not completed todos
        echo "Return completed todos";
    }


    public function getAll()
    {
        return $this->todoService->getAll();
    }
}
