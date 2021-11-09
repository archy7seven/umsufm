<?php

namespace App\Models;

use CodeIgniter\Model;

class EndorsementModel extends Model
{
    protected $table = 'endorsement';
    protected $primaryKey = 'endorsementId';
    protected $allowedFields = ['endorsementFlayer, endorsementNama, endorsementTanggalAwal, endorsementTanggalAkhir, endorsementDeskripsi'];
    protected $returnType = 'object';
}
