<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PelatihanDetails extends Model
{
    use HasFactory;

    protected $table = 'pelatihan_details';
    protected $fillable = ['pelatihan_id'];
    protected $primaryKey = 'id';
}
