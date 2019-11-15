<?php

namespace App\Controller\Admin;

use App\Controller\Admin\AppController;

/**
 * RefBillStatus Controller
 *
 * @property \App\Model\Table\RefBillStatusTable $RefBillStatus
 *
 * @method \App\Model\Entity\RefBillStatus[] paginate($object = null, array $settings = [])
 */
class RefBillStatusController extends AppController {

    public $paginate = [
        'page' => 1,
        'limit' => 10,
        'maxLimit' => 150,
        /*        'fields' => [
          'id', 'name', 'description'
          ],
         */ 'sortWhitelist' => [
            'id', 'name', 'description'
        ]
    ];

    public function initialize() {
        parent::initialize();
        // Use the Bootstrap layout from the plugin.
        // $this->viewBuilder()->setLayout('admin');
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index() {
        $refBillStatuss = $this->paginate($this->RefBillStatus);

        $this->set(compact('refBillStatuss'));
        $this->set('_serialize', ['refBillStatuss']);
    }

    /**
     * View method
     *
     * @param string|null $id refBillStatus id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null) {
        $refBillStatus = $this->RefBillStatus->get($id, [
            'contain' => []
        ]);

        $this->set('refBillStatus', $refBillStatus);
        $this->set('_serialize', ['refBillStatus']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add() {
        $refBillStatus = $this->RefBillStatus->newEntity();
        if ($this->request->is('post')) {
            $refBillStatus = $this->RefBillStatus->patchEntity($refBillStatus, $this->request->getData());
            if ($this->RefBillStatus->save($refBillStatus)) {
                $this->Flash->success(__('The refBillStatus has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The refBillStatus could not be saved. Please, try again.'));
        }
        $this->set(compact('refBillStatus'));
        $this->set('_serialize', ['refBillStatus']);
    }

    /**
     * Edit method
     *
     * @param string|null $id refBillStatus id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null) {
        $refBillStatus = $this->RefBillStatus->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $refBillStatus = $this->RefBillStatus->patchEntity($refBillStatus, $this->request->getData());
            if ($this->RefBillStatus->save($refBillStatus)) {
                $this->Flash->success(__('The refBillStatus has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The refBillStatus could not be saved. Please, try again.'));
        }
        $this->set(compact('refBillStatus'));
        $this->set('_serialize', ['refBillStatus']);
    }

    /**
     * Delete method
     *
     * @param string|null $id refBillStatus id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null) {
        $this->request->allowMethod(['post', 'delete']);
        $refBillStatus = $this->RefBillStatus->get($id);
        if ($this->RefBillStatus->delete($refBillStatus)) {
            $this->Flash->success(__('The refBillStatus has been deleted.'));
        } else {
            $this->Flash->error(__('The refBillStatus could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

}
