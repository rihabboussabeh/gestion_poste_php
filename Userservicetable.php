<?php

/* tablegateway constructeur mte3o m3a les methode illi mech nzidohem */ 

namespace Application\Model;
use Application\Model\Userservice;
 
 use Zend\Db\TableGateway\TableGateway;
 
class Userservicetable {
    
   protected $tableGateway;

     public function __construct(TableGateway $tableGateway)
     {
         $this->tableGateway = $tableGateway;
     }
      public function getUserservice($iduserserv)
     {
         $iduserserv  = (int) $iduserserv;
         $rowset = $this->tableGateway->select(array('iduserserv' => $iduserserv));
         $row = $rowset->current();
         if (!$row) {
             throw new \Exception("Could not find row $iduserserv");
         }
         return $row;
     }

     public function fetchAll()
     {
         $resultSet = $this->tableGateway->select();
         return $resultSet;
     }
 
       
   
     
     public function deleteUserservice($iduserserv)
     {
         $this->tableGateway->delete(array('iduserserv' => (int) $iduserserv));
     }
   
        public function saveUserservice(Userservice $userservice)
     {
         $data = array(
 
 
 
 
 

              'nom' => $userservice->nom,
              'prenom' => $userservice->prenom,
              'login' => $userservice->login,
             'password' => $userservice->password,
            
          
            
        );

         $iduserserv = (int) $userservice->iduserserv;
         if ($iduserserv == 0) {
             $this->tableGateway->insert($data);
         } else {
             if ($this->getUserservice($iduserserv)) {
                 $this->tableGateway->update($data, array('iduserserv' => $iduserserv));
             } else {
                 throw new \Exception('evenement id does not exist');
             }
         }
     }
     
     
      public function fetchid($iduserserv)
     {
        $resultSet = $this->tableGateway->select(array('iduserserv' => (int) $iduserserv));
         return $resultSet ;
         
     }
     
       
  
}
