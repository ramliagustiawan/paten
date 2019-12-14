<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Date\Date;

class Report extends Model
{
    protected $table = 'lapors';

    protected $guarded = [];

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
}
