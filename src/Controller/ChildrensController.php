<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Childrens Controller
 *
 * @property \App\Model\Table\ChildrensTable $Childrens
 *
 * @method \App\Model\Entity\Children[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ChildrensController extends AppController
{
    public function isAuthorized($user)
    {
        $action = $this->request->getParam('action');
        // Les actions 'add' et 'tags' sont toujours autorisés pour les utilisateur
        // authentifiés sur l'application
        if (in_array($action, ['add', 'tags'])) {
            return true;
        }

        // Toutes les autres actions nécessitent un slug
        $slug = $this->request->getParam('pass.0');
        if (!$slug) {
            return false;
        }

        // On vérifie que l'article appartient à l'utilisateur connecté
        $children = $this->Childrens->findBySlug($slug)->first();

        return $children->user_id === $user['id'];
    }
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users']
        ];
        $childrens = $this->paginate($this->Childrens);
        $refBillStatus = $this->RefBillStatus->find('list', ['limit' => 200]);
        $this->set(compact('childrens','refBillStatuss'));
    }

    /**
     * View method
     *
     * @param string|null $id Children id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $childrens = $this->Childrens->get($id, [
            'contain' => ['Users']

        ]);


        $this->set('children', $childrens);

    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $children = $this->Childrens->newEntity();
        if ($this->request->is('post')) {
            $children = $this->Childrens->patchEntity($children, $this->request->getData());

            $children->user_id = $this->Auth->user('id');

            if ($this->Childrens->save($children)) {
                $this->Flash->success(__('The children has been saved.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Impossible de sauvé votre enfant.'));
        }

        // Bâtir la liste des catégories
        $this->loadModel('Provinces');
        $provinces = $this->Provinces->find('list', ['limit' => 200]);

        // Extraire le id de la première catégorie
        $provinces = $provinces->toArray();
        reset($provinces);
        $province_id = key($provinces);

        // Bâtir la liste des sous-catégories reliées à cette catégorie
        $villes = $this->Childrens->Villes->find('list', [
            'conditions' => ['Villes.province_id' => $province_id],
        ]);

        $users = $this->Childrens->Users->find('list', ['limit' => 200]);
        $this->set(compact('children', $children, 'users', 'villes', 'provinces'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Children id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $children = $this->Childrens->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $children = $this->Childrens->patchEntity($children, $this->request->getData());
            if ($this->Childrens->save($children)) {
                $this->Flash->success(__('The children has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The children could not be saved. Please, try again.'));
        }
        $users = $this->Childrens->Users->find('list', ['limit' => 200]);
        $this->set(compact('children', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Children id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $children = $this->Childrens->get($id);
        if ($this->Childrens->delete($children)) {
            $this->Flash->success(__('The children has been deleted.'));
        } else {
            $this->Flash->error(__('The children could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
