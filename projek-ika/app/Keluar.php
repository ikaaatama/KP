<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Keluar extends Model
{
     protected $table = "keluar";

    protected $fillable = ['id','no_surat','tgl_keluar','tertuju','alamat_surat','perihal','created_at','update_at'];
}
