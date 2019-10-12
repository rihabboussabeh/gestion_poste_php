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

 use Application\Model\Userservice;
 use Application\Model\Userservicetable;
 use Zend\Mvc\MvcEvent;
 

class IndexController extends AbstractActionController
  {  
      private $authService;
           private $Userservicetable;
   
 private function getAuthService(){
        
      if (!$this->authService)  //test vide ?
       {    //initialiser usertable en post
             $sm = $this->getServiceLocator();
             $this->authService = $sm->get('AuthService');
         }
         return $this->authService;
  
        
    }
   
       private function getUserservicetable(){
        
      if (!$this->Userservicetable)  //test vide ?
       {    //initialiser usertable
             $sm = $this->getServiceLocator();
             $this->Userservicetable = $sm->get('Application\Model\Userservicetable');
         }
         return $this->Userservicetable;
  
        
    }
    



     
   public function dologinAction()
    {
        $login=$this->params()->fromPost('login');
        $password=$this->params()->fromPost('password');
        
        //recupiration de db adabter existant
   $authService= $this->getAuthService();
    $authAdapter=$authService->getAdapter();
    $authAdapter
            
    ->setIdentity($login)
    ->setCredential($password)
;
//lancer la verification
$result=$authService->authenticate($authAdapter);

if($result->isValid())
{
     $userservice=$authAdapter->getResultRowObject();
$authService->getStorage()->write($userservice);
  
   return $this
            ->redirect()
    ->toUrl('/gestionposte/public/application/service/etab');
 
} else {return $this
            ->redirect()
    ->toUrl('/gestionposte/public/application/index/login');}

    
   
exit();


    }
      

      
      
        public function loginAction()
    {
       $this->layout('layout/layoutind');
        return new ViewModel();
    }
        public function inscriptionAction()
    {
       $this->layout('layout/layoutind');
        return new ViewModel();
    }
 
     
      
   
      public function adduserserviceAction()
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
    ->toUrl('login');
  
    }
      
}
