<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Product Entity
 *
 * @property int $id
 * @property int $from_user_id
 * @property int $to_users_id
 * @property int $category_id
 * @property int $mtb_sale_status_id
 * @property string $name
 * @property string $product_code
 * @property string|null $ship_code
 * @property string $detail
 * @property int $price
 * @property string $image1
 * @property string|null $image2
 * @property string|null $image3
 * @property string|null $image4
 * @property int|null $from_user_assessment
 * @property string|null $from_user_comment
 * @property int|null $to_user_assessment
 * @property string|null $to_user_comment
 * @property \Cake\I18n\FrozenTime|null $published_at
 * @property \Cake\I18n\FrozenTime|null $ordered_at
 * @property \Cake\I18n\FrozenTime|null $shipped_at
 * @property \Cake\I18n\FrozenTime|null $from_user_assessed_at
 * @property \Cake\I18n\FrozenTime|null $to_user_assessed_at
 * @property string|null $return_reason
 * @property \Cake\I18n\FrozenTime|null $return_requested_at
 * @property \Cake\I18n\FrozenTime|null $return_finished_at
 * @property \Cake\I18n\FrozenTime|null $admin_confirmed_at
 * @property string|null $prohibition_reason
 * @property \Cake\I18n\FrozenTime|null $prohibited_at
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Category $category
 * @property \App\Model\Entity\MtbSaleStatus $mtb_sale_status
 * @property \App\Model\Entity\Message[] $messages
 */
class Product extends Entity
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
        'category_id' => true,
        'mtb_sale_status_id' => true,
        'name' => true,
        'product_code' => true,
        'ship_code' => true,
        'detail' => true,
        'price' => true,
        'image1' => true,
        'image2' => true,
        'image3' => true,
        'image4' => true,
        'from_user_assessment' => true,
        'from_user_comment' => true,
        'to_user_assessment' => true,
        'to_user_comment' => true,
        'published_at' => true,
        'ordered_at' => true,
        'shipped_at' => true,
        'from_user_assessed_at' => true,
        'to_user_assessed_at' => true,
        'return_reason' => true,
        'return_requested_at' => true,
        'return_finished_at' => true,
        'admin_confirmed_at' => true,
        'prohibition_reason' => true,
        'prohibited_at' => true,
        'created' => true,
        'modified' => true,
        'user' => true,
        'category' => true,
        'mtb_sale_status' => true,
        'messages' => true
    ];
}
