<?php
namespace App\Model\Entity;

use App\Model\Entity\User;
use App\Model\Entity\Product;
use App\Model\Entity\Message;

interface UserTableInterface
{
   public function find_users_by_id(Int $id) : array;

   public function all() : array;

   public function find_users_by_area(Mtbarea $mtb_area) : array;

   public function find_users_by_member_code(string $code) : array;

   public function find_users_by_user_statuses(Mtbuserstatuses $mtb_user_statuses) : array;
}