<?php
namespace App\Model\Table;

use App\Model\Entity\User;
use App\Model\Entity\Product;
use App\Model\Entity\Message;

interface MessageInterface
{
  public function add(User $from_user, Product $product, String $content, User $to_user = null) : boolean;

  public function cancel(Message $message) : boolean;

}
