<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OurService extends Model
{
    protected $guarded;


    public function servicedetail() {

        return $this->hasOne(OurServiceDetail::class, 'service_id');
    }
}
