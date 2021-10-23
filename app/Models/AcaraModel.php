<?php

namespace App\Models;

use CodeIgniter\Model;

class AcaraModel extends Model
{
    protected $table = 'acara';
    protected $primaryKey = 'acaraId';
    protected $allowedFields = ['acaraFlayer, acaraNama, acaraHari, acaraJamMulai, acaraJamAkhir, acaraStatus, acaraArsip'];
    protected $returnType = 'object';
}   