<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Szalloda extends Model
{
    use HasFactory;

    protected $table = 'szalloda';
    protected $primaryKey = 'az';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = ['az', 'nev', 'besorolas', 'helyseg_az', 'tengerpart_tav', 'repter_tav', 'felpanzio'];

    public function helyseg()
    {
        return $this->belongsTo(Helyseg::class, 'helyseg_az', 'az');
    }

    public function arak()
    {
        return $this->hasMany(Tavasz::class, 'szalloda_az', 'az');
    }
}