<?php
namespace michau85\real\helpers;
use App\player;

class User
{

    private $last;
    private $first;
    private $player;
    

    public function __construct($fname,$lname)
    {
        
        $this->first=$fname;
        $this->last=$lname;

    }
    

    public function getInfo()
    {
        return $this->first. ' ' . $this->last;

    }
    public function sa()
    {

        return 'sa';


    }
}