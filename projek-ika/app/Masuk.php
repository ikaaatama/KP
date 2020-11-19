<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Masuk extends Model
{
     protected $table = "masuk";

    protected $fillable = ['id','no_surat','asal_surat','tgl_masuk','tertuju','perihal','file','created_at','update_at'];
}
