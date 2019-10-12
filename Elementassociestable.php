<?php

/* tablegateway constructeur mte3o m3a les methode illi mech nzidohem */ 

namespace Application\Model;
use Application\Model\Elementassocies;
 use Zend\Db\TableGateway\TableGateway;
 
class Elementassociestable {
    
   protected $tableGateway;

     public function __construct(TableGateway $tableGateway)
     {
         $this->tableGateway = $tableGateway;
     }
 public function getElementassocies($idel)
     {
         $idel  = (int) $idel;
         $rowset = $this->tableGateway->select(array('idel' => $idel));
         $row = $rowset->current();
         if (!$row) {
             throw new \Exception("Could not find row $idel");
         }
         return $row;
     }
     public function fetchAll()
     {
         $resultSet = $this->tableGateway->select();
         return $resultSet;
     }
  
       
      public function deleteElementassocies($idel)
     {
         $this->tableGateway->delete(array('idel' => (int) $idel));
     }
 
       public function saveElementassocies(Elementassocies $elementassocies)
     {
         $data = array(
             'idposte' => $elementassocies->idposte,
                'idetab' => $elementassocies->idetab,
              'edse' => $elementassocies->edse,
           'taillse' => $elementassocies->taillse,
           'original' => $elementassocies->original,
              'internet' => $elementassocies->internet,
                  'application1' => $elementassocies->application1,
             'application2' => $elementassocies->application2,
           
        );

         $idel = (int) $elementassocies->idel;
         if ($idel == 0) {
             $this->tableGateway->insert($data);
         } else {
             if ($this->getElementassocies($idel)) {
                 $this->tableGateway->update($data, array('idel' => $idel));
             } else {
                 throw new \Exception('Proposisition id does not exist');
             }
         }
     }
     
      public function fetchid($idel)
     {
        $resultSet = $this->tableGateway->select(array('idel' => (int) $idel));
         return $resultSet ;
         
     }
         public function fetchallbyetabid($idetab)
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
