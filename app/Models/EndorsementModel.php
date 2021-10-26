<?php

namespace App\Models;

use CodeIgniter\Model;

class EndorsementModel extends Model
{
    protected $table = 'endorsment';
    protected $primaryKey = 'endorsmentId';
    protected $allowedFields = ['endorsmentFlayer, endorsmentNama, endorsmentHari, endorsmentTanggalAwal, endorsmentTanggalAkhir, endorsmentdeskripsi'];
    protected $returnType = 'object';
}   