<?php
/*     kol table les attribu mte3haa  w les fonction  exchange*/
namespace Application\Model;





class Etablissement

{
 
 public $idetab;
 public $nometab;
     public $service;
      public $prop;
      public $Administrateur;  
   public function exchangeArray($data)
     {
       //tab en objet
      
         $this->idetab = (!empty($data['idetab'])) ? $data['idetab'] : null;
         $this->nometab  = (!empty($data['nometab'])) ? $data['nometab'] : null;    
         $this->service  = (!empty($data['service'])) ? $data['service'] : null;  
          $this->prop  = (!empty($data['prop'])) ? $data['prop'] : null;
             $this->administrateur  = (!empty($data['administrateur'])) ? $data['administrateur'] : null;
             
  
     }
}
 