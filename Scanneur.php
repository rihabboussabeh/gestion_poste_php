<?php
/*     kol table les attribu mte3haa  w les fonction  exchange*/
namespace Application\Model;





class Scanneur

{
    public $idsc;
 public $idposte;
 public $idetab;
 public $marque;
     public $nserie;
      public $type;
  
   public function exchangeArray($data)
     {
       //tab en objet
        $this->idposte     = (!empty($data['idsc'])) ? $data['idsc'] : null;
        
         $this->idposte     = (!empty($data['idposte'])) ? $data['idposte'] : null;
         $this->idetab = (!empty($data['idetab'])) ? $data['idetab'] : null;
         $this->marque  = (!empty($data['marque'])) ? $data['marque'] : null;    
               $this->nserie  = (!empty($data['nserie'])) ? $data['nserie'] : null;  
          $this->type  = (!empty($data['type'])) ? $data['type'] : null;
  
     }
}
 