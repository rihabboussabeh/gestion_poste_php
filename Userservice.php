<?php
/*     kol table les attribu mte3haa  w les fonction  exchange*/
namespace Application\Model;





class Userservice

{
 public $iduserserv;
 public $nom;
 public $prenom;
 public $login;
  public $password;

   public function exchangeArray($data)
     {
       //tab en objet
         $this->iduserserv     = (!empty($data['iduserserv'])) ? $data['iduserserv'] : null;
         $this->nom = (!empty($data['nom'])) ? $data['nom'] : null;
         $this->prenom  = (!empty($data['prenom'])) ? $data['prenom'] : null;    
               $this->login  = (!empty($data['login'])) ? $data['login'] : null;  
          $this->password  = (!empty($data['password'])) ? $data['password'] : null;
       
         
     }
}
 
