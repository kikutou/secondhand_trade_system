<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Points Controller
 *
 * @property \App\Model\Table\PointsTable $Points
 *
 * @method \App\Model\Entity\Point[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PointsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'MtbUses']
        ];
        $points = $this->paginate($this->Points);

        $this->set(compact('points'));
    }

    /**
     * View method
     *
     * @param string|null $id Point id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $point = $this->Points->get($id, [
            'contain' => ['Users', 'MtbUses']
        ]);

        $this->set('point', $point);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $point = $this->Points->newEntity();
        if ($this->request->is('post')) {
            $point = $this->Points->patchEntity($point, $this->request->getData());
            if ($this->Points->save($point)) {
                $this->Flash->success(__('The point has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The point could not be saved. Please, try again.'));
        }
        $users = $this->Points->Users->find('list', ['limit' => 200]);
        $mtbUses = $this->Points->MtbUses->find('list', ['limit' => 200]);
        $this->set(compact('point', 'users', 'mtbUses'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Point id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $point = $this->Points->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $point = $this->Points->patchEntity($point, $this->request->getData());
            if ($this->Points->save($point)) {
                $this->Flash->success(__('The point has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The point could not be saved. Please, try again.'));
        }
        $users = $this->Points->Users->find('list', ['limit' => 200]);
        $mtbUses = $this->Points->MtbUses->find('list', ['limit' => 200]);
        $this->set(compact('point', 'users', 'mtbUses'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Point id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $point = $this->Points->get($id);
        if ($this->Points->delete($point)) {
            $this->Flash->success(__('The point has been deleted.'));
        } else {
            $this->Flash->error(__('The point could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
