<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;
//

//use App\Model\Interface\MessageInterface;

/**
 * Message Entity
 *
 * @property int $id
 * @property int $from_user_id
 * @property int $to_users_id
 * @property int $product_id
 * @property string $content
 * @property \Cake\I18n\FrozenTime|null $readed_by_from_user_at
 * @property \Cake\I18n\FrozenTime|null $readed_by_to_user_at
 * @property \Cake\I18n\FrozenTime|null $readed_by_admin
 * @property \Cake\I18n\FrozenTime|null $canceled_at
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Product $product
 */
class Message extends Entity implements MessageInterface
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
        'from_user_id' => true,
        'to_users_id' => true,
        'product_id' => true,
        'content' => true,
        'readed_by_from_user_at' => true,
        'readed_by_to_user_at' => true,
        'readed_by_admin' => true,
        'canceled_at' => true,
        'created' => true,
        'modified' => true,
        'user' => true,
        'product' => true
    ];
}
