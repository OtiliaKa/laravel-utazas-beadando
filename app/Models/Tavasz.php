<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tavasz extends Model
{
    use HasFactory;

    protected $table = 'tavasz';

    protected $fillable = ['szalloda_az', 'indulas', 'idotartam', 'ar'];

    public function szalloda()
    {
        return $this->belongsTo(Szalloda::class, 'szalloda_az', 'az');
    }
}