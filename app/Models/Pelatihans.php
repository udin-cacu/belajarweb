<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelatihans extends Model
{
    use HasFactory;

    protected $table = 'pelatihans';
    protected $fillable = ['nama'];
    protected $primaryKey = 'id';
}
