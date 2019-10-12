<?php
/*     kol table les attribu mte3haa  w les fonction  exchange*/
namespace Application\Model;





class Document {
    public $idoc;
 public $ref;
 public $debval;
  public $finval;
 public $dermaj;
  public $contrat;
    public $contratm;
    public $manuelexp;
    public $manuelinstal;
      public $idposte;
        public $idetab;
 
   
   public function exchangeArray($data)
     {
       //tab en objet
              $this->idoc    = (!empty($data['idoc'])) ? $data['idoc'] : null;
         $this->ref    = (!empty($data['ref'])) ? $data['ref'] : null;
             $this->debval = (!empty($data['debval'])) ? $data['debval'] : null;
         $this->finval = (!empty($data['finval'])) ? $data['finval'] : null;
        
            $this->dermaj= (!empty($data['dermaj'])) ? $data['dermaj'] : null;
              $this->contrat= (!empty($data['contrat'])) ? $data['contrat'] : null;
            $this->contratm= (!empty($data['contratm'])) ? $data['contratm'] : null;
              $this->manuelexp= (!empty($data['manuelexp'])) ? $data['manuelexp'] : null;
              $this->manuelinstal= (!empty($data['manuelinstal'])) ? $data['manuelinstal'] : null;
              $this->idposte= (!empty($data['idposte'])) ? $data['idposte'] : null;
            $this->idetab= (!empty($data['idetab'])) ? $data['idetab'] : null; 
         
        
     }
}
 