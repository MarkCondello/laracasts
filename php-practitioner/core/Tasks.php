<?php
class Tasks {
    protected $description;
    protected $completed = false;

    public function __construct($description)
    {
        $this->description = $description;
    }

    public function isComplete()
    {
      return $this->completed;
    }


    public function complete()
    {
         $this->completed = true;
    }

    public function desc()
    {
        return $this->description;
    }

}

$tasks = [
    new Tasks("Be Good"),
    new Tasks("Buy pressents"),
    new Tasks("Be present"),
];

$tasks[0]->complete();
//dd($tasks);