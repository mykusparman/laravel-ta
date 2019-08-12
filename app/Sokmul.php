<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sokmul extends Model
{
    protected $table="sokmul";

    protected $fillable=['nama','usia','alamat','goal','catatan','pekerjaan','gambar','status'];
}
