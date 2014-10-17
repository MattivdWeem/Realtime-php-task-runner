<?php
class task
{
    public $name;
    public $task;
    public $version;
    public $launch;
    public $every;
    public $repeat;
    public $update;

    public function __construct($task,$name){
        $this->name = $name;
        $this->version = $task->version;
        $this->launch = $task->launch;
        $this->every = $task->every;
        $this->repeat = $task->repeat;
        $this->update = $task->update;
        $this->task = 'tasks/'.$this->name.'/'.$this->version.'/'.$this->launch;
    }

    public function doesExist(){
        if(file_exists($this->task)):
            return true;
        endif;
        return false;
    }

    public function run(){
        if($this->doesExist()):
            include($this->task);
            return true;
        else:
            return(array(false,'message'=>'Task does not exsist'));
        endif;
    }
}