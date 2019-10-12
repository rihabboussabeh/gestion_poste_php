<?php

/* tablegateway constructeur mte3o m3a les methode illi mech nzidohem */ 

namespace Application\Model;
use Application\Model\Ecran;
 
 use Zend\Db\TableGateway\TableGateway;
 
class Ecrantable {
    
   protected $tableGateway;

     public function __construct(TableGateway $tableGateway)
     {
         $this->tableGateway = $tableGateway;
     }
      public function getEcran($idec)
     {
         $idposte  = (int) $idposte;
         $rowset = $this->tableGateway->select(array('idec' => $idec));
         $row = $rowset->current();
         if (!$row) {
             throw new \Exception("Could not find row $idposte");
         }
         return $row;
     }

     public function fetchAll()
     {
         $resultSet = $this->tableGateway->select();
         return $resultSet;
     }
 
       
   
     
     public function deleteEcran($idec)
     {
         $this->tableGateway->delete(array('idec' => (int) $idec));
     }
   
        public function saveEcran(Ecran $ecran)
     {
         $data = array(
         'idposte' => $ecran->idposte,
              'idetab' => $ecran->idetab,
              'marque' => $ecran->marque,
              'nserie' => $ecran->nserie,
             'type' => $ecran->type,
               
          
            
        );

         $idec = (int) $ecran->idec;
         if ($idec == 0) {
             $this->tableGateway->insert($data);
         } else {
             if ($this->getEcran($idec)) {
                 $this->tableGateway->update($data, array('idec' => $idec));
             } else {
                 throw new \Exception('evenement id does not exist');
             }
         }
     }
     
     
      public function fetchid($idec)
     {
        $resultSet = $this->tableGateway->select(array('idec' => (int) $idec));
         return $resultSet ;
         
     }
     
       public function fetchallbycentreid($idetab)
     {
         
         $rowset = $this->tableGateway->select(array('idetab' => $idetab));
         return $rowset;
     }
      public function fetchallbypostid($idposte)
     {
         
         $rowset = $this->tableGateway->select(array('idposte' => $idposte));
         return $rowset;
     }
     
     
}
