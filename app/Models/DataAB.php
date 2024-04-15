<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataAB extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $table = "tinggi_muka_air";

    public function wilayah()
    {
        return $this->belongsTo(Wilayah::class, 'wilayah_id', 'id');
    }

    public function waktu()
    {
        return $this->belongsTo(Waktu::class, 'waktu_id', 'id');
    }
}
