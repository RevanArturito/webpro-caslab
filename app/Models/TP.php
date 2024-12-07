<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TP extends Model
{
    use HasFactory;
    protected $table = 'tps'; 
    protected $fillable = ['judul', 'sub_judul', 'kategori','tanggal_post','deadline_tp','deskripsi_tp'];

}
