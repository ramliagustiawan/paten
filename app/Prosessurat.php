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

    // fungsi mengubah format tanggal
    public function getCreatedAtAttribute()
    {
        return \Carbon\Carbon::parse($this->attributes['created_at'])
            ->format('d M Y H:i');
    }

    public function getUpdatedAtAttribute()
    {
        return \Carbon\Carbon::parse($this->attributes['updated_at'])
            ->diffForHumans();
    }

    public function getTglsuratAttribute()
    {
        \Carbon\Carbon::setLocale('id');
        return \Carbon\Carbon::parse($this->attributes['tglsurat'])
            ->format('d F Y');
    }
}
