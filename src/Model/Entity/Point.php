<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Point Entity
 *
 * @property int $id
 * @property int $user_id
 * @property \Cake\I18n\FrozenTime $time
 * @property int $type_flg
 * @property int $amount
 * @property int $mtb_use_id
 * @property string|null $note
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\MtbUse $mtb_use
 */
class Point extends Entity
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
        'user_id' => true,
        'time' => true,
        'type_flg' => true,
        'amount' => true,
        'mtb_use_id' => true,
        'note' => true,
        'created' => true,
        'modified' => true,
        'user' => true,
        'mtb_use' => true
    ];
}
