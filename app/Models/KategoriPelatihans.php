<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriPelatihans extends Model
{
    use HasFactory;

    protected $table = 'kategori_pelatihan';
    protected $fillable = ['name'];
    protected $primaryKey = 'id';

}
