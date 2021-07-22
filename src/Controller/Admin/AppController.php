<?php
declare(strict_types=1);

namespace CakeCart\Controller\Admin;
use CakeCart\Controller\AppController as BaseController;
use Cake\Event\EventInterface;
/**
 * App Controller
 *
 */
class AppController extends BaseController
{
     
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
        
       
    }
       public function beforeFilter(EventInterface $event){
        parent::beforeFilter($event);
        
    }
}
