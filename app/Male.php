<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Male extends Model
{
    protected $table='models';

    protected $fillable = [
        'name', 'dateOfBirth', 'height','national','job', 'description','image'
    ];
}
