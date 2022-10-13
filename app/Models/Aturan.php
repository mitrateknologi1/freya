<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aturan extends Model
{
    use HasFactory;
    protected $table = 'aturan';

    public function gejala()
    {
        return $this->belongsTo(Gejala::class, 'id_gejala', 'id')->withTrashed();
    }

    public function penyakit()
    {
        return $this->belongsTo(Penyakit::class, 'id_penyakit', 'id')->withTrashed();
    }
}
