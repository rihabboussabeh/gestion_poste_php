<?php

/* tablegateway constructeur mte3o m3a les methode illi mech nzidohem */ 

namespace Application\Model;
use Application\Model\Scanneur;
 
 use Zend\Db\TableGateway\TableGateway;
 
class Scanneurtable {
    
   protected $tableGateway;

     public function __construct(TableGateway $tableGateway)
     {
         $this->tableGateway = $tableGateway;
     }
      public function getScanneur($idsc)
     {
         $idsc  = (int) $idsc;
         $rowset = $this->tableGateway->select(array('idsc' => $idsc));
         $row = $rowset->current();
         if (!$row) {
             throw new \Exception("Could not find row $idsc");
         }
         return $row;
     }

     public function fetchAll()
     {
         $resultSet = $this->tableGateway->select();
         return $resultSet;
     }
 
       
   
     
     public function deleteScanneur($idsc)
     {
         $this->tableGateway->delete(array('idsc' => (int) $idsc));
     }
   
        public function saveScanneur(Scanneur $scanneur)
     {
         $data = array(
           'idposte' => $scanneur->idposte,
              'idetab' => $scanneur->idetab,
              'marque' => $scanneur->marque,
              'nserie' => $scanneur->nserie,
             'type' => $scanneur->type,
               
          
            
        );

         $idsc = (int) $scanneur->idsc;
         if ($idsc == 0) {
             $this->tableGateway->insert($data);
         } else {
             if ($this->getScanneur($idsc)) {
                 $this->tableGateway->update($data, array('idsc' => $idsc));
             } else {
                 throw new \Exception('evenement id does not exist');
             }
         }
     }
     
     
      public function fetchid($idsc)
     {
        $resultSet = $this->tableGateway->select(array('idsc' => (int) $idsc));
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
