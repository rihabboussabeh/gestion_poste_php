<?php

/* tablegateway constructeur mte3o m3a les methode illi mech nzidohem */ 

namespace Application\Model;
use Application\Model\Document;
 use Zend\Db\TableGateway\TableGateway;
 
class Documenttable {
    
   protected $tableGateway;

     public function __construct(TableGateway $tableGateway)
     {
         $this->tableGateway = $tableGateway;
     }
 public function getDocument($idoc)
     {
         $idoc  = (int) $idoc;
         $rowset = $this->tableGateway->select(array('idoc' => $idoc));
         $row = $rowset->current();
         if (!$row) {
             throw new \Exception("Could not find row $idoc");
         }
         return $row;
     }
     public function fetchAll()
     {
         $resultSet = $this->tableGateway->select();
         return $resultSet;
     }
  
       
      public function deleteDocument($idoc)
     {
         $this->tableGateway->delete(array('idoc' => (int) $idoc));
     }
 
       public function saveDocument(Document $document)
     {
         $data = array(
             'ref' => $document->ref,
                'debval' => $document->debval,
              'finval' => $document->finval,
           'dermaj' => $document->dermaj,
           'contrat' => $document->contrat,
              'contratm' => $document->contratm,
                  'manuelexp' => $document->manuelexp,
             'manuelinstal' => $document->manuelinstal,
           'idposte' => $document->idposte,
         'idetab' => $document->idetab,
        );

         $idoc = (int) $document->idoc;
         if ($idoc == 0) {
             $this->tableGateway->insert($data);
         } else {
             if ($this->getDocument($idoc)) {
                 $this->tableGateway->update($data, array('idoc' => $idoc));
             } else {
                 throw new \Exception('Proposisition id does not exist');
             }
         }
     }
     
      public function fetchid($idoc)
     {
        $resultSet = $this->tableGateway->select(array('idoc' => (int) $idoc));
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
