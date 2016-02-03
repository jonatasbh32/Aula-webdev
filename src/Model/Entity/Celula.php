<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Celula Entity.
 *
 * @property int $id
 * @property string $nome
 * @property string $email
 * @property string $endereco
 * @property string $bairro
 * @property string $cidade
 * @property string $obs
 * @property int $dia_id
 * @property \App\Model\Entity\Dia $dia
 * @property int $hora_id
 * @property \App\Model\Entity\Hora $hora
 * @property \App\Model\Entity\Lidere[] $lideres
 * @property \App\Model\Entity\Membro[] $membros
 */
class Celula extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id' => false,
    ];
}
