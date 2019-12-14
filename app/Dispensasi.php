<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Date\Date;

class Dispensasi extends Model
{
    protected $table = 'dispensasi';

    protected $guarded = [];

    public function service()
    {
        return $this->belongsTo(Service::class);
    }
    public function layanan()
    {
        return $this->belongsTo(Layanan::class);
    }
    public function pejabat()
    {
        return $this->belongsTo(Pejabat::class);
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

    public function getTgllhrAttribute()
    {
        Date::setLocale('id');
        return Date::parse($this->attributes['tgllhr'])
            ->format(' d F Y ');
    }

    public function getTgllhrclnAttribute()
    {
        Date::setLocale('id');
        return Date::parse($this->attributes['tgllhrcln'])
            ->format(' d F Y ');
    }

    public function getWaktuakadAttribute()
    {
        Date::setLocale('id');
        return Date::parse($this->attributes['waktuakad'])
            ->format(' d F Y ');
    }

    // tampilgambar
    public function getCover()
    {
        if (substr($this->fotokua, 0, 5) == "https") {
            return $this->fotokua;
        }

        if ($this->fotokua) {
            return asset($this->fotokua);
        }

        return 'https://via.placeholder.com/150x200.png?text=No+Data';
    }

    public function getPbb()
    {

        if (substr($this->fotopbb, 0, 5) == "https") {
            return $this->fotopbb;
        }

        if ($this->fotopbb) {
            return asset($this->fotopbb);
        }

        return 'https://via.placeholder.com/150x200.png?text=No+Data';
    }


    public function prosessurat()
    {
        return $this->belongsTo(Prosessurat::class);
    }

    public function scopeIsSelesai($query)
    {
        return $query->where('hasil', null);
    }
}
