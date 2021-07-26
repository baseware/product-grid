<?php
declare(strict_types=1);

namespace CakeCart\Controller;

use CakeCart\Controller\AppController;

/**
 * Variants Controller
 *
 * @property \CakeCart\Model\Table\VariantsTable $Variants
 * @method \CakeCart\Model\Entity\Variant[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class VariantsController extends AppController
{
    public function initialize(): void {
        parent::initialize();
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
            'contain' => ['Units', 'Products', 'Statuses'],
        ];
        $variants = $this->paginate($this->Variants);

        $this->set(compact('variants'));
    }

    /**
     * View method
     *
     * @param string|null $id Variant id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $variant = $this->Variants->get($id, [
            'contain' => ['Units', 'Products', 'Statuses', 'Variantimages'],
        ]);

        $this->set(compact('variant'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $variant = $this->Variants->newEmptyEntity();
        if ($this->request->is('post')) {
            $variant = $this->Variants->patchEntity($variant, $this->request->getData());
            if ($this->Variants->save($variant)) {
                $this->Flash->success(__('The variant has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The variant could not be saved. Please, try again.'));
        }
        $units = $this->Variants->Units->find('list', ['limit' => 200]);
        $products = $this->Variants->Products->find('list', ['limit' => 200]);
        $statuses = $this->Variants->Statuses->find('list', ['limit' => 200]);
        $this->set(compact('variant', 'units', 'products', 'statuses'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Variant id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $variant = $this->Variants->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $variant = $this->Variants->patchEntity($variant, $this->request->getData());
            if ($this->Variants->save($variant)) {
                $this->Flash->success(__('The variant has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The variant could not be saved. Please, try again.'));
        }
        $units = $this->Variants->Units->find('list', ['limit' => 200]);
        $products = $this->Variants->Products->find('list', ['limit' => 200]);
        $statuses = $this->Variants->Statuses->find('list', ['limit' => 200]);
        $this->set(compact('variant', 'units', 'products', 'statuses'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Variant id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $variant = $this->Variants->get($id);
        if ($this->Variants->delete($variant)) {
            $this->Flash->success(__('The variant has been deleted.'));
        } else {
            $this->Flash->error(__('The variant could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
