<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Date\Date;

class Iumk extends Model
{
    protected $table = 'iumk';

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

    // tampilgambar
    public function getCover()
    {
        if (substr($this->fotoktp, 0, 5) == "https") {
            return $this->fotoktp;
        }

        if ($this->fotoktp) {
            return asset($this->fotoktp);
        }

        return 'https://via.placeholder.com/150x200.png?text=No+Data';
    }

    public function getSku()
    {

        if (substr($this->fotosku, 0, 5) == "https") {
            return $this->fotosku;
        }

        if ($this->fotosku) {
            return asset($this->fotosku);
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
    public function getDiri()
    {

        if (substr($this->fotodiri, 0, 5) == "https") {
            return $this->fotodiri;
        }

        if ($this->fotodiri) {
            return asset($this->fotodiri);
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
