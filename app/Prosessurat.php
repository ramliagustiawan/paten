<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prosessurat extends Model
{
    protected $table = 'proses_surat';

    protected $guarded = [];

    public function service()
    {
        return $this->belongsTo(Service::class);
    }

    public function iumk()
    {
        return $this->belongsTo(Iumk::class);
    }

    
}
