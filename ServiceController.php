<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
 use Application\Model\Document;
 use Application\Model\Documenttable;
 use Application\Model\Ecran;
 use Application\Model\Ecrantable;
 use Application\Model\Elementassocies;
 use Application\Model\Elementassociestable;
 use Application\Model\Etablissement;
 use Application\Model\Etablissementtable;
 use Application\Model\Imprimante;
 use Application\Model\Imprimantetable;
 use Application\Model\Poste;
 use Application\Model\Postetable;
 use Application\Model\Scanneur;
 use Application\Model\Scanneurtable;
 use Application\Model\Unitecentral;
 use Application\Model\Unitecentraltable;
 use Application\Model\Userposte;
 use Application\Model\Userpostetable;
 use Application\Model\Userservice;
 use Application\Model\Userservicetable;
 use Zend\Mvc\MvcEvent;
 
class ServiceController extends AbstractActionController
{    private $Documenttable;
     private $Ecrantable;
       private $Elementassociestable;
       private $Etablissementtable;
      private $Imprimantetable;
      private $Postetable;
      private $Scanneurtable;
      private $Unitecentraltable;
     private $authService;
       private $Userpostetable;
           private $Userservicetable;
   
  private function getAuthService(){
        
      if (!$this->authService)  //test vide ?
       {    //initialiser usertable en post
             $sm = $this->getServiceLocator();
             $this->authService = $sm->get('AuthService');
         }
         return $this->authService;
  
        
    }
   private function getDocumenttable(){
        
      if (!$this->Documenttable)  //test vide ?
       {    //initialiser usertable
             $sm = $this->getServiceLocator();
             $this->Documenttable = $sm->get('Application\Model\Documenttable');
         }
       
         return $this->Documenttable;   
    }
       
      private function getEcrantable(){
        
      if (!$this->Ecrantable)  //test vide ?
       {    //initialiser usertable
             $sm = $this->getServiceLocator();
             $this->Ecrantable = $sm->get('Application\Model\Ecrantable');
         }
         return $this->Ecrantable;
    }
    
     private function getEtablissementtable(){
        
      if (!$this->Etablissementtable)  //test vide ?
       {    //initialiser usertable
             $sm = $this->getServiceLocator();
             $this->Etablissementtable = $sm->get('Application\Model\Etablissementtable');
         }
         return $this->Etablissementtable;
  
        
    }
     private function getImprimantetable(){
        
      if (!$this->Imprimantetable)  //test vide ?
       {    //initialiser usertable
             $sm = $this->getServiceLocator();
             $this->Imprimantetable = $sm->get('Application\Model\Imprimantetable');
         }
         return $this->Imprimantetable;
  
        
    }
      private function getPostetable(){
        
      if (!$this->Postetable)  //test vide ?
       {    //initialiser usertable
             $sm = $this->getServiceLocator();
             $this->Postetable = $sm->get('Application\Model\Postetable');
         }
         return $this->Postetable;
  
        
    }
      private function getScanneurtable(){
        
      if (!$this->Scanneurtable)  //test vide ?
       {    //initialiser usertable
             $sm = $this->getServiceLocator();
             $this->Scanneurtable = $sm->get('Application\Model\Scanneurtable');
         }
         return $this->Scanneurtable;
  
        
    }
           private function getUnitecentraltable(){
        
      if (!$this->Unitecentraltable)  //test vide ?
       {    //initialiser usertable
             $sm = $this->getServiceLocator();
             $this->Unitecentraltable = $sm->get('Application\Model\Unitecentraltable');
         }
         return $this->Unitecentraltable;
 }  
      private function getUserpostetable(){
        
      if (!$this->Userpostetable)  //test vide ?
       {    //initialiser usertable
             $sm = $this->getServiceLocator();
             $this->Userpostetable = $sm->get('Application\Model\Userpostetable');
         }
         return $this->Userpostetable;
 } 
       private function getUserservicetable(){
        
      if (!$this->Userservicetable)  //test vide ?
       {    //initialiser usertable
             $sm = $this->getServiceLocator();
             $this->Userservicetable = $sm->get('Application\Model\Userservicetable');
         }
         return $this->Userservicetable;
  
        
    }
       public function userpostAction()
    {
       
        $etab= $this->getEtablissementtable()->fetchAll();
         $post= $this->getPostetable()->fetchAll();
   $etab->buffer();

$current = $etab->current();

                 return new ViewModel(
                         array(
                           
                             'etab' => $etab,
                             'post' => $post
                         )

                         );
    
    }
    
     public function unitecentralAction()
    {
       
        $etab= $this->getEtablissementtable()->fetchAll();
         $post= $this->getPostetable()->fetchAll();
   $etab->buffer();

$current = $etab->current();

                 return new ViewModel(
                         array(
                           
                             'etab' => $etab,
                             'post' => $post
                         )

                         );
    
    }
    
        public function scanneurAction()
    {
       
        $etab= $this->getEtablissementtable()->fetchAll();
         $post= $this->getPostetable()->fetchAll();
   $etab->buffer();

$current = $etab->current();

                 return new ViewModel(
                         array(
                           
                             'etab' => $etab,
                             'post' => $post
                         )

                         );
    
    }
    public function elementAction()
    {
       
        $etab= $this->getEtablissementtable()->fetchAll();
         $post= $this->getPostetable()->fetchAll();
   $etab->buffer();

$current = $etab->current();

                 return new ViewModel(
                         array(
                           
                             'etab' => $etab,
                             'post' => $post
                         )

                         );
    
    }
     public function imprimanteAction()
    {
       
        $etab= $this->getEtablissementtable()->fetchAll();
         $post= $this->getPostetable()->fetchAll();
   $etab->buffer();

$current = $etab->current();

                 return new ViewModel(
                         array(
                           
                             'etab' => $etab,
                             'post' => $post
                         )

                         );
    
    }
    
      public function documentAction()
    {
       
        $etab= $this->getEtablissementtable()->fetchAll();
         $post= $this->getPostetable()->fetchAll();
   $etab->buffer();

$current = $etab->current();

                 return new ViewModel(
                         array(
                           
                             'etab' => $etab,
                             'post' => $post
                         )

                         );
    
    }
     public function ecranAction()
    {
       
        $etab= $this->getEtablissementtable()->fetchAll();
         $post= $this->getPostetable()->fetchAll();
   $etab->buffer();

$current = $etab->current();

                 return new ViewModel(
                         array(
                           
                             'etab' => $etab,
                             'post' => $post
                         )

                         );
    
    }

      public function posteAction()
    {
       
        $etab= $this->getEtablissementtable()->fetchAll();
   $etab->buffer();

$current = $etab->current();

                 return new ViewModel(
                         array(
                           
                             'etab' => $etab
                         )

                         );
    
    }
    
    
       public function etabAction()
    {
       
       
       
        $etab= $this->getEtablissementtable()->fetchAll();
   $etab->buffer();

$current = $etab->current();

                 return new ViewModel(
                         array(
                           
                             'etab' => $etab
                         )

                         );
    
    }
   
      public function listetabAction()
    {
       $etab = $this->getEtablissementtable()->fetchAll() ;
              
 
        return new ViewModel(
                array(
                
           
                    'etab' =>$etab
                 
            )
                
                );
       
    }
         public function affichuserAction()
    {
      $idposte = $this->params()->fromQuery('idposte');
      $user = $this->getUserpostetable()->fetchallbypostid($idposte);
 
        return new ViewModel(
                array(
                
           
                    'user' =>$user
                 
            )
                
                );
       
    }
    
          public function updateuserAction()
    {
      $iduser = $this->params()->fromQuery('iduserserv');
      $user = $this->getUserservicetable()->fetchid($iduser);
 
        return new ViewModel(
                array(
                
           
                    'user' =>$user
                 
            )
                
                );
       
    }
           public function modifuserAction()
    {
      $idposte = $this->params()->fromQuery('idposte');
      $user = $this->getUserpostetable()->fetchallbypostid($idposte);
 
        return new ViewModel(
                array(
                
           
                    'user' =>$user
                 
            )
                
                );
       
    }
      public function affichdocAction()
    {
      $idposte = $this->params()->fromQuery('idposte');
      $doc = $this->getDocumenttable()->fetchallbypostid($idposte);
 
        return new ViewModel(
                array(
                
           
                    'Doc' => $doc 
                 
            )
                
                );
       
    }
         public function modifdocAction()
    {
      $idposte = $this->params()->fromQuery('idposte');
      $doc = $this->getDocumenttable()->fetchallbypostid($idposte);
 
        return new ViewModel(
                array(
                
           
                    'Doc' => $doc 
                 
            )
                
                );
       
    }
    public function affichucAction()
    {
      $idposte = $this->params()->fromQuery('idposte');
      $Unit = $this->getUnitecentraltable()->fetchallbypostid($idposte);
 
        return new ViewModel(
                array(
                
           
                    'Unit' => $Unit 
                 
            )
                
                );
       
    }
    
        public function moducAction()
    {
      $idposte = $this->params()->fromQuery('idposte');
      $Unit = $this->getUnitecentraltable()->fetchallbypostid($idposte);
 
        return new ViewModel(
                array(
                
           
                    'Unit' => $Unit 
                 
            )
                
                );
       
    }
    
    
       public function affichecAction()
    {
      $idposte = $this->params()->fromQuery('idposte');
      $Ecran = $this->getEcrantable()->fetchallbypostid($idposte);
 
        return new ViewModel(
                array(
                
           
                    'Ecran' => $Ecran 
                 
            )
                
                );
       
    }
    
        
           public function modecAction()
    {
      $idposte = $this->params()->fromQuery('idposte');
      $Ecran = $this->getEcrantable()->fetchallbypostid($idposte);
 
        return new ViewModel(
                array(
                
           
                    'Ecran' => $Ecran 
                 
            )
                
                );
       
    }
        public function affichscAction()
    {
      $idposte = $this->params()->fromQuery('idposte');
      $Scan = $this->getScanneurtable()->fetchallbypostid($idposte);
 
        return new ViewModel(
                array(
                
           
                    'Scan' => $Scan 
                 
            )
                
                );
       
    }
    
       public function modscanAction()
    {
      $idposte = $this->params()->fromQuery('idposte');
      $Scan = $this->getScanneurtable()->fetchallbypostid($idposte);
 
        return new ViewModel(
                array(
                
           
                    'Scan' => $Scan 
                 
            )
                
                );
       
    }
         public function editpostAction()
    {
      $idposte = $this->params()->fromQuery('idpost');
      $post = $this->getPostetable()->fetchallbypostid($idposte);
 
        return new ViewModel(
                array(
                
           
                    'post' => $post 
                 
            )
                
                );
       
    }
     public function affichelAction()
    {
      $idposte = $this->params()->fromQuery('idposte');
      $element = $this->getElementassociestable()->fetchallbypostid($idposte);
 
        return new ViewModel(
                array(
                
           
                    'element' => $element 
                 
            )
                
                );
       
    }     public function modelemAction()
    {
      $idposte = $this->params()->fromQuery('idposte');
      $element = $this->getElementassociestable()->fetchallbypostid($idposte);
 
        return new ViewModel(
                array(
                
           
                    'element' => $element 
                 
            )
                
                );
       
    }
     public function affichimpAction()
    {
      $idposte = $this->params()->fromQuery('idposte');
      $Imp = $this->getImprimantetable()->fetchallbypostid($idposte);
 
        return new ViewModel(
                array(
                
           
                    'Imp' => $Imp 
                 
            )
                
                );
       
    }
      public function modimpAction()
    {
      $idposte = $this->params()->fromQuery('idposte');
      $Imp = $this->getImprimantetable()->fetchallbypostid($idposte);
 
        return new ViewModel(
                array(
                
           
                    'Imp' => $Imp 
                 
            )
                
                );
     }
      public function listpostAction()
    {    $idetab = $this->params()->fromQuery('idetab');
       
       $poste = $this->getPostetable()->fetchbyetab($idetab) ;
              
 
        return new ViewModel(
                array(
                
           
                    'poste' =>$poste
                 
            )
                
                );
       
    }
       public function ficheAction()
    {    $idpost = $this->params()->fromQuery('idpost');
       
       $user = $this->getUserpostetable()->fetchallbypostid($idpost) ;
              
              $user->buffer();
              $current = $user->current();
              
            $Doc = $this->getDocumenttable()->fetchallbypostid($idpost) ; ;
              
            $Doc->buffer();
            $current = $Doc->current();
              
         $Unit = $this->getUnitecentraltable()->fetchallbypostid($idpost) ; ;
              
            $Unit->buffer();
            $current = $Unit->current();
              
       $Ecran = $this->getEcrantable()->fetchallbypostid($idpost) ;
              
              $Ecran->buffer();
           $current = $Ecran->current();
              
       $Imp = $this->getImprimantetable()->fetchallbypostid($idpost) ;
              
          $Imp->buffer();
             $current = $Imp->current();
         
       $Scanneur = $this->getScanneurtable()->fetchallbypostid($idpost) ;
              
              $Scanneur->buffer();
           $current = $Scanneur->current();
              
         $element = $this->getElementassociestable()->fetchallbypostid($idpost) ; ;
              
            $element->buffer();
             $current = $element->current();

        return new ViewModel(
                array(
            
                    'user' =>$user,
                    'Doc' =>$Doc,
                   'Unit' =>$Unit,
                   'Ecran' =>$Ecran,
                    'Imp' =>$Imp,
                     'Scanneur' =>$Scanneur,
                       'element' =>$element,
                 
            )
                
                );
       
    }
    
    public function printAction()
    {
       $idpost = $this->params()->fromQuery('idpost');
       $idetab = $this->params()->fromQuery('idetab');
       
       $user = $this->getUserpostetable()->fetchallbypostid($idpost) ;
              
              $user->buffer();
              $current = $user->current();
              
            $Doc = $this->getDocumenttable()->fetchallbypostid($idpost) ; ;
              
            $Doc->buffer();
            $current = $Doc->current();
              
         $Unit = $this->getUnitecentraltable()->fetchallbypostid($idpost) ; ;
              
            $Unit->buffer();
            $current = $Unit->current();
              
       $Ecran = $this->getEcrantable()->fetchallbypostid($idpost) ;
              
              $Ecran->buffer();
           $current = $Ecran->current();
              
       $Imp = $this->getImprimantetable()->fetchallbypostid($idpost) ;
              
          $Imp->buffer();
             $current = $Imp->current();
         
       $Scanneur = $this->getScanneurtable()->fetchallbypostid($idpost) ;
              
              $Scanneur->buffer();
           $current = $Scanneur->current();
              
         $element = $this->getElementassociestable()->fetchallbypostid($idpost) ; ;
              
            $element->buffer();
             $current = $element->current();
          
          $post = $this->getPostetable()->fetchid($idpost);
              
            $post->buffer();
             $current = $post->current();
             
             $etab = $this->getEtablissementtable()->fetchid($idetab);
              
            $etab->buffer();
             $current = $etab->current();

        return new ViewModel(
                array(
            
                    'user' =>$user,
                    'Doc' =>$Doc,
                   'Unit' =>$Unit,
                   'Ecran' =>$Ecran,
                    'Imp' =>$Imp,
                     'Scanneur' =>$Scanneur,
                       'element' =>$element,
                     'post' =>$post,
                     'etab' =>$etab,
                    
                 
            )
                
                );
    }
    public function addetabAction()
    {//recuperation des variable
        $etablissement=new Etablissement();
        
        $etablissement->idetab=$this->params()->fromPost('idetab');
       $etablissement->nometab=$this->params()->fromPost('nometab');
   $etablissement->service= $this->params()->fromPost('service');
   
    $etablissement->prop= $this->params()->fromPost('prop');
    
   $etablissement->administrateur= $this->params()->fromPost('administrateur');


           
       try{
  $UID = $this->getEtablissementTable()->saveEtablissement($etablissement);
  
    }catch(\Exeception $ex){
        echo $ex->getMessage();
    
    }
       return $this
            ->redirect()
    ->toUrl('poste?idetab='.$UID);
  
    }
    
  
      public function addposteAction()
    {//recuperation des variable
        $poste=new Poste();
        
       
        $poste->idposte=$this->params()->fromPost('idposte');
       $poste->adresip=$this->params()->fromPost('adresip');
   $poste->nprisereseau= $this->params()->fromPost('nprisereseau');
   
    $poste->se= $this->params()->fromPost('se');
    
   $poste->postel= $this->params()->fromPost('postel');
   
      $idetab= $this->params()->fromPost('idetab');
   $poste->idetab= $this->params()->fromPost('idetab');

           
       try{
 $pos =  $this->getPosteTable()->savePoste($poste);
   echo "true";
    }catch(\Exeception $ex){
        echo $ex->getMessage();
    
    }
       return $this
            ->redirect()
    ->toUrl('userpost?idposte='.$pos.'&idetab='.$idetab);
  
    }
    
         public function modposteAction()
    {//recuperation des variable
        $poste=new Poste();
        
       
        $poste->idposte=$this->params()->fromPost('idposte');
       $poste->adresip=$this->params()->fromPost('adresip');
   $poste->nprisereseau= $this->params()->fromPost('nprisereseau');
   
    $poste->se= $this->params()->fromPost('se');
    
   $poste->postel= $this->params()->fromPost('postel');
   
      $idetab= $this->params()->fromPost('idetab');
   $poste->idetab= $this->params()->fromPost('idetab');

           
       try{
 $pos =  $this->getPosteTable()->savePoste($poste);
   echo "true";
    }catch(\Exeception $ex){
        echo $ex->getMessage();
    
    }
       return $this
            ->redirect()
    ->toUrl('listpost?idposte='.$pos.'&idetab='.$idetab);
  
    }
    
     public function adduserpostAction()
    {//recuperation des variable
        $userposte=new Userposte();
        
     
        $userposte->iduser=$this->params()->fromPost('iduser');
       $userposte->nom=$this->params()->fromPost('nom');
   $userposte->prenom= $this->params()->fromPost('prenom');
   
   $userposte->plagehoraire= $this->params()->fromPost('plagehoraire');
    
  $userposte->domexp= $this->params()->fromPost('domexp');
   $userposte->detpost= $this->params()->fromPost('detpost');
   
    $pos= $this->params()->fromPost('idposte');
   $userposte->idposte= $this->params()->fromPost('idposte');
   $idetab= $this->params()->fromPost('idetab');
   $userposte->idetab= $this->params()->fromPost('idetab');
           
       try{
   $this->getUserposteTable()->saveUserposte($userposte);
   echo "true";
    }catch(\Exeception $ex){
        echo $ex->getMessage();
    
    }
       return $this
            ->redirect()
    ->toUrl('document?idposte='.$pos.'&idetab='.$idetab);
  
    }
    
      public function moduserpostAction()
    {//recuperation des variable
        $userposte=new Userposte();
        
     
        $userposte->iduser=$this->params()->fromPost('iduser');
       $userposte->nom=$this->params()->fromPost('nom');
   $userposte->prenom= $this->params()->fromPost('prenom');
   
   $userposte->plagehoraire= $this->params()->fromPost('plagehoraire');
    
  $userposte->domexp= $this->params()->fromPost('domexp');
   $userposte->detpost= $this->params()->fromPost('detpost');
   
    $pos= $this->params()->fromPost('idposte');
   $userposte->idposte= $this->params()->fromPost('idposte');
   $idetab= $this->params()->fromPost('idetab');
   $userposte->idetab= $this->params()->fromPost('idetab');
           
       try{
   $this->getUserposteTable()->saveUserposte($userposte);
   echo "true";
    }catch(\Exeception $ex){
        echo $ex->getMessage();
    
    }
       return $this
            ->redirect()
    ->toUrl('fiche?idpost='.$pos);
  
    }
      public function moduserAction()
    {//recuperation des variable
        $userservice=new Userservice();
        
        $userservice->iduserserv=$this->params()->fromPost('iduserserv');
       $userservice->nom=$this->params()->fromPost('nom');
   $userservice->prenom= $this->params()->fromPost('prenom');
   
    $userservice->login= $this->params()->fromPost('login');
    
   $userservice->password= $this->params()->fromPost('password');


           
       try{
   $this->getUserserviceTable()->saveUserservice($userservice);
   echo "true";
    }catch(\Exeception $ex){
        echo $ex->getMessage();
    
    }
       return $this
            ->redirect()
    ->toUrl('etab');
   }
     public function addocumentAction()
    {//recuperation des variable
        $document=new Document();
        
       
       $document->ref=$this->params()->fromPost('ref');
       $document->debval=$this->params()->fromPost('debval');
   $document->finval= $this->params()->fromPost('finval');
   
   $document->dermaj= $this->params()->fromPost('dermaj');
   $document->contrat= $this->params()->fromPost('contrat');
   $document->contratm= $this->params()->fromPost('contratm');
   $document->manuelexp= $this->params()->fromPost('manuelexp');
   $document->manuelinstal= $this->params()->fromPost('manuelinstal');
     $pos= $this->params()->fromPost('idposte');
   $document->idposte= $this->params()->fromPost('idposte');
   $idetab= $this->params()->fromPost('idetab');
   $document->idetab= $this->params()->fromPost('idetab');
 
           
       try{
   $this->getDocumentTable()->saveDocument($document);
   echo "true";
    }catch(\Exeception $ex){
        echo $ex->getMessage();
    
    }
       return $this
            ->redirect()
    ->toUrl('unitecentral?idposte='.$pos.'&idetab='.$idetab);
  
    }
    
     public function moddocumentAction()
    {//recuperation des variable
        $document=new Document();
        
        $document->idoc=$this->params()->fromPost('idoc');
       $document->ref=$this->params()->fromPost('ref');
       $document->debval=$this->params()->fromPost('debval');
   $document->finval= $this->params()->fromPost('finval');
   
   $document->dermaj= $this->params()->fromPost('dermaj');
   $document->contrat= $this->params()->fromPost('contrat');
   $document->contratm= $this->params()->fromPost('contratm');
   $document->manuelexp= $this->params()->fromPost('manuelexp');
   $document->manuelinstal= $this->params()->fromPost('manuelinstal');
     $pos= $this->params()->fromPost('idposte');
   $document->idposte= $this->params()->fromPost('idposte');
   $idetab= $this->params()->fromPost('idetab');
   $document->idetab= $this->params()->fromPost('idetab');
 
           
       try{
   $this->getDocumentTable()->saveDocument($document);
   echo "true";
    }catch(\Exeception $ex){
        echo $ex->getMessage();
    
    }
       return $this
            ->redirect()
    ->toUrl('fiche?idpost='.$pos);
  
    }
    public function  addunitecentralAction()
    {//recuperation des variable
        $unitecentral=new Unitecentral();
        
       
       $unitecentral->iduc=$this->params()->fromPost('iduc');
       $unitecentral->idposte= $this->params()->fromPost('idposte');
   $unitecentral->idetab= $this->params()->fromPost('idetab');
     $pos= $this->params()->fromPost('idposte');
   
   $idetab= $this->params()->fromPost('idetab');
       $unitecentral->marque=$this->params()->fromPost('marque');
   $unitecentral->nserie= $this->params()->fromPost('nserie');
   
   $unitecentral->cpu= $this->params()->fromPost('cpu');
   $unitecentral->disqdur= $this->params()->fromPost('disqdur');
   $unitecentral->ram= $this->params()->fromPost('ram');
   $unitecentral->cartegraphique= $this->params()->fromPost('cartegraphique');
   $unitecentral->cartereseau= $this->params()->fromPost('cartereseau');
   
           
       try{
   $this->getUnitecentralTable()->saveUnitecentral($unitecentral);
   echo "true";
    }catch(\Exeception $ex){
        echo $ex->getMessage();
    
    }
       return $this
            ->redirect()
    ->toUrl('ecran?idposte='.$pos.'&idetab='.$idetab);
    }
      public function  modunitAction()
    {//recuperation des variable
        $unitecentral=new Unitecentral();
        
       
       $unitecentral->iduc=$this->params()->fromPost('iduc');
       $unitecentral->idposte= $this->params()->fromPost('idposte');
   $unitecentral->idetab= $this->params()->fromPost('idetab');
     $pos= $this->params()->fromPost('idposte');
   
   $idetab= $this->params()->fromPost('idetab');
       $unitecentral->marque=$this->params()->fromPost('marque');
   $unitecentral->nserie= $this->params()->fromPost('nserie');
   
   $unitecentral->cpu= $this->params()->fromPost('cpu');
   $unitecentral->disqdur= $this->params()->fromPost('disqdur');
   $unitecentral->ram= $this->params()->fromPost('ram');
   $unitecentral->cartegraphique= $this->params()->fromPost('cartegraphique');
   $unitecentral->cartereseau= $this->params()->fromPost('cartereseau');
   
           
       try{
   $this->getUnitecentralTable()->saveUnitecentral($unitecentral);
   echo "true";
    }catch(\Exeception $ex){
        echo $ex->getMessage();
    
    }
       return $this
            ->redirect()
    ->toUrl('fiche?idpost='.$pos);
       
         
 
  
    }
      public function  addecranAction()
    {//recuperation des variable
        $ecran=new  Ecran();
        
       
        $ecran->idec=$this->params()->fromPost('idec');
       $ecran->idposte= $this->params()->fromPost('idposte');
    $ecran->idetab= $this->params()->fromPost('idetab');
   
        $ecran->marque=$this->params()->fromPost('marque');
    $ecran->nserie= $this->params()->fromPost('nserie');
   
    $ecran->type= $this->params()->fromPost('type');
   $pos= $this->params()->fromPost('idposte');
    $idetab= $this->params()->fromPost('idetab');
   
           
       try{
   $this->getEcranTable()->saveEcran($ecran);
   echo "true";
    }catch(\Exeception $ex){
        echo $ex->getMessage();
    
    }
       return $this
            ->redirect()
    ->toUrl('imprimante?idposte='.$pos.'&idetab='.$idetab);
     
            
    }
    
         public function  modecrAction()
    {//recuperation des variable
        $ecran=new  Ecran();
        
       
        $ecran->idec=$this->params()->fromPost('idec');
       $ecran->idposte= $this->params()->fromPost('idposte');
    $ecran->idetab= $this->params()->fromPost('idetab');
   
        $ecran->marque=$this->params()->fromPost('marque');
    $ecran->nserie= $this->params()->fromPost('nserie');
   
    $ecran->type= $this->params()->fromPost('type');
   $pos= $this->params()->fromPost('idposte');
    $idetab= $this->params()->fromPost('idetab');
   
           
       try{
   $this->getEcranTable()->saveEcran($ecran);
   echo "true";
    }catch(\Exeception $ex){
        echo $ex->getMessage();
    
    }
       return $this
            ->redirect()
    ->toUrl('fiche?idpost='.$pos);
     
            
    }
    
      public function  addimpAction()
    {//recuperation des variable
         $imprimante=new Imprimante();
        
         $imprimante->idimp=$this->params()->fromPost('idimp');
        $imprimante->idec=$this->params()->fromPost('idec');
       $imprimante->idposte= $this->params()->fromPost('idposte');
    $imprimante->idetab= $this->params()->fromPost('idetab');
   
        $imprimante->marque=$this->params()->fromPost('marque');
    $imprimante->nserie= $this->params()->fromPost('nserie');
   
    $imprimante->type= $this->params()->fromPost('type');
        $imprimante->consommable= $this->params()->fromPost('consommable');
  
  
  
      $pos= $this->params()->fromPost('idposte');
    $idetab= $this->params()->fromPost('idetab');
           
       try{
   $this->getImprimanteTable()->saveImprimante($imprimante);
   echo "true";
    }catch(\Exeception $ex){
        echo $ex->getMessage();
    
    }
       return $this
            ->redirect()
    ->toUrl('scanneur?idposte='.$pos.'&idetab='.$idetab);
 
    }
    
         public function  mdimpAction()
    {//recuperation des variable
         $imprimante=new Imprimante();
        
         $imprimante->idimp=$this->params()->fromPost('idimp');
        $imprimante->idec=$this->params()->fromPost('idec');
       $imprimante->idposte= $this->params()->fromPost('idposte');
    $imprimante->idetab= $this->params()->fromPost('idetab');
   
        $imprimante->marque=$this->params()->fromPost('marque');
    $imprimante->nserie= $this->params()->fromPost('nserie');
   
    $imprimante->type= $this->params()->fromPost('type');
        $imprimante->consommable= $this->params()->fromPost('consommable');
  
  
  
      $pos= $this->params()->fromPost('idposte');
    $idetab= $this->params()->fromPost('idetab');
           
       try{
   $this->getImprimanteTable()->saveImprimante($imprimante);
   echo "true";
    }catch(\Exeception $ex){
        echo $ex->getMessage();
    
    }
       return $this
            ->redirect()
    ->toUrl('fiche?idpost='.$pos);
 
    }
    
       public function  modscAction()
    {//recuperation des variable
         $scanneur=new Scanneur();
        
       
        $scanneur->idsc=$this->params()->fromPost('idsc');
       $scanneur->idposte= $this->params()->fromPost('idposte');
    $scanneur->idetab= $this->params()->fromPost('idetab');
   
        $scanneur->marque=$this->params()->fromPost('marque');
    $scanneur->nserie= $this->params()->fromPost('nserie');
   
    $scanneur->type= $this->params()->fromPost('type');
      $pos= $this->params()->fromPost('idposte');
    $idetab= $this->params()->fromPost('idetab');
  
   
           
       try{
   $this->getScanneurTable()->saveScanneur($scanneur);
   echo "true";
    }catch(\Exeception $ex){
        echo $ex->getMessage();
    
    }
       return $this
            ->redirect()
    ->toUrl('fiche?idpost='.$pos);
        
  
 
  
    }
    public function  addscanAction()
    {//recuperation des variable
         $scanneur=new Scanneur();
        
       
        $scanneur->idsc=$this->params()->fromPost('idsc');
       $scanneur->idposte= $this->params()->fromPost('idposte');
    $scanneur->idetab= $this->params()->fromPost('idetab');
   
        $scanneur->marque=$this->params()->fromPost('marque');
    $scanneur->nserie= $this->params()->fromPost('nserie');
   
    $scanneur->type= $this->params()->fromPost('type');
      $pos= $this->params()->fromPost('idposte');
    $idetab= $this->params()->fromPost('idetab');
  
   
           
       try{
   $this->getScanneurTable()->saveScanneur($scanneur);
   echo "true";
    }catch(\Exeception $ex){
        echo $ex->getMessage();
    
    }
       return $this
            ->redirect()
    ->toUrl('element?idposte='.$pos.'&idetab='.$idetab);
    }
     public function  modelAction()
    {//recuperation des variable
         $elementassocies=new Elementassocies();
        
       
        $elementassocies->idel=$this->params()->fromPost('idel');
          $poste= $this->params()->fromPost('idposte');
       $elementassocies->idposte= $this->params()->fromPost('idposte');
    $elementassocies->idetab= $this->params()->fromPost('idetab');
   
        $elementassocies->edse=$this->params()->fromPost('edse');
    $elementassocies->taillse= $this->params()->fromPost('taillse');
   
    $elementassocies->original= $this->params()->fromPost('original');
     $elementassocies->internet= $this->params()->fromPost('internet');
      $elementassocies->application1= $this->params()->fromPost('application1');
       $elementassocies->application2= $this->params()->fromPost('application2');
 
  
   
           
       try{
  $this->getElementassociesTable()->saveElementassocies($elementassocies);
   echo "true";
    }catch(\Exeception $ex){
        echo $ex->getMessage();
    
    }
       return $this
            ->redirect()
    ->toUrl('fiche?idpost='.$poste);
       
  
    }
    public function  addelAction()
    {//recuperation des variable
         $elementassocies=new Elementassocies();
        
       
        $elementassocies->idel=$this->params()->fromPost('idel');
       $elementassocies->idposte= $this->params()->fromPost('idposte');
    $elementassocies->idetab= $this->params()->fromPost('idetab');
   
        $elementassocies->edse=$this->params()->fromPost('edse');
    $elementassocies->taillse= $this->params()->fromPost('taillse');
   
    $elementassocies->original= $this->params()->fromPost('original');
     $elementassocies->internet= $this->params()->fromPost('internet');
      $elementassocies->application1= $this->params()->fromPost('application1');
       $elementassocies->application2= $this->params()->fromPost('application2');
   try{
  $this->getElementassociesTable()->saveElementassocies($elementassocies);
   echo "true";
    }catch(\Exeception $ex){
        echo $ex->getMessage();
    
    }
       return $this
            ->redirect()
    ->toUrl('listetab');
       
  
    }

    public function getElementassociesTable() {
  if (!$this->Elementassociestable)  //test vide ?
       {    //initialiser usertable
             $sm = $this->getServiceLocator();
             $this->Elementassociestable = $sm->get('Application\Model\Elementassociestable');
         }
         return $this->Elementassociestable;
    }
       public function onDispatch(MvcEvent $e) {
              
                if(!$this->getAuthService()->hasIdentity()){
                      return $this
                              ->redirect()
                              ->toUrl('/gestionposte/public/application/index/login');
                }  parent::onDispatch($e);
                   $admin=$this->getAuthService()
                    ->getStorage()->read();
                $this->layout()->setVariable("admin", $admin);  
   }
   public function logoutAction(){
          $this->getAuthService()->clearIdentity();
                 return $this
                         ->redirect()
                         ->toUrl("/gestionposte/public/application/index/login");
         
             }   }
