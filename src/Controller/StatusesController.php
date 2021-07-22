<?php
declare(strict_types=1);

namespace CakeCart\Controller;

use CakeCart\Controller\AppController;

/**
 * Statuses Controller
 *
 * @property \CakeCart\Model\Table\StatusesTable $Statuses
 * @method \CakeCart\Model\Entity\Status[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class StatusesController extends AppController
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
            'contain' => ['Status'],
        ];
        $statuses = $this->paginate($this->Statuses);
        $this->set(compact('statuses'));
    }

    /**
     * View method
     *
     * @param string|null $id Status id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $status = $this->Statuses->get($id,['contain'=>['Status']]);

        $this->set(compact('status'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $status = $this->Statuses->newEmptyEntity();
        if ($this->request->is('post')) {
            $status = $this->Statuses->patchEntity($status, $this->request->getData());
            if ($this->Statuses->save($status)) {
                $this->Flash->success(__('The status has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The status could not be saved. Please, try again.'));
        }
        $statuses = $this->Statuses->find('list', ['conditions'=>['statuse_id IS'=>null],'limit' => 200]);
        $this->set(compact('status', 'statuses'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Status id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $status = $this->Statuses->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $status = $this->Statuses->patchEntity($status, $this->request->getData());
            if ($this->Statuses->save($status)) {
                $this->Flash->success(__('The status has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The status could not be saved. Please, try again.'));
        }
        $statuses = $this->Statuses->find('list', ['conditions'=>['statuse_id IS'=>null],'limit' => 200]);
        $this->set(compact('status', 'statuses'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Status id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $status = $this->Statuses->get($id);
        $entity = $this->Statuses->patchEntity($status, ['statuse_id'=>3]);
        if ($this->Statuses->save($entity)) {
            $this->Flash->success(__('The status has been deleted.'));
        } else {
            $this->Flash->error(__('The status could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
