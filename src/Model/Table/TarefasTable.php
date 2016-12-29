<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ModelTarefas
 *
 * @method \App\Model\Entity\Tarefa get($primaryKey, $options = [])
 * @method \App\Model\Entity\Tarefa newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Tarefa[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Tarefa|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Tarefa patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Tarefa[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Tarefa findOrCreate($search, callable $callback = null)
 */
class TarefasTable extends Table
{

    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->table('tarefas');
        $this->displayField('titulo');
        $this->primaryKey('id');
    }

    /**
     * Validacoes
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create')
            ->add('id', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->requirePresence('titulo', 'create')
            ->notEmpty('titulo');

        $validator
            ->allowEmpty('descricao');

        $validator
            ->allowEmpty('finalizada');

        return $validator;
    }

    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->isUnique(['id']));

        return $rules;
    }
}
