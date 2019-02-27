<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * User Entity
 *
 * @property int $id
 * @property string $email
 * @property string $password
 * @property string $lastname
 * @property string $firstname
 * @property string $lastname_reading
 * @property string $firstname_reading
 * @property int $gender_flg
 * @property string $member_code
 * @property string $postcode
 * @property int $mtb_area_id
 * @property string $address1
 * @property string $address2
 * @property \Cake\I18n\FrozenDate $birthday
 * @property string $telephone_number
 * @property string $id_card_surface_pic
 * @property string $id_card_back_pic
 * @property int $mtb_user_status_id
 * @property string $token
 * @property \Cake\I18n\FrozenTime $email_approval_at
 * @property \Cake\I18n\FrozenTime $information_approval_at
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\MtbArea $mtb_area
 * @property \App\Model\Entity\MtbUserStatus $mtb_user_status
 * @property \App\Model\Entity\Point[] $points
 */
class User extends Entity
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
        'email' => true,
        'password' => true,
        'lastname' => true,
        'firstname' => true,
        'lastname_reading' => true,
        'firstname_reading' => true,
        'gender_flg' => true,
        'member_code' => true,
        'postcode' => true,
        'mtb_area_id' => true,
        'address1' => true,
        'address2' => true,
        'birthday' => true,
        'telephone_number' => true,
        'id_card_surface_pic' => true,
        'id_card_back_pic' => true,
        'mtb_user_status_id' => true,
        'token' => true,
        'email_approval_at' => true,
        'information_approval_at' => true,
        'created' => true,
        'modified' => true,
        'mtb_area' => true,
        'mtb_user_status' => true,
        'points' => true
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password',
        'token'
    ];
}
