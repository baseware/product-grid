<?php
declare(strict_types=1);

namespace CakeCart\Controller\Api;

use CakeCart\Controller\Api\AppController;
use Cake\ORM\TableRegistry;
use Cake\Event\EventInterface;
/**
 * Users Controller
 *
 * @property \CakeCart\Model\Table\UsersTable $Users
 * @method \CakeCart\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsersController extends AppController
{
    private $Users;
    
    public function initialize(): void {
        parent::initialize();
        $this->Users =TableRegistry::getTableLocator()->get('CakeCart.Users');
        $this->Authentication->allowUnauthenticated(['login']);
    }
    public function index(){
         $this->Crud->on('beforePaginate', function(EventInterface $event) { 
                 $event->getSubject()->query = $event->getSubject()->query->find('all',['conditions'=>['active'=>'Y',]])->contain(['Roles']);
         });
        return $this->Crud->execute();
        
    }
    
    public function login(){
         if ($this->request->is('post')) { 
            if(!$this->Authentication->getResult()->isValid()){
                $data = $this->request->input('json_decode');
                $this->set(array_merge($this->Users->Authkey($data),['_serialize' => ['success','message','data'],'_jsonp' => true ]));
           }else if($this->Authentication->getResult()->isValid()){
               $this->set(['success'=>true,'message'=>"Logged In",'data'=>[],'_serialize' => ['success','message','data'],'_jsonp' => true ]);
           }
        }
    }
}
