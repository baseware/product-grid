<?php
declare(strict_types=1);

namespace CakeCart\Controller\Api;
use CakeCart\Controller\AppController as BaseController;
use Cake\Event\EventInterface;
use Crud\Controller\ControllerTrait;
use Cake\Http\Exception\NotFoundException;
/**
 * App Controller
 *
 */
class AppController extends BaseController
{
//    use \Crud\Controller\ControllerTrait;
     use ControllerTrait;
     
    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading components.
     *
     * e.g. `$this->loadComponent('Security');`
     *
     * @return void
     */
   
    public function initialize(): void{
        parent::initialize();
        $this->loadComponent('RequestHandler', [
            'enableBeforeRedirect' => false,
        ]);  
        $this->loadComponent('Crud.Crud', [
            'actions' => [
                'Crud.Index',
                'Crud.View',
                'Crud.Add',
                'Crud.Edit',
                'Crud.Delete',
                'deleteAll' => ['className' => 'Crud.Bulk/Delete'],
            ],
            'listeners' => [
                'Crud.Api',
                'Crud.ApiPagination',
                'Crud.RelatedModels',
                'Crud.Redirect'
            ]
        ]);
       
    }
        public function beforeFilter(EventInterface $event){
                parent::beforeFilter($event);
                if($this->request->is('OPTIONS')){
                        $this->response = $this->response->cors($this->request)
                           ->allowOrigin(['*'])
                           ->allowMethods(['OPTIONS','GET','POST','PUT','PATCH','DELETE'])
                            ->allowHeaders(['x-xsrf-token', 'Origin', 'Content-Type', 'X-Auth-Token','Authorization','Accept'])
                           ->allowCredentials(['true'])
                           ->exposeHeaders(['Link'])
                           ->maxAge(30)
                           ->build();
                        return $this->response;
                    }
            }         
    
}
