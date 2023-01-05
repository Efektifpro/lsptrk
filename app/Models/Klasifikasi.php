<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Klasifikasi extends Model
{
    use HasFactory;
    protected $table = 'klasifikasi';
    protected $dates = ['created_at', 'updated_at'];
    protected $guarded = [];

    protected $fillable = ['nama'];

    public function biodata()
    {
        return $this->hasMany(Biodata::class, 'klasifikasi_id', 'id');
    }
}
