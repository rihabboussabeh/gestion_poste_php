<?php
/*     kol table les attribu mte3haa  w les fonction  exchange*/
namespace Application\Model;





class Poste

{
 public $idposte;
 public $adresip;
 public $nprisereseau;
     public $se;
      public $postel;
     
          public $idetab;
  
   public function exchangeArray($data)
     {
       //tab en objet
         $this->idposte     = (!empty($data['idposte'])) ? $data['idposte'] : null;
         $this->adresip = (!empty($data['adresip'])) ? $data['adresip'] : null;
         $this->nprisereseau  = (!empty($data['nprisereseau'])) ? $data['nprisereseau'] : null;    
               $this->se  = (!empty($data['se'])) ? $data['se'] : null;  
          $this->postel  = (!empty($data['postel'])) ? $data['postel'] : null;
             $this->idetab  = (!empty($data['idetab'])) ? $data['idetab'] : null;
  
     }
}
 