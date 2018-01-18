<?php
namespace michau85\real\helpers;

class Model
{
    private $last;


    public function __construct($name)
    {

        $this->last=$name;
    }
    public function getName()
    {
        return $this->last;
    }


}