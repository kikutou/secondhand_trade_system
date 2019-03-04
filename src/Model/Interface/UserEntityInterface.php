<?php
namespace App\Model\Entity;

use App\Model\Entity\User;
use App\Model\Entity\Mtbarea;
use App\Model\Entity\Mtbuserstatuses;

interface UserEntityInterface
{
   public function add_new_user(string $email, string $password, string $lastname, string $firstname, string $lastname_reading, string $firstname_reading, Int $gender_flg, string $member_code, string $postcode, Mtbarea　$mtb_area, string $address1, string $address2, date $birthday, string $telephone_number, string $id_card_surface_pic, string $id_card_back_pic, Mtbuserstatuses $mtb_user_statuses, string $token, Datetime $email_approval_at, Datetime $information_approval_at) : boolean;

   public function update_user(User $user) : boolean;
}