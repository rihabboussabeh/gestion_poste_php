<?php

/* tablegateway constructeur mte3o m3a les methode illi mech nzidohem */ 

namespace Application\Model;
use Application\Model\Poste;
 
 use Zend\Db\TableGateway\TableGateway;
 
class Postetable {
    
   protected $tableGateway;

     public function __construct(TableGateway $tableGateway)
     {
         $this->tableGateway = $tableGateway;
     }
      public function getPoste($idposte)
     {
         $idposte  = (int) $idposte;
         $rowset = $this->tableGateway->select(array('idposte' => $idposte));
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
 
       
   
     
     public function deletePoste($idposte)
     {
         $this->tableGateway->delete(array('idposte' => (int) $idposte));
     }
   
        public function savePoste(Poste $poste)
     {
         $data = array(
 

              'adresip' => $poste->adresip,
              'nprisereseau' => $poste->nprisereseau,
              'se' => $poste->se,
             'postel' => $poste->postel,
           
             'idetab' => $poste->idetab,
               
          
            
        );

         $idposte = (int) $poste->idposte;
         if ($idposte == 0) {
             $this->tableGateway->insert($data);
             $pos =$this->tableGateway->lastInsertValue;
             return $pos ;
         } else {
             if ($this->getPoste($idposte)) {
                 $this->tableGateway->update($data, array('idposte' => $idposte));
             } else {
                 throw new \Exception('evenement id does not exist');
             }
         }
     }
     
     
      public function fetchid($idposte)
     {
        $resultSet = $this->tableGateway->select(array('idposte' => (int) $idposte));
         return $resultSet ;
         
     }
     
       public function fetchbyetab($idetab)
     {
         
         $rowset = $this->tableGateway->select(array('idetab' => (int) $idetab));
         return $rowset;
     }
        public function fetchallbypostid($idposte)
     {
         
         $rowset = $this->tableGateway->select(array('idposte' => $idposte));
         return $rowset;
     }
     
     
}
