<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Artikels extends Model
{
    protected $table = "tb_artikel";
    protected $fillable = ['judul','subject'];
    public $timestamps = false;
}
