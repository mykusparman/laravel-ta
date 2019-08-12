<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{
    protected $table = "campaign";

    protected $fillable = ['id_sokmul','title','description','date','expired','goal','status','gambar'];
}
