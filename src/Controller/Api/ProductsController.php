<?php
declare(strict_types=1);

namespace CakeCart\Controller\Api;

use CakeCart\Controller\Api\AppController;
use Cake\ORM\TableRegistry;
use Cake\Event\EventInterface;
/**
 * Products Controller
 *
 * @property \CakeCart\Model\Table\ProductsTable $Users
 * @method \CakeCart\Model\Entity\Product[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProductsController extends AppController
{
    private $Users;
    
    public function initialize(): void {
        parent::initialize();
        $this->Users =TableRegistry::getTableLocator()->get('CakeCart.Users');
        $this->Authentication->allowUnauthenticated(['index','edit']);
        
    }
    
    public function index(){
         $this->Crud->on('beforePaginate', function(EventInterface $event) { 
                 $event->getSubject()->query = $event->getSubject()->query->find('all',['conditions'=>['statuse_id'=>'2']]);
         });
        return $this->Crud->execute();
    }
    
    
//    public function edit($id){
//        if ($this->request->is(['patch', 'post', 'put'])) {
//             $product = $this->Products->get($id);
//            $product = $this->Products->patchEntity($product, $this->request->getData());
//             $data=['name'=>$this->request->getData('name'),'path'=>"products",'file'=>$this->request->getData('file')];
//               $image = $this->Image->upload($data);
//                 if($image['success']){
//                    $product->image = $image['data']['name'];
//                }
//        if ($this->Products->save($product)){
//            $this->set(['success'=>true,'message'=>'Added Successfully','data'=>$this->request->getData()]);
//        }else{
//            $this->set(['success'=>false,'message'=>'Error Occurred','data'=>$req,'error'=>$notification->getErrors()]);
//        }
//        
//        }
//        $this->viewBuilder()->setOption('serialize', true);
//    }
    
    
    
}
