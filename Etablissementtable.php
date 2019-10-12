<?php

/* tablegateway constructeur mte3o m3a les methode illi mech nzidohem */ 

namespace Application\Model;
use Application\Model\Etablissement;
 
 use Zend\Db\TableGateway\TableGateway;
 
class Etablissementtable {
    
   protected $tableGateway;

     public function __construct(TableGateway $tableGateway)
     {
         $this->tableGateway = $tableGateway;
     }
      public function getEtablissement($idetab)
     {
         $idetab  = (int) $idetab;
         $rowset = $this->tableGateway->select(array('idetab' => $idetab));
         $row = $rowset->current();
         if (!$row) {
             throw new \Exception("Could not find row $idetab");
         }
         return $row;
     }

     public function fetchAll()
     {
         $resultSet = $this->tableGateway->select();
         return $resultSet;
     }
 
       
   
     
     public function deleteEtablissement($idetab)
     {
         $this->tableGateway->delete(array('idetab' => (int) $idetab));
     }
   
        public function saveEtablissement(Etablissement $etablissement)
     {
         $data = array(
 
    
              'nometab' => $etablissement->nometab,
              'service' => $etablissement->service,
              'prop' => $etablissement->prop,
             'administrateur' => $etablissement->administrateur,
               
          
            
        );

         $idetab = (int) $etablissement->idetab;
         if ($idetab == 0) {
             $this->tableGateway->insert($data);
             $UID =$this->tableGateway->lastInsertValue;
             return $UID ;
         } else {
             if ($this->getEtablissement($idetab)) {
                 $this->tableGateway->update($data, array('idetab' => $idetab));
             } else {
                 throw new \Exception('evenement id does not exist');
             }
         }
     }
     
     
      public function fetchid($idetab)
     {
        $resultSet = $this->tableGateway->select(array('idetab' => (int) $idetab));
         return $resultSet ;
         
     }
     
    
     
}
