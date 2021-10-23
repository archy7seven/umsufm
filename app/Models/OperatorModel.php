<?php

namespace App\Models;

use CodeIgniter\Model;

class OperatorModel extends Model
{
    protected $table = 'operator';
    protected $primaryKey = 'operatorId';
    protected $useTimestamps = true;
    protected $allowedFields = ['operatorUsername', 'operatorPassword', 'operatorNama'];
    protected $returnType = 'object';
}   