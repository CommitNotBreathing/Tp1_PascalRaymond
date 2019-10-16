<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * RefBillStatus Controller
 *
 * @property \App\Model\Table\RefBillStatusTable $RefBillStatus
 *
 * @method \App\Model\Entity\RefBillStatus[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class RefBillStatusController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $refBillStatus = $this->paginate($this->RefBillStatus);

        $this->set(compact('refBillStatus'));
    }

    /**
     * View method
     *
     * @param string|null $id Ref Bill Status id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $refBillStatus = $this->RefBillStatus->get($id, [
            'contain' => ['Bills']
        ]);

        $this->set('refBillStatus', $refBillStatus);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $refBillStatus = $this->RefBillStatus->newEntity();
        if ($this->request->is('post')) {
            $refBillStatus = $this->RefBillStatus->patchEntity($refBillStatus, $this->request->getData());
            if ($this->RefBillStatus->save($refBillStatus)) {
                $this->Flash->success(__('The ref bill status has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ref bill status could not be saved. Please, try again.'));
        }
        $this->set(compact('refBillStatus'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Ref Bill Status id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $refBillStatus = $this->RefBillStatus->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $refBillStatus = $this->RefBillStatus->patchEntity($refBillStatus, $this->request->getData());
            if ($this->RefBillStatus->save($refBillStatus)) {
                $this->Flash->success(__('The ref bill status has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ref bill status could not be saved. Please, try again.'));
        }
        $this->set(compact('refBillStatus'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Ref Bill Status id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $refBillStatus = $this->RefBillStatus->get($id);
        if ($this->RefBillStatus->delete($refBillStatus)) {
            $this->Flash->success(__('The ref bill status has been deleted.'));
        } else {
            $this->Flash->error(__('The ref bill status could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
