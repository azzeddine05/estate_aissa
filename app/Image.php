<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;


class Image extends Model
{
    use Notifiable;

    //protected $table = 'rdvasaisie';
    protected $fillable = [
        'id_estate', 'image', 
    ];
}
