<?php

/* tablegateway constructeur mte3o m3a les methode illi mech nzidohem */ 

namespace Application\Model;
use Application\Model\Unitecentral;
 
 use Zend\Db\TableGateway\TableGateway;
 
class Unitecentraltable {
    
   protected $tableGateway;

     public function __construct(TableGateway $tableGateway)
     {
         $this->tableGateway = $tableGateway;
     }
      public function getUnitecentral($iduc)
     {
         $iduc  = (int) $iduc;
         $rowset = $this->tableGateway->select(array('iduc' => $iduc));
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
 
       
   
     
     public function deleteUnitecentral($iduc)
     {
         $this->tableGateway->delete(array('iduc' => (int) $iduc));
     }
   
        public function saveUnitecentral(Unitecentral $unitecentral)
     {
         $data = array(
 
              'idposte' => $unitecentral->idposte,
         'idetab' => $unitecentral->idetab,
              'marque' => $unitecentral->marque,
              'nserie' => $unitecentral->nserie,
             'cpu' => $unitecentral->cpu,
               'disqdur' => $unitecentral->disqdur,
              'ram' => $unitecentral->ram,
             'cartegraphique' => $unitecentral->cartegraphique,
             'cartereseau' => $unitecentral->cartereseau,
               
          
            
        );

         $iduc = (int) $unitecentral->iduc;
         if ($iduc == 0) {
             $this->tableGateway->insert($data);
         } else {
             if ($this->getUnitecentral($iduc)) {
                 $this->tableGateway->update($data, array('iduc' => $iduc));
             } else {
                 throw new \Exception('evenement id does not exist');
             }
         }
     }
     
     
      public function fetchid($iduc)
     {
        $resultSet = $this->tableGateway->select(array('iduc' => (int) $iduc));
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
