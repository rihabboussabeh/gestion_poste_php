<?php
/*     kol table les attribu mte3haa  w les fonction  exchange*/
namespace Application\Model;





class Unitecentral

{
     public $iduc;
 public $idposte;
 public $idetab;
 public $marque;
  public $nserie;
  public $cpu;
 public $disqdur;
 public $ram;
 public $cartegraphique;
 public $cartereseau;
  
   public function exchangeArray($data)
     {
       //tab en objet
       $this->iduc     = (!empty($data['iduc'])) ? $data['iduc'] : null;
         $this->idposte     = (!empty($data['idposte'])) ? $data['idposte'] : null;
         $this->idetab = (!empty($data['idetab'])) ? $data['idetab'] : null;
         $this->marque  = (!empty($data['marque'])) ? $data['marque'] : null;    
               $this->nserie  = (!empty($data['nserie'])) ? $data['nserie'] : null;  
          $this->cpu  = (!empty($data['cpu'])) ? $data['cpu'] : null;
        $this->disqdur    = (!empty($data['disqdur'])) ? $data['disqdur'] : null;
             $this->ram = (!empty($data['ram'])) ? $data['ram'] : null;
         $this->cartegraphique = (!empty($data['cartegraphique'])) ? $data['cartegraphique'] : null;
        
            $this->cartereseau= (!empty($data['cartereseau'])) ? $data['cartereseau'] : null;
         
     }
}
 
