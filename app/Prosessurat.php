<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Date\Date;

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
    public function layanan()
    {
        return $this->belongsTo(Layanan::class);
    }

    // fungsi mengubah format tanggal
    public function getCreatedAtAttribute()
    {
        Date::setLocale('id');
        return Date::parse($this->attributes['created_at'])
            ->format('d M Y H:i');
    }

    public function getUpdatedAtAttribute()
    {
        Date::setLocale('id');
        return Date::parse($this->attributes['updated_at'])
            ->diffForHumans();
    }

    public function getTglsuratAttribute()
    {
        Date::setLocale('id');
        return Date::parse($this->attributes['tglsurat'])
            ->format('d F Y');
    }

    // public function getTglajuanAttribute()
    // {
    //     Date::setLocale('id');
    //     return Date::parse($this->attributes['tglajuan'])
    //         ->format('d M Y H:i');
    // }
}
