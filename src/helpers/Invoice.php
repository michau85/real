<?php
namespace michau85\real\helpers;

class Invoice
{

    private $user;
    private $auto;
    

    public function __construct(User $user,Auto $auto)
    {
        $this->user=$user;
        $this->auto=$auto;
    }
  

    public function getInfo()
    {
        return 'Faktura dla '.$this->user->getInfo().' dotyczy auta '.$this->auto->getInfo(); 

    }
    public function say()
    {

        return 'invoice';


    }
}