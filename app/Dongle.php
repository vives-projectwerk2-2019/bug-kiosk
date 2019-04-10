<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Dongle extends Model
{
    use Notifiable;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'description', 'logo', 'dongle_hash',
    ];

    public function users()
    {
        return $this->belongsToMany('App\User', 'user_dongle_intersection');
    }
}
