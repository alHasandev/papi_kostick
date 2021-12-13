<?php

namespace App\Models;

use CodeIgniter\Model;

class QuestionModel extends Model
{
  protected $table          = 'questions';
  protected $allowedFields  = ['a_code', 'a_declaration', 'b_code', 'b_declaration'];
  protected $useTimestamps  = true;
}
