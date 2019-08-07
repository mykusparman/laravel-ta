<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    protected $table = "donation";

    protected $fillable = ['donor_name','donor_email','id_user','id_campaign','id_sokmul','amount','note','anonymous'];

    public function setPending()
    {
        $this->attributes['status'] = 'pending';
        self::save();
    }

    public function setSuccess()
    {
        $this->attributes['status'] = 'success';
        self::save();
    }

    public function setFailed()
    {
        $this->attributes['status'] = 'failed';
        self::save();
    }

    public function setExpired()
    {
        $this->attributes['status'] = 'expired';
        self::save();
    }
}
