<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModulMateri extends Model
{
    use HasFactory;

    protected $table = 'modul_materi';
    protected $fillable = ['pelatihan_id'];
    protected $primaryKey = 'id';
}
