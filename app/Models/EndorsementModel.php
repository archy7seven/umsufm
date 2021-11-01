<?php

namespace App\Models;

use CodeIgniter\Model;

class EndorsementModel extends Model
{
    protected $table = 'endorsement';
    protected $primaryKey = 'endorsmentId';
    protected $allowedFields = ['endorsementFlayer, endorsementNama, endorsementHari, endorsementTanggalAwal, endorsementTanggalAkhir, endorsementdeskripsi'];
    protected $returnType = 'object';
}
