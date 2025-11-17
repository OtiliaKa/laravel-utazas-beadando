<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Helyseg extends Model
{
    use HasFactory;

    protected $table = 'helyseg';
    protected $primaryKey = 'az';
    public $incrementing = false;
    protected $keyType = 'int';

    protected $fillable = ['az', 'nev', 'orszag'];

    public function szallodak()
    {
        return $this->hasMany(Szalloda::class, 'helyseg_az', 'az');
    }
}