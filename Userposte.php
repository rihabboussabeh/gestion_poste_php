<?php
/*     kol table les attribu mte3haa  w les fonction  exchange*/
namespace Application\Model;





class Userposte

{
 public $iduser;
 public $nom;
 public $prenom;
 public $plagehoraire;
  public $domexp;
 public $detpost;
   public $idposte;
 public $idetab;
 
  
   public function exchangeArray($data)
     {
       //tab en objet
         $this->iduser     = (!empty($data['iduser'])) ? $data['iduser'] : null;
         $this->nom = (!empty($data['nom'])) ? $data['nom'] : null;
         $this->prenom  = (!empty($data['prenom'])) ? $data['prenom'] : null;    
               $this->plagehoraire  = (!empty($data['plagehoraire'])) ? $data['plagehoraire'] : null;  
          $this->domexp  = (!empty($data['domexp'])) ? $data['domexp'] : null;
        $this->detpost    = (!empty($data['detpost'])) ? $data['detpost'] : null;
             $this->idposte = (!empty($data['idposte'])) ? $data['idposte'] : null;
         $this->idetab = (!empty($data['idetab'])) ? $data['idetab'] : null;
        
         
         
     }
}
 
