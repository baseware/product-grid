<?php
declare(strict_types=1);

namespace CakeCart\Controller;

use CakeCart\Controller\AppController;

/**
 * Products Controller
 *
 * @property \CakeCart\Model\Table\ProductsTable $Products
 * @method \CakeCart\Model\Entity\Product[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProductsController extends AppController
{
    public function initialize(): void {
        parent::initialize();
        $this->loadComponent('Search.Search', ['actions' => ['index']]);
        $this->Authentication->allowUnauthenticated(['index','view','edit','add','delete']);
    }
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Statuses', 'Users']
        ];
        $products = $this->paginate($this->Products->find('search',['search'=>$this->request->getQuery()])->where(['Products.statuse_id'=>2])->order(['Products.sequence'=>'ASC']));

        $this->set(compact('products'));
    }

    /**
     * View method
     *
     * @param string|null $id Product id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $product = $this->Products->get($id, [
            'contain' => ['Statuses', 'Users', 'Variants'],
        ]);

        $this->set(compact('product'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $product = $this->Products->newEmptyEntity();
        if ($this->request->is('post')) {
             $product = $this->Products->patchEntity($product, $this->request->getData());
            $data=['name'=>$this->request->getData('name'),'path'=>"products",'file'=>$this->request->getData('file')];
            $image = $this->Image->upload($data);
            if($image['success']){
                 $product->image = $image['data']['name'];
            }
            if ($this->Products->save($product)) {
                $this->Flash->success(__('The product has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The product could not be saved. Please, try again.'));
        }
        $statuses = $this->Products->Statuses->find('list', ['limit' => 200]);
        $users = $this->Products->Users->find('list', ['limit' => 200]);
        $this->set(compact('product', 'statuses', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Product id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $product = $this->Products->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $product = $this->Products->patchEntity($product, $this->request->getData());
             $data=['name'=>$this->request->getData('name'),'path'=>"products",'file'=>$this->request->getData('file')];
               $image = $this->Image->upload($data);
                 if($image['success']){
                    $product->image = $image['data']['name'];
                }
                if ($this->Products->save($product)) {
                    $this->Flash->success(__('The product has been saved.'));

                    return $this->redirect(['action' => 'index']);
                }
            
            $this->Flash->error(__('The product could not be saved. Please, try again.'));
        }
        $statuses = $this->Products->Statuses->find('list', ['limit' => 200]);
        $users = $this->Products->Users->find('list', ['limit' => 200]);
        $this->set(compact('product', 'statuses', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Product id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $product = $this->Products->get($id);
        $entity = $this->Products->patchEntity($product, ['statuse_id'=>3]);
        if ($this->Products->save($entity)) {
            $this->Flash->success(__('The product has been deleted.'));
        } else {
            $this->Flash->error(__('The product could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
