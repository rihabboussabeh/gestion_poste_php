<?php

/* tablegateway constructeur mte3o m3a les methode illi mech nzidohem */ 

namespace Application\Model;
use Application\Model\Userposte;
 
 use Zend\Db\TableGateway\TableGateway;
 
class Userpostetable {
    
   protected $tableGateway;

     public function __construct(TableGateway $tableGateway)
     {
         $this->tableGateway = $tableGateway;
     }
      public function getUserposte($iduser)
     {
         $iduser  = (int) $iduser;
         $rowset = $this->tableGateway->select(array('iduser' => $iduser));
         $row = $rowset->current();
         if (!$row) {
             throw new \Exception("Could not find row $iduser");
         }
         return $row;
     }

     public function fetchAll()
     {
         $resultSet = $this->tableGateway->select();
         return $resultSet;
     }
 
       
   
     
     public function deleteUserposte($iduser)
     {
         $this->tableGateway->delete(array('iduser' => (int) $iduser));
     }
   
        public function saveUserposte(Userposte $userposte)
     {
         $data = array(
 
 
 
 
 

              'nom' => $userposte->nom,
              'prenom' => $userposte->prenom,
              'plagehoraire' => $userposte->plagehoraire,
             'domexp' => $userposte->domexp,
               'detpost' => $userposte->detpost,
                'idposte' => $userposte->idposte,
                           'idetab' => $userposte->idetab,
               
          
            
        );

         $iduser = (int) $userposte->iduser;
         if ($iduser == 0) {
             $this->tableGateway->insert($data);
         } else {
             if ($this->getUserposte($iduser)) {
                 $this->tableGateway->update($data, array('iduser' => $iduser));
             } else {
                 throw new \Exception('evenement id does not exist');
             }
         }
     }
     
     
      public function fetchid($iduser)
     {
        $resultSet = $this->tableGateway->select(array('iduser' => (int) $iduser));
         return $resultSet ;
         
     }
     
       public function fetchallbypostid($idposte)
     {
         
         $rowset = $this->tableGateway->select(array('idposte' => $idposte));
         return $rowset;
     }
      
     
}
