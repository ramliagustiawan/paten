<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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

    public function getTgllhrAttribute()
    {
        \Carbon\Carbon::setLocale('id');
        return \Carbon\Carbon::parse($this->attributes['tgllhr'])
            ->format(' d F Y ');
    }

    public function getTgllhrclnAttribute()
    {
        \Carbon\Carbon::setLocale('id');
        return \Carbon\Carbon::parse($this->attributes['tgllhrcln'])
            ->format(' d F Y ');
    }

    public function getWaktuakadAttribute()
    {
        \Carbon\Carbon::setLocale('id');
        return \Carbon\Carbon::parse($this->attributes['waktuakad'])
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
