<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipePeserta extends Model
{
    use HasFactory;
    protected $table = 'tipe_peserta';
    protected $dates = ['created_at', 'updated_at'];
    protected $guarded = [];

    protected $fillable = ['tipe'];

    public function institusi()
    {
    	return $this->hasMany('App\Models\Institusi','id');
    }
}
