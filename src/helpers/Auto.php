<?php
namespace michau85\real\helpers;

class Auto{

    private $last;
    private $model;
    private $user;


    public function __construct($last,Model $model,User $user){
        $this->last=$last;
        $this->model=$model;
        $this->user=$user;
    }
    

    public function getInfo(){
       
        return 'Auto  '.$this->last.' '. $this->model->getName().' należy do '.$this->user->getInfo() ; 
    }
}