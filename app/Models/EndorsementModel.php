<?php

namespace App\Models;

use CodeIgniter\Model;

class EndorsementModel extends Model
{
    protected $table = 'endorsement';
    protected $primaryKey = 'endorsementId';
<<<<<<< HEAD
    protected $allowedFields = ['endorsementFlayer, endorsementNama, endorsementTanggalAwal, endorsementTanggalAkhir, endorsementDeskripsi'];
=======
    protected $allowedFields = ['endorsementFlayer', 'endorsementNama', 'endorsementTanggalAwal', 'endorsementTanggalAkhir', 'endorsementDeskripsi'];
>>>>>>> 7bc58f52a23118c8da44c176e612e59c5dbd2249
    protected $returnType = 'object';
}
