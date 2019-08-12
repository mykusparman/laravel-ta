<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    protected $table="laporan";

    protected $fillable=['id_campaign','title','description','date','gambar'];
}
