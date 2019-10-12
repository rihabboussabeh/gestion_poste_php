<?php

/* tablegateway constructeur mte3o m3a les methode illi mech nzidohem */ 

namespace Application\Model;
use Application\Model\Imprimante;
 
 use Zend\Db\TableGateway\TableGateway;
 
class Imprimantetable {
    
   protected $tableGateway;

     public function __construct(TableGateway $tableGateway)
     {
         $this->tableGateway = $tableGateway;
     }
      public function getImprimante($idimp)
     {
         $idimp  = (int) $idimp;
         $rowset = $this->tableGateway->select(array('idimp' => $idimp));
         $row = $rowset->current();
         if (!$row) {
             throw new \Exception("Could not find row $idimp");
         }
         return $row;
     }

     public function fetchAll()
     {
         $resultSet = $this->tableGateway->select();
         return $resultSet;
     }
 
       
   
     
     public function deleteImprimante($idimp)
     {
         $this->tableGateway->delete(array('idimp' => (int) $idimp));
     }
   
        public function saveImprimante(Imprimante $imprimante)
     {
         $data = array(
               'idposte' => $imprimante->idposte,
              'idetab' => $imprimante->idetab,
              'marque' => $imprimante->marque,
              'nserie' => $imprimante->nserie,
             'type' => $imprimante->type,
              'consommable' => $imprimante->consommable,
               
          
            
        );

         $idimp = (int) $imprimante->idimp;
         if ($idimp == 0) {
             $this->tableGateway->insert($data);
         } else {
             if ($this->getImprimante($idimp)) {
                 $this->tableGateway->update($data, array('idimp' => $idimp));
             } else {
                 throw new \Exception('evenement id does not exist');
             }
         }
     }
     
     
      public function fetchid($idimp)
     {
        $resultSet = $this->tableGateway->select(array('idimp' => (int) $idimp));
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
