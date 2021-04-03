<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KategoriArtikel extends Model
{
    protected $table = "tb_kat_artikel";

    public function Artikel()
    {
        return $this->hasMany(Artikels::class, 'kat_artikel_id', 'id');
    }
}
