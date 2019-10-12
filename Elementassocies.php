<?php
/*     kol table les attribu mte3haa  w les fonction  exchange*/
namespace Application\Model;





class Elementassocies {
    public $idel;
 public $idposte;
 public $idetab;
  public $edse;
 public $taillse;
  public $original;
    public $internet;
    public $application1;
    public $application2;
 
 
   
   public function exchangeArray($data)
     {
       //tab en objet
              $this->idel    = (!empty($data['idel'])) ? $data['idel'] : null;
         $this->idposte    = (!empty($data['idposte'])) ? $data['idposte'] : null;
             $this->idetab = (!empty($data['idetab'])) ? $data['idetab'] : null;
         $this->edse = (!empty($data['edse'])) ? $data['edse'] : null;
        
            $this->taillse= (!empty($data['taillse'])) ? $data['taillse'] : null;
              $this->original= (!empty($data['original'])) ? $data['original'] : null;
            $this->internet= (!empty($data['internet'])) ? $data['internet'] : null;
              $this->application1= (!empty($data['application1'])) ? $data['application1'] : null;
              $this->application2= (!empty($data['application2'])) ? $data['application2'] : null;
            
         
        
     }
}
 