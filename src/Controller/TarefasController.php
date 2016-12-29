<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Controller Tarefas
 *
 * @property \App\Model\Table\TarefasTable $Tarefas
 */
class TarefasController extends AppController
{

    /**
     * Listar tarefas
     */
    public function index()
    {
        $tarefas = $this->paginate(
            $this->Tarefas,
            ['order'=>['finalizada'=>'ASC','id'=>'DESC']]
        );

        $this->set(compact('tarefas'));
        $this->set('_serialize', ['tarefas']);
    }

    /**
     * Visualizar tarefa
     */
    public function view($id = null)
    {
        $tarefa = $this->Tarefas->get($id, [
            'contain' => []
        ]);

        $this->set('tarefa', $tarefa);
        $this->set('_serialize', ['tarefa']);
    }

    /**
     * Criar tarefa
     */
    public function add()
    {
        $tarefa = $this->Tarefas->newEntity();
        if ($this->request->is('post')) {
            $tarefa = $this->Tarefas->patchEntity($tarefa, $this->request->data);
            if ($this->Tarefas->save($tarefa)) {
                $this->Flash->success(__('TAREFA_CRIADA_SUCESSO'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('ERRO_CRIAR_TAREFA'));
            }
        }
        $this->set(compact('tarefa'));
        $this->set('_serialize', ['tarefa']);
    }

    /**
     * Editar tarefa
     */
    public function edit($id = null)
    {
        $tarefa = $this->Tarefas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tarefa = $this->Tarefas->patchEntity($tarefa, $this->request->data);
            if ($this->Tarefas->save($tarefa)) {
                $this->Flash->success(__('TAREFA_MODIFICADA_SUCESSO'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('ERRO_MODIFICAR_TAREFA'));
            }
        }
        $this->set(compact('tarefa'));
        $this->set('_serialize', ['tarefa']);
    }

    /**
     * Excluir tarefa
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tarefa = $this->Tarefas->get($id);
        if ($this->Tarefas->delete($tarefa)) {
            $this->Flash->success(__('TAREFA_EXCLUIDA_SUCESSO'));
        } else {
            $this->Flash->error(__('ERRO_EXCLUIR_TAREFA'));
        }

        return $this->redirect(['action' => 'index']);
    }

    /**
     * Marcar tarefa como finalizada
     */
    public function finalizar($id = null)
    {
        $this->request->allowMethod(['post','put']);
        $tarefa = $this->Tarefas->get($id);
        $tarefa->finalizada = true;
        if ($this->Tarefas->save($tarefa)) {
            $this->Flash->success(__('TAREFA_FINALIZADA_SUCESSO'));
        } else {
            $this->Flash->error(__('ERRO_FINALIZAR_TAREFA'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
