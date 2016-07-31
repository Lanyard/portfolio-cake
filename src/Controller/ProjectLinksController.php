<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ProjectLinks Controller
 *
 * @property \App\Model\Table\ProjectLinksTable $ProjectLinks
 */
class ProjectLinksController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Projects', 'Links']
        ];
        $projectLinks = $this->paginate($this->ProjectLinks);

        $this->set(compact('projectLinks'));
        $this->set('_serialize', ['projectLinks']);
    }

    /**
     * View method
     *
     * @param string|null $id Project Link id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $projectLink = $this->ProjectLinks->get($id, [
            'contain' => ['Projects', 'Links']
        ]);

        $this->set('projectLink', $projectLink);
        $this->set('_serialize', ['projectLink']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $projectLink = $this->ProjectLinks->newEntity();
        if ($this->request->is('post')) {
            $projectLink = $this->ProjectLinks->patchEntity($projectLink, $this->request->data);
            if ($this->ProjectLinks->save($projectLink)) {
                $this->Flash->success(__('The project link has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The project link could not be saved. Please, try again.'));
            }
        }
        $projects = $this->ProjectLinks->Projects->find('list', ['limit' => 200]);
        $links = $this->ProjectLinks->Links->find('list', ['limit' => 200]);
        $this->set(compact('projectLink', 'projects', 'links'));
        $this->set('_serialize', ['projectLink']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Project Link id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $projectLink = $this->ProjectLinks->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $projectLink = $this->ProjectLinks->patchEntity($projectLink, $this->request->data);
            if ($this->ProjectLinks->save($projectLink)) {
                $this->Flash->success(__('The project link has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The project link could not be saved. Please, try again.'));
            }
        }
        $projects = $this->ProjectLinks->Projects->find('list', ['limit' => 200]);
        $links = $this->ProjectLinks->Links->find('list', ['limit' => 200]);
        $this->set(compact('projectLink', 'projects', 'links'));
        $this->set('_serialize', ['projectLink']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Project Link id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $projectLink = $this->ProjectLinks->get($id);
        if ($this->ProjectLinks->delete($projectLink)) {
            $this->Flash->success(__('The project link has been deleted.'));
        } else {
            $this->Flash->error(__('The project link could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
