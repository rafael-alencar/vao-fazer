<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Entity Tarefa
 *
 * @property int $id
 * @property string $titulo
 * @property string $descricao
 * @property string $finalizada
 */
class Tarefa extends Entity
{
    protected $_accessible = [
        '*' => true,
        'id' => false
    ];
}
