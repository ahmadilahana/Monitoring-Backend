<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class santri extends Model
{
    protected $fillable = [
        'nama', 'divisi', 'alamat'
    ];
}
