<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OurServiceDetail extends Model
{
    protected $guarded;

    public function service() {

        return $this->belongsTo(OurService::class);
    }
}
