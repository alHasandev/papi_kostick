<?php

namespace App\Models;

use CodeIgniter\Model;

class AspectModel extends Model
{
  protected $table          = 'aspects';
  protected $allowedFields  = ['code', 'description'];
  protected $useTimestamps  = true;
}
